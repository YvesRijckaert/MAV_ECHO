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
          $activeHabits = $this->habitDAO->selectAllActiveHabits($_SESSION['user']['user_id']);
          $firstActiveHabit = $activeHabits[0]['habit_name'];
          $this->set('activeHabits', $activeHabits);
          $this->set('firstActiveHabit', $firstActiveHabit);

          switch ($_GET['view']) {
            case 'day':
              $this->set('view', 'day');
              if(!empty($_GET['day'])) {
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
                  $this->set('currentDay', $enteredDate->format('l d F Y'));
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
                  $fulfilledHabitsOfEnteredDay = $this->habitDAO->getAllFulfilledHabitsOfDay(array(
                    'user_id' => $_SESSION['user']['user_id'],
                    'date' => $enteredDate->format('Y-m-d'),
                  ));
                  $birthDate = new DateTime($_SESSION['user']['birthdate']);
                  $livedDaysAmount = $enteredDate->diff($birthDate)->format("%a");
                  $this->set('postOfEnteredDay', $postOfEnteredDay);
                  $this->set('fulfilledHabitsOfEnteredDay', $fulfilledHabitsOfEnteredDay);
                  $this->set('livedDaysAmount', $livedDaysAmount);
                } else {
                  $_SESSION['error'] = 'Not a valid day.';
                  header('Location: index.php?page=overview&view=day&day=' . date("d-m-Y"));
                  exit();
                }
              } else {
                $_SESSION['error'] = 'You have to choose a date.';
                header('Location: index.php?page=overview&view=day&day=' . date("d-m-Y"));
                exit();
              }
              break;
            case 'month':
              $this->set('view', 'month');
              //TODO: WHAT IF THERE ARE NO ACIVE HABITS!
              if(!empty($_GET['month'])) {
                function validateDate($date, $format = 'm-Y') {
                  $d = DateTime::createFromFormat($format, $date);
                  return $d && $d->format($format) === $date;
                }
                $isMonthValid = validateDate($_GET['month']);
                if($isMonthValid) {
                  if (!empty($_GET['chosen_habit'])) {
                    if(in_array($_GET['chosen_habit'], array_column($activeHabits, 'habit_name'))){
                      function build_calendar($month,$year, $today_date, $fulfilled_habit, $class) {
                        $daysOfWeek = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
                        $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
                        $numberDays = date('t',$firstDayOfMonth);
                        $dateComponents = getdate($firstDayOfMonth);
                        $monthName = $dateComponents['month'];
                        $dayOfWeek = $dateComponents['wday'];
                        $calendar = "<table class='calendar'>";
                        $calendar .= "<tr>";
                        foreach($daysOfWeek as $day) {
                            $calendar .= "<th class='header'>$day</th>";
                        }
                        $currentDay = 1;
                        $calendar .= "</tr><tr>";
                        if ($dayOfWeek > 0) {
                            $calendar .= "<td colspan='$dayOfWeek'>&nbsp;</td>";
                        }
                        $month = str_pad($month, 2, "0", STR_PAD_LEFT);

                        $totalDaysOfFulfilledHabit = 0;

                        while ($currentDay <= $numberDays) {
                          if ($dayOfWeek == 7) {
                              $dayOfWeek = 0;
                              $calendar .= "</tr><tr>";
                          }
                          $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);
                          $date = "$year-$month-$currentDayRel";
                          $dateTime = new DateTime($date);
                          $currentDate = new DateTime($date);
                          $habit_id = $fulfilled_habit['habit_id'];
                          $habit_colour= $fulfilled_habit['habit_colour'];
                          $hasFulfilledHabit = $class->habitDAO->getSpecificFulfilledHabitsOfDay(array(
                            'user_id' => $_SESSION['user']['user_id'],
                            'habit_id' => $habit_id,
                            'date' => $dateTime->format('Y-m-d')
                          ));
                          if(empty($hasFulfilledHabit)) {
                            if($currentDayRel == $today_date && $month == date('m') && $year == date('Y')) {
                              $calendar .= "<td class='day today_date' rel='$date'><a href=\"index.php?page=overview&view=day&day=" . sprintf("%02d", $currentDay) . "-" . $month . "-" . $year . "\">$currentDay</a></td>";
                            } else {
                              $calendar .= "<td class='day' rel='$date'><a href=\"index.php?page=overview&view=day&day=" . sprintf("%02d", $currentDay) . "-" . $month . "-" . $year . "\">$currentDay</a></td>";
                            }
                          }else {
                            $totalDaysOfFulfilledHabit++;
                            if($currentDayRel == $today_date && $month == date('m') && $year == date('Y')) {
                              $calendar .= "<td class='day today_date' rel='$date' style='background-color: $habit_colour; color: white'><a href=\"index.php?page=overview&view=day&day=" . sprintf("%02d", $currentDay) . "-" . $month . "-" . $year . "\">$currentDay</a></td>";
                            } else {
                              $calendar .= "<td class='day' rel='$date' style='background-color: $habit_colour; color: white'> <a href=\"index.php?page=overview&view=day&day=" . sprintf("%02d", $currentDay) . "-" . $month . "-" . $year . "\">$currentDay</a></td>";
                            }
                          }
                          $currentDay++;
                          $dayOfWeek++;
                        }
                        if ($dayOfWeek != 7) {
                            $remainingDays = 7 - $dayOfWeek;
                            $calendar .= "<td colspan='$remainingDays'>&nbsp;</td>";
                        }
                        $class->set('totalDaysOfFulfilledHabit', $totalDaysOfFulfilledHabit);
                        $calendar .= "</tr>";
                        $calendar .= "</table>";
                        return $calendar;
                      }
                      $enteredDate = new DateTime('01-' . $_GET['month']);
                      $month = $enteredDate->format('m');
                      $year = $enteredDate->format('Y');
                      $today_date = date("d");
                      $today_date = ltrim($today_date, '0');
                      $previousMonth = new DateTime('01-' . $_GET['month']);
                      $previousMonth->modify('-1 month');
                      $nextMonth = new DateTime('01-' . $_GET['month']);
                      $nextMonth->modify('+1 month');
                      $this->set('enteredDate', $enteredDate);
                      $this->set('previousMonth', $previousMonth->format('m-Y'));
                      $this->set('nextMonth', $nextMonth->format('m-Y'));

                      $chosenHabit = $_GET['chosen_habit'];
                      $fulfilled_habit = array_filter($activeHabits, function ($var) use ($chosenHabit) {
                        return ($var['habit_name'] === $chosenHabit);
                      });
                      $this->set('calendar', build_calendar($month,$year, $today_date, call_user_func_array('array_merge', $fulfilled_habit), $this));
                      $this->set('chosenHabit', $chosenHabit);
                    } else {
                      $_SESSION['error'] = 'Habit does not exist.';
                      header('Location: index.php?page=overview&view=month&month=' . date("m-Y") . '&chosen_habit=' . $firstActiveHabit);
                      exit();
                    }
                  } else {
                    $_SESSION['error'] = 'You have to choose a habit.';
                    header('Location: index.php?page=overview&view=month&month=' . date("m-Y") . '&chosen_habit=' . $firstActiveHabit);
                    exit();
                  }
                } else {
                  $_SESSION['error'] = 'Not a valid date.';
                  header('Location: index.php?page=overview&view=month&month=' . date("m-Y") . '&chosen_habit=' . $firstActiveHabit);
                  exit();
                }
              } else {
                $_SESSION['error'] = 'You have to choose a date.';
                header('Location: index.php?page=overview&view=month&month=' . date("m-Y") . '&chosen_habit=' . $firstActiveHabit);
                exit();
              }
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
