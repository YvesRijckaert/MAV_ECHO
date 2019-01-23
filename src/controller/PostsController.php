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
      if(!empty($_SESSION['user'])){
        $habits = $this->habitDAO->selectAll($_SESSION['user']['user_id']);
        $this->set('habits', $habits);
      } else {
        header('Location: index.php');
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
