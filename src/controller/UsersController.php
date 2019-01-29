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
            $activeHabits = $this->habitDAO->selectAllActiveHabits(array(
              'user_id' => $_SESSION['user']['user_id'],
              'active' => TRUE
            ));
            $nonActiveHabits = $this->habitDAO->selectAllActiveHabits(array(
              'user_id' => $_SESSION['user']['user_id'],
              'active' => FALSE
            ));
            $allPossibleHabits = $this->habitDAO->selectAllPossibleHabits();
            $allPossibleHabitIcons = $this->habitDAO->selectAllPossibleHabitIcons();
            if (isset($_GET['add'])) {
              $colours = array('red', 'orange', 'green', 'blue', 'purple');
              if (!in_array($_GET['add'], $colours)) {
                $_SESSION['error'] = 'This habit category does not exist.';
                header('Location: index.php?page=profile&category=customize');
                exit();
              } else {
                $habitsForColour = $this->habitDAO->checkIfColourHasActiveHabits(array(
                  'user_id' => $_SESSION['user']['user_id'],
                  'habit_colour_name' =>  $_GET['add']
                ));
                if(in_array(1, array_column($habitsForColour, 'active'))) {
                  $_SESSION['error'] = 'This habit category already has an active habit.';
                  header('Location: index.php?page=profile&category=customize');
                  exit();
                } else {
                  $this->set('currentStep', 'add-habit-2');
                }
              }
            }
            if (isset($_GET['delete'])) {
              $this->habitDAO->deactivateHabit(array(
                'user_id' => $_SESSION['user']['user_id'],
                'habit_id' =>  $_GET['delete']
              ));
              $_SESSION['info'] = 'Habit successfully deleted.';
              header('Location: index.php?page=profile&category=customize');
              exit();
            }
            if(!empty($_POST['add-habit-1'])) {

            }
            function super_unique($array,$key) {
              $temp_array = [];
              foreach ($array as &$v) {
                if (!isset($temp_array[$v[$key]]))
                $temp_array[$v[$key]] =& $v;
              }
              $array = array_values($temp_array);
              return $array;
            }
            $this->set('activeHabits', $activeHabits);
            $this->set('nonActiveHabits', super_unique($nonActiveHabits,'habit_colour_name'));
            $this->set('allPossibleHabits', $allPossibleHabits);
            $this->set('allPossibleHabitIcons', $allPossibleHabitIcons);
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
              //HIER BEREKENEN WELKE DEFAULT HABITS ER MOETEN ZIJN BIJ WELKE GEKOZEN LIFEGOAL?
              $defaultHabits = array('meditate', 'hiking', 'reading', 'listen to music', 'deepen your conversations');
              foreach ($defaultHabits as $defaultHabit) {
                $this->habitDAO->insertDefaultHabits(array(
                  'user_id' => $inserteduser['user_id'],
                  'habit' => $defaultHabit
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
