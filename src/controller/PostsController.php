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
      if(!empty($_SESSION['user'])) {
        $posts = $this->postDAO->selectAll();
        $this->set('posts', $posts);
      } else {
        header('Location: index.php');
      }
      $this->set('title', 'Overview');
      $this->set('currentPage', 'overview');
    }

    public function add() {
      if(empty($_SESSION['user'])) {
        header('Location: index.php');
      }
      $habits = $this->habitDAO->selectAll($_SESSION['user']['user_id']);
      $current_date = date("Y-m-d");
      $this->set('habits', $habits);
      $this->set('current_date', $current_date);
      //select all fulfilled habits and check them
      //select all unfulfilled habits and don't check them

      //insert unfulfilled to database (compare $_POST['habits'] to $habits)

      if(!empty($_POST['add-day'])) {
        $errors = array();
        if (empty($_POST['short-memory'])) {
          $errors['short-memory'] = 'Please enter a short memory.';
        }
        if (empty($errors)) {
          $alreadyPostedToday = $this->postDAO->checkDate(array(
            'user_id' => $_SESSION['user']['user_id'],
            'current_date' => $current_date
          ));
          if(empty($alreadyPostedToday)) {
            $this->postDAO->insertDailyPost(array(
              'user_id' => $_SESSION['user']['user_id'],
              'date' => $current_date,
              'short_memory' => $_POST['short-memory'],
              'happiness_ratio' => $_POST['happiness-ratio'],
              'fulfilled_habits' => implode(', ', $_POST['habits']),
              'unfulfilled_habits' => 'test'
              ));
              $_SESSION['info'] = 'Added your new day entry.';
              header('Location: index.php?page=add');
          } else {
            $this->postDAO->updateDailyPost(array(
              'user_id' => $_SESSION['user']['user_id'],
              'date' => $current_date,
              'short_memory' => $_POST['short-memory'],
              'happiness_ratio' => $_POST['happiness-ratio'],
              'fulfilled_habits' => implode(', ', $_POST['habits']),
              'unfulfilled_habits' => 'test'
              ));
              $_SESSION['info'] = 'Successfully updated your day entry.';
              header('Location: index.php?page=add');
          }
        }
        $this->set('errors', $errors);
      }
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
