<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/GoalDAO.php';

class ProgressController extends Controller {

  private $goalDAO;

  function __construct() {
    $this->goalDAO = new GoalDAO();
  }

  public function progress() {
    if (empty($_SESSION['user'])) {
        $_SESSION['error'] = 'You have to be signed in.';
        header('Location: index.php');
        exit();
    } else {
        if (!empty($_GET['category'])) {
          switch ($_GET['category']) {
            case 'statistics':
              $this->set('currentCategory', 'statistics');
              break;
            case 'achievements':
              $this->set('currentCategory', 'achievements');
              break;
            case 'goals':
              if(!empty($_GET['goals-type'])) {
                $allGoals = $this->goalDAO->selectAllGoals($_SESSION['user']['user_id']);
                switch ($_GET['goals-type']) {
                  case 'in-progress':
                    $inProgressGoals = '';
                    $this->set('inProgressGoals', $inProgressGoals);
                    break;
                  case 'completed':
                    $completedGoals = '';
                    $this->set('completedGoals', $completedGoals);
                    break;
                  default:
                    header('Location: index.php?page=progress&category=goals&goals-type=in-progress');
                    exit();
                    break;
                }
              } else {
                header('Location: index.php?page=progress&category=goals&goals-type=in-progress');
                exit();
              }
              $this->set('currentCategory', 'goals');
              break;
            default:
              header('Location: index.php?page=progress&category=statistics');
              break;
          }
        } else {
            header('Location: index.php?page=progress&category=statistics');
        }
    }
    $this->set('title', 'Progress');
    $this->set('currentPage', 'progress');
  }
}
