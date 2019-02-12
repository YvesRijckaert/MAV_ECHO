<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/UserDAO.php';
require_once __DIR__ . '/../dao/HabitDAO.php';
require_once __DIR__ . '/../dao/GoalDAO.php';
require_once __DIR__ . '/../dao/PostDAO.php';

class UsersController extends Controller {

  private $userDAO;
  private $habitDAO;
  private $goalDAO;
  private $postDAO;

  function __construct() {
    $this->userDAO = new UserDAO();
    $this->habitDAO = new HabitDAO();
    $this->goalDAO = new GoalDAO();
    $this->postDAO = new PostDAO();
  }

  public function profile() {
    if (!empty($_SESSION['user'])) {
      $alreadyPostedToday = $this->postDAO->checkDate(array(
        'user_id' => $_SESSION['user']['user_id'],
        'current_date' => date("Y-m-d")
      ));
      $this->set('alreadyPostedToday', $alreadyPostedToday);
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
              if (empty($_POST['lifegoal'])) {
                $errors['lifegoal'] = 'Please choose a lifegoal.';
              }
              if(empty($errors)) {
                $this->userDAO->update(array(
                  'email' => $_POST['email'],
                  'nickname' => $_POST['nickname'],
                  'birthdate' => $_POST['birthdate'],
                  'lifegoal' => $_POST['lifegoal'],
                  'user_id' => $_SESSION['user']['user_id']
                ));
                $_SESSION['user']['email'] = $_POST['email'];
                $_SESSION['user']['nickname'] = $_POST['nickname'];
                $_SESSION['user']['birthdate'] = $_POST['birthdate'];
                $_SESSION['user']['lifegoal'] = $_POST['lifegoal'];
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
            $currentGoals = array();
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
            foreach ($currentHabits as $key => $habit) {
              if($habit['active']) {
                $currentGoals[$key] = $this->goalDAO->selectAllGoalsFromHabit(array(
                  'user_id' => $_SESSION['user']['user_id'],
                  'completed' => FALSE,
                  'active' => TRUE,
                  'habit_id' => $currentHabits[$key]['habit_id'],
                  'habit_name' => $habit['habit_name'],
                  'habit_colour' => $habit['habit_colour']
                ));
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
                switch ($_GET['add-habit']) {
                  case 'red':
                    $iconColour = '#fe5455';
                    break;
                  case 'orange':
                    $iconColour = '#fab81b';
                    break;
                  case 'green':
                    $iconColour = '#00d28b';
                    break;
                  case 'blue':
                    $iconColour = '#4285ff';
                    break;
                  case 'purple':
                    $iconColour = '#9278fd';
                    break;

                  default:
                    break;
                }
                $_SESSION['add-habit-colour-name'] = $_GET['add-habit'];
                $_SESSION['add-habit-name'] = $habitName;
                $_SESSION['icon-colour'] = $iconColour;
                $allPossibleHabitIcons = $this->habitDAO->selectAllPossibleHabitIcons($_GET['add-habit']);
                $this->set('allPossibleHabitIcons', $allPossibleHabitIcons);
                $this->set('iconColour', $iconColour);
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
                    'habit_colour_name' => $_SESSION['add-habit-colour-name'],
                    'habit_colour' => $_SESSION['icon-colour'],
                    'habit_icon' => $habit_icon['data_habit_icon_id'],
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
                $this->goalDAO->deactivateGoalsFromHabit(array(
                  'user_id' => $_SESSION['user']['user_id'],
                  'habit_id' => $_GET['delete-habit']
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
              $this->set('currentStep', 'add-goal-1');
              $habit = $_GET['add-goal'];
              $doesHabitExist = $this->habitDAO->selectOneHabitName(array(
                'user_id' => $_SESSION['user']['user_id'],
                'habit_name' => $habit,
              ));
              if (!empty($doesHabitExist)) {
                $habitId = $doesHabitExist['habit_id'];
                $doesHabitAlreadyHaveGoal = $this->goalDAO->checkIfHabitAlreadyHasGoal(array(
                  'user_id' => $_SESSION['user']['user_id'],
                  'habit_id' => $habitId,
                  'active' => TRUE,
                  'completed' => FALSE
                ));
                if($doesHabitAlreadyHaveGoal['repetitive'] === false && $doesHabitAlreadyHaveGoal['streaks'] === false && $doesHabitAlreadyHaveGoal['total_amount'] === false) {
                  $this->set('habit', $habit);
                  $this->set('habit_colour', $doesHabitExist['habit_colour']);
                  if (isset($_GET['goal-type'])) {
                    switch ($_GET['goal-type']) {
                      case 'repetitive':
                        $this->set('currentStep', 'add-goal-repetitive');
                        if(!empty($_POST['add_repetitive_goal'])) {
                          $errors = array();
                          if(empty($_POST['chosen_repetitive_goal_day'])) {
                            $errors['chosen_repetitive_goal_day'] = 'Please choose a day.';
                          }
                          if(empty($_POST['chosen_repetitive_goal_day'])) {
                            $errors['chosen_repetitive_goal_month'] = 'Please choose a month.';
                          }
                          if(empty($errors)) {
                            $day = $_POST['chosen_repetitive_goal_day'];
                            $month = $_POST['chosen_repetitive_goal_month'];
                            $this->goalDAO->insertRepetitiveGoal(array(
                              'user_id' => $_SESSION['user']['user_id'],
                              'habit_id' => $habitId,
                              'day' => $day,
                              'month' => $month,
                              'completed' => 0,
                              'active' => 1
                            ));
                            $_SESSION['info'] = 'Successfully added new goal.';
                            header('Location: index.php?page=profile&category=customize');
                            exit();
                          } else {
                            $this->set('errors', $errors);
                          }
                        }
                        break;
                      case 'streak':
                        $this->set('currentStep', 'add-goal-streak');
                        if(!empty($_POST['add_streak_goal'])) {
                          $errors = array();
                          if(empty($_POST['chosen_streak_goal_number'])) {
                            $errors['chosen_streak_goal_number'] = 'Please choose a number.';
                          } else {
                            if($_POST['chosen_streak_goal_number'] < 1) {
                              $errors['chosen_streak_goal_number'] = 'Number is too small.';
                            }
                            if ($_POST['chosen_streak_goal_number'] > 30) {
                              $errors['chosen_streak_goal_number'] = 'Number is too big.';
                            }
                          }
                          if(empty($errors)) {
                            $number = $_POST['chosen_streak_goal_number'];
                            $this->goalDAO->insertStreakGoal(array(
                              'user_id' => $_SESSION['user']['user_id'],
                              'habit_id' => $habitId,
                              'time_amount' => $number,
                              'time_type' => 'days',
                              'completed' => 0,
                              'active' => 1
                            ));
                            $_SESSION['info'] = 'Successfully added new goal.';
                            header('Location: index.php?page=profile&category=customize');
                            exit();
                          } else {
                            $this->set('errors', $errors);
                          }
                        }
                        break;
                      case 'total':
                        $this->set('currentStep', 'add-goal-total');
                        if(!empty($_POST['add_total_goal'])) {
                          $errors = array();
                          if(empty($_POST['chosen_total_goal_number'])) {
                            $errors['chosen_total_goal_number'] = 'Please choose a number.';
                          } else {
                            if($_POST['chosen_total_goal_number'] < 1) {
                              $errors['chosen_total_goal_number'] = 'Number is too small.';
                            }
                            if ($_POST['chosen_total_goal_number'] > 30) {
                              $errors['chosen_total_goal_number'] = 'Number is too big.';
                            }
                          }
                          if(empty($_POST['chosen_total_goal_month'])) {
                            $errors['chosen_total_goal_month'] = 'Please choose a month.';
                          }
                          if(empty($errors)) {
                            $number = $_POST['chosen_total_goal_number'];
                            $month = $_POST['chosen_total_goal_month'];
                            $this->goalDAO->insertTotalGoal(array(
                              'user_id' => $_SESSION['user']['user_id'],
                              'habit_id' => $habitId,
                              'days_amount' => $number,
                              'month' => $month,
                              'completed' => 0,
                              'active' => 1
                            ));
                            $_SESSION['info'] = 'Successfully added new goal.';
                            header('Location: index.php?page=profile&category=customize');
                            exit();
                          } else {
                            $this->set('errors', $errors);
                          }
                        }
                        break;
                      default:
                        $_SESSION['error'] = 'Goal category does not exist.';
                        header('Location: index.php?page=profile&category=customize');
                        exit();
                        break;
                    }
                  }
                } else {
                  $_SESSION['error'] = 'Habit already has a goal.';
                  header('Location: index.php?page=profile&category=customize');
                  exit();
                }
              } else {
                $_SESSION['error'] = 'Habit does not exist.';
                header('Location: index.php?page=profile&category=customize');
                exit();
              }
            }

            if (isset($_GET['delete-goal'])) {
              if(isset($_GET['goal-category'])) {
                switch ($_GET['goal-category']) {
                  case 'repetitive':
                    $repetitiveGoal = $this->goalDAO->selectRepetitiveGoal(array(
                      'user_id' => $_SESSION['user']['user_id'],
                      'repetitive_id' => $_GET['delete-goal']
                    ));
                    if (!empty($repetitiveGoal)) {
                      $this->goalDAO->deactivateRepetitiveGoal(array(
                        'user_id' => $_SESSION['user']['user_id'],
                        'repetitive_id' =>  $_GET['delete-goal']
                      ));
                      $_SESSION['info'] = 'Goal successfully deleted.';
                      header('Location: index.php?page=profile&category=customize');
                      exit();
                    } else {
                      $_SESSION['error'] = 'Goal does not exist.';
                      header('Location: index.php?page=profile&category=customize');
                      exit();
                    }
                    break;
                  case 'streaks':
                    $streakGoal = $this->goalDAO->selectStreakGoal(array(
                      'user_id' => $_SESSION['user']['user_id'],
                      'streak_id' => $_GET['delete-goal']
                    ));
                    if (!empty($streakGoal)) {
                      $this->goalDAO->deactivateStreakGoal(array(
                        'user_id' => $_SESSION['user']['user_id'],
                        'streak_id' =>  $_GET['delete-goal']
                      ));
                      $_SESSION['info'] = 'Goal successfully deleted.';
                      header('Location: index.php?page=profile&category=customize');
                      exit();
                    } else {
                      $_SESSION['error'] = 'Goal does not exist.';
                      header('Location: index.php?page=profile&category=customize');
                      exit();
                    }
                    break;
                  case 'total_amount':
                    $total_amountGoal = $this->goalDAO->selectTotalAmountGoal(array(
                      'user_id' => $_SESSION['user']['user_id'],
                      'total_amount_id' => $_GET['delete-goal']
                    ));
                    if (!empty($total_amountGoal)) {
                      $this->goalDAO->deactivateTotalAmountGoal(array(
                        'user_id' => $_SESSION['user']['user_id'],
                        'total_amount_id' =>  $_GET['delete-goal']
                      ));
                      $_SESSION['info'] = 'Goal successfully deleted.';
                      header('Location: index.php?page=profile&category=customize');
                      exit();
                    } else {
                      $_SESSION['error'] = 'Goal does not exist.';
                      header('Location: index.php?page=profile&category=customize');
                      exit();
                    }
                    break;
                  default:
                    $_SESSION['error'] = 'Goal category does not exist.';
                    header('Location: index.php?page=profile&category=customize');
                    exit();
                    break;
                }
              } else {
                $_SESSION['error'] = 'Goal category is necessary.';
                header('Location: index.php?page=profile&category=customize');
                exit();
              }
            }
            $this->set('currentHabits', $currentHabits);
            $this->set('currentGoals', $currentGoals);
            $this->set('allPossibleHabits', $allPossibleHabits);
            $this->set('currentCategory', 'customize');
            break;
          case 'links':
            if (!empty($_SESSION['needs_help'])) {
              unset($_SESSION['needs_help']);
            }
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
              $defaultHabits = array(
                array(
                  'habit_name' => 'no smoking',
                  'habit_icon' => '1',
                  'habit_colour_name' => 'red',
                  'habit_colour' => '#fe5455'
                ),
                array(
                  'habit_name' => 'no alcohol',
                  'habit_icon' => '2',
                  'habit_colour_name' => 'orange',
                  'habit_colour' => '#fab81b'
                ),
                array(
                  'habit_name' => '5k running',
                  'habit_icon' => '3',
                  'habit_colour_name' => 'green',
                  'habit_colour' => '#00d28b'
                ),
                array(
                  'habit_name' => 'meditate',
                  'habit_icon' => '4',
                  'habit_colour_name' => 'blue',
                  'habit_colour' => '#4285ff'
                ),
                array(
                  'habit_name' => 'drink 1l water',
                  'habit_icon' => '5',
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
