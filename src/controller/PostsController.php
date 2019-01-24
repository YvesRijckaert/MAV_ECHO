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
      $alreadyPostedToday = $this->postDAO->checkDate(array(
        'user_id' => $_SESSION['user']['user_id'],
        'current_date' => date("Y-m-d")
      ));
      if(!empty($alreadyPostedToday)){
        $fulfilled_habits = $this->habitDAO->selectAllFulfilledHabits(array(
          'user_id' => $_SESSION['user']['user_id'],
          'post_id' => '',
          'current_date' => ''
        ));
        $unfulfilled_habits = $this->habitDAO->selectAllUnfulfilledHabits(array(
          'user_id' => $_SESSION['user']['user_id'],
          'post_id' => '',
          'current_date' => ''
        ));
        //if form is submitted
        //update current day entry
      } else {
        $habits = $this->habitDAO->selectAll($_SESSION['user']['user_id']);
        if (!empty($_POST['add-day'])) {
            $errors = array();
            if (empty($_POST['short-memory'])) {
                $errors['short-memory'] = 'Please enter a short memory.';
            }
            if (empty($_POST['happiness-ratio'])) {
                $errors['happiness-ratio'] = 'Please select a happiness ratio.';
            }
            if (empty($errors)) {
              $insertedPost = $this->postDAO->insertDailyPost(array(
                'user_id' => $_SESSION['user']['user_id'],
                'date' => date("Y-m-d"),
                'short_memory' => $_POST['short-memory'],
                'happiness_ratio' => $_POST['happiness-ratio'],
                ));
                $this->habitDAO->insertFulfilledHabits(array(
                  'user_id' => $_SESSION['user']['user_id'],
                  'post_id' => $insertedPost['post_id']
                ));
                $this->habitDAO->insertUnfulfilledHabits(array(
                  'user_id' => $_SESSION['user']['user_id'],
                  'post_id' => $insertedPost['post_id']
                ));
              $_SESSION['info'] = 'Added your new day entry.';
              header('Location: index.php?page=add');
            } else {
              $this->set('errors', $errors);
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
