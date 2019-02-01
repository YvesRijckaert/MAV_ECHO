<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/UserDAO.php';
require_once __DIR__ . '/../dao/HabitDAO.php';

class UsersController extends Controller {

  private $userDAO;
  private $habitDAO;

  function __construct() {
    $this->userDAO = new UserDAO();
    $this->habitDAO = new HabitDAO();
  }

  public function profile() {
    if (!empty($_SESSION['user'])) {
      if (!empty($_GET['category'])) {
        switch ($_GET['category']) {
          case 'info':
            if (!empty($_POST['update-profile'])) {
              $errors = array();
              if (empty($_POST['email'])) {
                $errors['email'] = 'Please enter your email';
              }
              if (empty($_POST['nickname'])) {
                $errors['email'] = 'Please enter a nickname';
              }
              if (empty($_POST['birthdate'])) {
                $errors['birthdate'] = 'Please enter your birthdate.';
              }
              if(empty($errors)) {
                $this->userDAO->update(array(
                  'email' => $_POST['email'],
                  'nickname' => $_POST['nickname'],
                  'birthdate' => $_POST['birthdate'],
                  'user_id' => $_SESSION['user']['user_id']
                ));
                $_SESSION['user']['email'] = $_POST['email'];
                $_SESSION['user']['nickname'] = $_POST['nickname'];
                $_SESSION['user']['birthdate'] = $_POST['birthdate'];
                $_SESSION['info'] = 'Successfully updated profile.';
                header('Location: index.php?page=profile&category=info');
                exit();
              }
            }
            $this->set('currentCategory', 'info');
            break;
          case 'customize':
            $this->set('currentStep', 1);
            $currentHabits = array();
            $allPossibleHabits = $this->habitDAO->selectAllPossibleHabits();
            $colours = array('red', 'orange', 'green', 'blue', 'purple');
            foreach ($colours as $key => $colour) {
              $currentHabits[$key] = $this->habitDAO->selectAllActiveHabitsWithColour(array(
                'user_id' => $_SESSION['user']['user_id'],
                'active' => TRUE,
                'habit_colour_name' => $colour
              ));
              if($currentHabits[$key] == false) {
                switch ($colour) {
                  case 'red':
                    $currentHabits[$key] = array(
                      'habit_colour_name' => 'red',
                      'habit_colour' => '#fe5455',
                      'active' => 0
                    );
                    break;
                  case 'orange':
                    $currentHabits[$key] = array(
                      'habit_colour_name' => 'orange',
                      'habit_colour' => '#fab81b',
                      'active' => 0
                    );
                    break;
                  case 'green':
                    $currentHabits[$key] = array(
                      'habit_colour_name' => 'green',
                      'habit_colour' => '#00d28b',
                      'active' => 0
                    );
                    break;
                  case 'blue':
                    $currentHabits[$key] = array(
                      'habit_colour_name' => 'blue',
                      'habit_colour' => '#4285ff',
                      'active' => 0
                    );
                    break;
                  case 'purple':
                    $currentHabits[$key] = array(
                      'habit_colour_name' => 'purple',
                      'habit_colour' => '#9278fd',
                      'active' => 0
                    );
                    break;
                  default:
                    $_SESSION['error'] = 'This habit category does not exist.';
                    header('Location: index.php?page=profile&category=customize');
                    exit();
                    break;
                }
              }
            }
            if (isset($_GET['add-habit'])) {
              if (!in_array($_GET['add-habit'], $colours)) {
                $_SESSION['error'] = 'This habit category does not exist.';
                header('Location: index.php?page=profile&category=customize');
                exit();
              } else {
                $habitsForColour = $this->habitDAO->checkIfColourHasActiveHabits(array(
                  'user_id' => $_SESSION['user']['user_id'],
                  'habit_colour_name' =>  $_GET['add-habit']
                ));
                if(in_array(1, array_column($habitsForColour, 'active'))) {
                  $_SESSION['error'] = 'This habit category already has an active habit.';
                  header('Location: index.php?page=profile&category=customize');
                  exit();
                } else {
                  $this->set('currentStep', 'add-habit-1');
                }
              }
            }
            if(!empty($_POST['add-habit-1'])) {
              $errors = array();
              if ($_POST['chosen_habit'] == 'neither' && empty($_POST['custom_habit'])) {
                $errors['add-habit'] = 'Please choose or write down a habit.';
              }
              if(empty($errors)) {
                if(!empty($_POST['custom_habit'])) {
                  $habitName = $_POST['custom_habit'];
                }
                if($_POST['chosen_habit'] != 'neither') {
                  $habitName = $allPossibleHabits[$_POST['chosen_habit'] - 1]['habit_name'];
                }
                $_SESSION['add-habit-colour-name'] = $_GET['add-habit'];
                $_SESSION['add-habit-name'] = $habitName;
                $allPossibleHabitIcons = $this->habitDAO->selectAllPossibleHabitIcons($_GET['add-habit']);
                $this->set('allPossibleHabitIcons', $allPossibleHabitIcons);
                $this->set('currentStep', 'add-habit-2');
              } else {
                  $this->set('errors', $errors);
              }
            }
            if(!empty($_POST['add-habit-2'])) {
              $errors = array();
              if(empty($_POST['chosen_habit_icon'])){
                $errors['add-habit-icon'] = 'Please choose a shape.';
              }
              if(empty($errors)) {
                $habit_icon = $this->habitDAO->selectHabitIcon($_POST['chosen_habit_icon']);
                if(!empty($habit_icon)) {
                  $this->habitDAO->insertNewHabit(array(
                    'user_id' => $_SESSION['user']['user_id'],
                    'habit_name' => $_SESSION['add-habit-name'],
                    'habit_colour_name' => $habit_icon['habit_colour_name'],
                    'habit_colour' => $habit_icon['habit_colour'],
                    'habit_icon' => $habit_icon['habit_icon'],
                  ));
                  $_SESSION['info'] = 'Added your new habit.';
                  header('Location: index.php?page=profile&category=customize');
                  exit();
                } else {
                  $_SESSION['error'] = 'This habit icon does not exist.';
                  header('Location: index.php?page=profile&category=customize');
                  exit();
                }
              }
              $this->set('errors', $errors);
            }
            if (isset($_GET['delete-habit'])) {
              $habit = $this->habitDAO->selectOne(array(
                'user_id' => $_SESSION['user']['user_id'],
                'habit_id' => $_GET['delete-habit']
              ));
              if (!empty($habit)) {
                $this->habitDAO->deactivateHabit(array(
                  'user_id' => $_SESSION['user']['user_id'],
                  'habit_id' =>  $_GET['delete-habit']
                ));
                $_SESSION['info'] = 'Habit successfully deleted.';
                header('Location: index.php?page=profile&category=customize');
                exit();
              } else {
                $_SESSION['error'] = 'Habit does not exist.';
                header('Location: index.php?page=profile&category=customize');
                exit();
              }
            }
            if (isset($_GET['add-goal'])) {
              //TODO: check if habit that's linked to goal exists

              if(isset($_GET['goal-type'])) {
                switch ($_GET['goal-type']) {
                  case 'repetitive':
                    # code...
                    break;
                  case 'streak':
                    # code...
                    break;
                  case 'total':
                    # code...
                    break;
                  default:
                    # code...
                    break;
                }
              }
            }

            $this->set('currentHabits', $currentHabits);
            $this->set('allPossibleHabits', $allPossibleHabits);
            $this->set('currentCategory', 'customize');
            break;
          case 'links':
            $this->set('currentCategory', 'links');
            break;
          default:
            header('Location: index.php?page=profile&category=info');
            break;
        }
      } else {
        header('Location: index.php?page=profile&category=info');
      }
    } else {
      $_SESSION['error'] = 'You have to be signed in.';
      header('Location: index.php');
      exit();
    }
    $this->set('title', 'Profile');
    $this->set('currentPage', 'profile');
  }

  public function register() {
    if (!empty($_SESSION['user'])) {
      header('Location: index.php?page=overview&view=day&day=' . date("d-m-Y"));
    } else {
      $this->set('currentStep', 1);
      if (!empty($_POST['register1'])){
        $errors = array();
          if (empty($_POST['email'])) {
            $errors['email'] = 'Please enter your email.';
          } else {
            $existing = $this->userDAO->selectByEmail($_POST['email']);
            if(!empty($existing)) {
              $errors['email'] = 'Email address is already in use.';
            }
          }
          if (empty($_POST['password'])) {
            $errors['password'] = 'Please enter a password.';
          }
          if ($_POST['confirm_password'] != $_POST['password']) {
            $errors['confirm_password'] = 'Passwords do not match.';
          }
          if (empty($errors)) {
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $this->set('currentStep', 2);
          } else {
            $this->set('errors', $errors);
          }
        }

      if (!empty($_POST['register2'])){
        $errors = array();
          if (empty($_POST['nickname'])) {
            $errors['nickname'] = 'Please enter a nickname.';
          }
          if (empty($_POST['birthdate'])) {
            $errors['birthdate'] = 'Please enter your birthdate.';
          }
          if (empty($errors)) {
            $_SESSION['nickname'] = $_POST['nickname'];
            $_SESSION['birthdate'] = $_POST['birthdate'];
            $this->set('currentStep', 3);
          }
          $this->set('errors', $errors);
        }

      if (!empty($_POST['register3'])){
        $errors = array();
          if (empty($_POST['lifegoal'])) {
            $errors['lifegoal'] = 'Please choose your lifegoal.';
          }
          if (empty($errors)) {
            $inserteduser = $this->userDAO->insert(array(
              'email' => $_SESSION['email'],
              'password' => $_SESSION['password'],
              'nickname' => $_SESSION['nickname'],
              'birthdate' => $_SESSION['birthdate'],
              'lifegoal' => $_POST['lifegoal']
            ));
            if (!empty($inserteduser)) {
              $defaultHabits = array('meditate', 'hiking', 'reading', 'listen to music', 'deepen your conversations');
              $defaultHabits = array(
                array(
                  'habit_name' => 'no smoking',
                  'habit_icon' => '<svg width="40px" height="40px" viewBox="0 0 40 40"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-54.000000, -229.000000)" fill="#fe5455"><polygon points="54 229 94 269 54 269"></polygon></g></g></svg>',
                  'habit_colour_name' => 'red',
                  'habit_colour' => '#fe5455'
                ),
                array(
                  'habit_name' => 'no alcohol',
                  'habit_icon' => '<svg width="40px" height="40px" viewBox="0 0 40 40"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-293.000000, -160.000000)" fill="#fab81b"><path d="M320.132835,172.865565 C318.327894,171.089538 315.85143,169.993769 313.119003,169.993769 C307.596156,169.993769 303.119003,174.470365 303.119003,179.992526 C303.119003,182.724613 304.214908,185.200769 305.991156,187.005485 L293,199.995026 L293,160 L333,160 L320.132835,172.865565 Z"></path></g></g></svg>',
                  'habit_colour_name' => 'orange',
                  'habit_colour' => '#fab81b'
                ),
                array(
                  'habit_name' => '5k running',
                  'habit_icon' => '<svg width="40px" height="40px" viewBox="0 0 40 40"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-214.000000, -160.000000)" fill="#00d28b"><path d="M254,179.997513 L254,199.995026 L233.8,199.995026 L214,180.197488 L214,160 L234,160 L254,179.997513 Z"></path></g></g></svg>',
                  'habit_colour_name' => 'green',
                  'habit_colour' => '#00d28b'
                ),
                array(
                  'habit_name' => 'meditate',
                  'habit_icon' => '<svg width="40px" height="40px" viewBox="0 0 40 40"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-134.000000, -160.000000)" fill="#4285ff"><rect x="134" y="160" width="40" height="39.9950255" rx="19.9975128"></rect></g></g></svg>',
                  'habit_colour_name' => 'blue',
                  'habit_colour' => '#4285ff'
                ),
                array(
                  'habit_name' => 'drink 1l water',
                  'habit_icon' => '<svg width="40px" height="40px" viewBox="0 0 40 40"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g transform="translate(-54.000000, -160.000000)" fill="#9278fd"><path d="M54,160 L94,160 L94,200 L54,200 L54,160 Z M64.5882353,169.411765 L64.5882353,189.411765 L84.5882353,189.411765 L84.5882353,169.411765 L64.5882353,169.411765 Z"></path></g></g></svg>',
                  'habit_colour_name' => 'purple',
                  'habit_colour' => '#9278fd'
                )
              );

              foreach ($defaultHabits as $defaultHabit) {
                $this->habitDAO->insertNewHabit(array(
                  'user_id' => $inserteduser['user_id'],
                  'habit_name' => $defaultHabit['habit_name'],
                  'habit_colour_name' => $defaultHabit['habit_colour_name'],
                  'habit_colour' => $defaultHabit['habit_colour'],
                  'habit_icon' => $defaultHabit['habit_icon'],
                ));
              }
              $_SESSION['info'] = 'Registration Successful! You can now log in.';
              header('Location: index.php?page=login');
              exit();
            }
          }
          $this->set('currentStep', 3);
          $this->set('errors', $errors);
        }
    }
    $this->set('title', 'Register');
    $this->set('currentPage', 'register');
  }

  public function login() {
    if (!empty($_SESSION['user'])) {
      header('Location: index.php?page=overview&view=day&day=' . date("d-m-Y"));
    } else {
      if (!empty($_POST)) {
        $errors = array();
        if(empty($_POST['email'])) {
          $errors['email'] = 'Please enter your email.';
        }
        if(empty($_POST['password'])) {
          $errors['password'] = 'Please enter your password.';
        }
        if (empty($errors)) {
          $existing = $this->userDAO->selectByEmail($_POST['email']);
          if (!empty($existing)) {
            if (password_verify($_POST['password'], $existing['password'])) {
              $_SESSION['user'] = $existing;
              $_SESSION['info'] = 'Logged In';
              header('Location: index.php?page=overview&view=day&day=' . date("d-m-Y"));
              exit();
            } else {
              $_SESSION['error'] = 'Unknown username / password';
              header('Location: index.php?page=login');
              exit();
            }
          } else {
            $_SESSION['error'] = 'Unknown username / password.';
            header('Location: index.php?page=login');
            exit();
          }
        } else {
          $_SESSION['error'] = 'Unknown username / password';
          header('Location: index.php?page=login');
          exit();
        }
      }
    }
    $this->set('title', 'Login');
    $this->set('currentPage', 'login');
  }

  public function logout() {
    if (!empty($_SESSION['user'])) {
      unset($_SESSION['user']);
    }
    $_SESSION['info'] = 'Logged Out';
    header('Location: index.php');
    exit();
  }

}
