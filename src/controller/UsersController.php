<?php

require_once __DIR__ . '/Controller.php';

require_once __DIR__ . '/../dao/UserDAO.php';

class UsersController extends Controller {

  private $userDAO;

  function __construct() {
    $this->userDAO = new UserDAO();
  }

  public function profile() {
    if (!empty($_SESSION['user'])) {
      if (!empty($_GET['category'])) {
        switch ($_GET['category']) {
          case 'information':
            $this->set('category', 'information');
            break;
          case 'customize':
            $this->set('category', 'customize');
            break;
          default:
            header('Location: index.php?page=profile&category=information');
            break;
        }
      } else {
        header('Location: index.php?page=profile&category=information');
      }
      if (!empty($_POST['update'])) {
        //handle update information
      }
    } else {
      header('Location: index.php');
    }

    $this->set('title', 'Profile');
    $this->set('currentPage', 'profile');
  }

  public function register() {
    if (!empty($_SESSION['user'])) {
      header('Location: index.php?page=overview');
    }
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
        }
        $this->set('errors', $errors);
      }

    if (!empty($_POST['register2'])){
      $errors = array();
        if (empty($_POST['nickname'])) {
          $errors['nickname'] = 'Please enter your nickname.';
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
              $this->userDAO->insertHabits(array(
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
    $this->set('title', 'Register');
    $this->set('currentPage', 'register');
  }

  public function login() {
    if (!empty($_SESSION['user'])) {
      header('Location: index.php?page=overview');
    }
    if (!empty($_POST)) {
      if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $existing = $this->userDAO->selectByEmail($_POST['email']);
        if (!empty($existing)) {
          if (password_verify($_POST['password'], $existing['password'])) {
            $_SESSION['user'] = $existing;
            $_SESSION['info'] = 'Logged In';
            header('Location: index.php?page=overview');
            exit();
          } else {
            $_SESSION['error'] = 'Unknown username / password';
            header('Location: index.php?page=login');
            exit();
          }
        } else {
          $_SESSION['error'] = 'Unknown username / password';
          header('Location: index.php?page=login');
          exit();
        }
      } else {
        $_SESSION['error'] = 'Unknown username / password';
        header('Location: index.php?page=login');
        exit();
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
