<?php

require_once __DIR__ . '/Controller.php';

class PagesController extends Controller {

    public function index() {
      if (!empty($_SESSION['user'])) {
        header('Location: index.php?page=overview');
      }
        $this->set('title', 'Home');
        $this->set('currentPage', 'home');
    }

}
