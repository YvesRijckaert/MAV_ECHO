<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/PostDAO.php';
require_once __DIR__ . '/../dao/HabitDAO.php';

class PostsController extends Controller {

    private $postDAO;

    function __construct() {
        $this->postDAO = new PostDAO();
        $this->habitDAO = new HabitDAO();
    }

    public function overview() {
      if(empty($_SESSION['user'])) {
        header('Location: index.php');
      } else {
        $alreadyPostedToday = $this->postDAO->checkDate(array(
          'user_id' => $_SESSION['user']['user_id'],
          'current_date' => date("Y-m-d")
        ));
        $this->set('alreadyPostedToday', $alreadyPostedToday);
        if (!empty($_GET['view'])) {
          switch ($_GET['view']) {
            case 'day':
              if(!empty($_GET['day'])) {
                $this->set('view', 'day');
                function validateDate($date, $format = 'd-m-Y') {
                  $d = DateTime::createFromFormat($format, $date);
                  return $d && $d->format($format) === $date;
                }
                $isDayValid = validateDate($_GET['day']);
                if($isDayValid) {
                  $enteredDate = new DateTime($_GET['day']);
                  $dateRegistered = new DateTime($_SESSION['user']['date_joined']);
                  if($dateRegistered > $enteredDate) {
                    $_SESSION['error'] = 'You were not a user back then.';
                    header('Location: index.php?page=overview&view=day&day=' . date("d-m-Y"));
                    exit();
                  }
                  if(date("d-m-Y") < $enteredDate->format('d-m-Y')) {
                    $_SESSION['error'] = 'This day has yet to come.';
                    header('Location: index.php?page=overview&view=day&day=' . date("d-m-Y"));
                    exit();
                  }
                  $this->set('currentDay', $enteredDate->format('d-m-Y'));
                  $previousDay = new DateTime($_GET['day']);
                  $previousDay->modify('-1 day');
                  $nextDay = new DateTime($_GET['day']);
                  $nextDay->modify('+1 day');
                  if($dateRegistered->format('d-m-Y') !== $_GET['day']){
                    $this->set('previousDay', $previousDay->format('d-m-Y'));
                  }
                  if (date("d-m-Y") !== $_GET['day']) {
                    $this->set('nextDay', $nextDay->format('d-m-Y'));
                  }
                  $postOfEnteredDay = $this->postDAO->getPostOfDay(array(
                    'user_id' => $_SESSION['user']['user_id'],
                    'date' => $enteredDate->format('Y-m-d'),
                  ));
                  $fulfilledHabitsOfEnteredDay = $this->habitDAO->getFulfilledHabitsOfDay(array(
                    'user_id' => $_SESSION['user']['user_id'],
                    'date' => $enteredDate->format('Y-m-d'),
                  ));
                  $this->set('postOfEnteredDay', $postOfEnteredDay);
                  $this->set('fulfilledHabitsOfEnteredDay', $fulfilledHabitsOfEnteredDay);
                } else {
                  $_SESSION['error'] = 'Not a valid day.';
                  header('Location: index.php?page=overview&view=day&day=' . date("d-m-Y"));
                  exit();
                }
              } else {
                header('Location: index.php?page=overview&view=day&day=' . date("d-m-Y"));
                exit();
              }
              break;
            case 'month':
              $this->set('view', 'month');
              break;
            default:
              header('Location: index.php?page=overview&view=day&day=' . date("d-m-Y"));
              exit();
            break;
          }
        } else {
          header('Location: index.php?page=overview&view=day&day=' . date("d-m-Y"));
          exit();
        }
      }
      $this->set('title', 'Overview');
      $this->set('currentPage', 'overview');
    }

    public function add() {
      if(empty($_SESSION['user'])) {
        header('Location: index.php');
      } else {
          $alreadyPostedToday = $this->postDAO->checkDate(array(
            'user_id' => $_SESSION['user']['user_id'],
            'current_date' => date("Y-m-d")
          ));
          if (!empty($alreadyPostedToday)) {
            $habits = $this->habitDAO->selectAll($_SESSION['user']['user_id']);
            $fulfilled_habits = $this->habitDAO->selectAllFulfilledHabits(array(
              'user_id' => $_SESSION['user']['user_id'],
              'post_id' => $alreadyPostedToday['post_id'],
            ));
            $fulfilled_habits_ids = array_column($fulfilled_habits, 'habit_id');
            $short_memory = $alreadyPostedToday['short_memory'];
            $feelings = $alreadyPostedToday['feelings'];
            $this->set('fulfilled_habits_ids', $fulfilled_habits_ids);
            $this->set('short_memory', $short_memory);
            $this->set('feelings', $feelings);

            if (!empty($_POST['add-day'])) {
              $errors = array();
              if (empty($_POST['short-memory'])) {
                $errors['short-memory'] = 'Please enter a short memory.';
              }
              if (empty($_POST['feelings'])) {
                $errors['feelings'] = 'Please tell us how you are feeling.';
              }
              if (empty($errors)) {
                switch ($_POST['feelings']) {
                  case 'feeling-great':
                    $feelingsRatio = 1;
                    break;
                  case 'feeling-okay':
                    $feelingsRatio = 0;
                    break;
                  case 'feeling-bad':
                    $feelingsRatio = -1;
                    break;
                  default:
                    $feelingsRatio = 0;
                    break;
                }
                $insertedPost = $this->postDAO->updateDailyPost(array(
                  'user_id' => $_SESSION['user']['user_id'],
                  'post_id' => $alreadyPostedToday['post_id'],
                  'short_memory' => $_POST['short-memory'],
                  'feelings' => $feelingsRatio,
                ));
                $this->habitDAO->deleteFulfilledHabits(array(
                  'user_id' => $_SESSION['user']['user_id'],
                  'post_id' => $alreadyPostedToday['post_id'],
                ));
                foreach ($_POST['habits'] as $chosenHabit) {
                  $fulfilled_habit = array_filter($habits, function ($var) use ($chosenHabit) {
                    return ($var['habit_name'] === $chosenHabit);
                  });
                  $this->habitDAO->insertFulfilledHabit(array(
                    'user_id' => $_SESSION['user']['user_id'],
                    'post_id' => $alreadyPostedToday['post_id'],
                    'habit_id' => array_column($fulfilled_habit, 'habit_id')[0]
                  ));
                }
                $_SESSION['info'] = 'Updated day.';
                header('Location: index.php?page=add');
                exit();
              } else {
                  $this->set('errors', $errors);
                }
            }
          } else {
              $habits = $this->habitDAO->selectAll($_SESSION['user']['user_id']);
              if (!empty($_POST['add-day'])) {
                $errors = array();
                if (empty($_POST['short-memory'])) {
                  $errors['short-memory'] = 'Please enter a short memory.';
                }
                if (empty($_POST['feelings'])) {
                  $errors['feelings'] = 'Please tell us how you are feeling.';
                }
                if (empty($errors)) {
                  switch ($_POST['feelings']) {
                    case 'feeling-great':
                      $feelingsRatio = 1;
                      break;
                    case 'feeling-okay':
                      $feelingsRatio = 0;
                      break;
                    case 'feeling-bad':
                      $feelingsRatio = -1;
                      break;
                    default:
                      $feelingsRatio = 0;
                      break;
                  }
                  $insertedPost = $this->postDAO->insertDailyPost(array(
                    'user_id' => $_SESSION['user']['user_id'],
                    'date' => date("Y-m-d"),
                    'short_memory' => $_POST['short-memory'],
                    'feelings' => $feelingsRatio,
                  ));
                  foreach ($_POST['habits'] as $chosenHabit) {
                    $fulfilled_habit = array_filter($habits, function ($var) use ($chosenHabit) {
                      return ($var['habit_name'] === $chosenHabit);
                    });
                    $this->habitDAO->insertFulfilledHabit(array(
                      'user_id' => $_SESSION['user']['user_id'],
                      'post_id' => $insertedPost['post_id'],
                      'habit_id' => array_column($fulfilled_habit, 'habit_id')[0]
                    ));
                  }
                  $_SESSION['info'] = 'Added new day.';
                  header('Location: index.php?page=add');
                  exit();
                } else {
                    $this->set('errors', $errors);
                }
              }
          }
      }
      $this->set('alreadyPostedToday', $alreadyPostedToday);
      $this->set('habits', $habits);
      $this->set('title', 'Add day');
      $this->set('currentPage', 'overview');
    }

    public function progress() {
      if(!empty($_SESSION['user'])) {
        if(!empty($_GET['category'])) {
          switch ($_GET['category']) {
            case 'statistics':
              $this->set('currentCategory', 'statistics');
              break;
            case 'achievements':
              $this->set('currentCategory', 'achievements');
              break;
            case 'goals':
              $this->set('currentCategory', 'goals');
              break;
            default:
              header('Location: index.php?page=progress&category=statistics');
              break;
          }
        } else {
          header('Location: index.php?page=progress&category=statistics');
        }
      } else {
        header('Location: index.php');
      }
      $this->set('title', 'Progress');
      $this->set('currentPage', 'progress');
    }

}
