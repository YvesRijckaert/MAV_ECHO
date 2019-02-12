<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/GoalDAO.php';
require_once __DIR__ . '/../dao/PostDAO.php';
require_once __DIR__ . '/../dao/AchievementDAO.php';

class ProgressController extends Controller {

  private $goalDAO;
  private $postDAO;
  private $achievementDAO;

  function __construct() {
    $this->goalDAO = new GoalDAO();
    $this->postDAO = new PostDAO();
    $this->achievementDAO = new AchievementDAO();
  }

  public function progress() {
    if (empty($_SESSION['user'])) {
        $_SESSION['error'] = 'You have to be signed in.';
        header('Location: index.php');
        exit();
    } else {
        $alreadyPostedToday = $this->postDAO->checkDate(array(
          'user_id' => $_SESSION['user']['user_id'],
          'current_date' => date("Y-m-d")
        ));
        $this->set('alreadyPostedToday', $alreadyPostedToday);
        if (!empty($_GET['category'])) {
          switch ($_GET['category']) {
            case 'statistics':
              if(!empty($_GET['date'])) {
                switch ($_GET['date']) {
                  case 'week':
                    $this->set('statisticsCategory', 'week');
                    break;
                  case 'month':
                    $this->set('statisticsCategory', 'month');
                    break;
                  case 'year':
                    $this->set('statisticsCategory', 'year');
                    break;
                  default:
                    header('Location: index.php?page=progress&category=statistics&date=week');
                    exit();
                    break;
                }
              } else {
                header('Location: index.php?page=progress&category=statistics&date=week');
                exit();
              }
              $this->set('currentCategory', 'statistics');
              break;
            case 'achievements':
              if (!empty($_SESSION['completed_achievement'])) {
                unset($_SESSION['completed_achievement']);
              }
              $allPossibleAchievements = $this->achievementDAO->selectAllPossibleAchievements();
              $allFulfilledAchievements = $this->achievementDAO->selectAllFulfilledAchievements(array(
                'user_id' => $_SESSION['user']['user_id']
              ));
              $this->set('allPossibleAchievements', $allPossibleAchievements);
              $this->set('allFulfilledAchievements', $allFulfilledAchievements);
              $this->set('currentCategory', 'achievements');
              break;
            case 'goals':
              if(!empty($_GET['goals-type'])) {
                switch ($_GET['goals-type']) {
                  case 'in-progress':
                    $inProgressGoals = $this->goalDAO->selectAllGoals(array(
                      'user_id' => $_SESSION['user']['user_id'],
                      'completed' => FALSE,
                      'active' => TRUE
                    ));
                    $this->set('goalsCategory', 'in-progress');
                    $this->set('inProgressGoals', $inProgressGoals);
                    break;
                  case 'completed':
                    $completedGoals = $this->goalDAO->selectAllGoals(array(
                      'user_id' => $_SESSION['user']['user_id'],
                      'completed' => TRUE,
                      'active' => TRUE
                    ));
                    $this->set('goalsCategory', 'completed');
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
