<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ItemDAO.php';

class ItemsController extends Controller {

    private $itemDAO;

    function __construct() {
        $this->itemDAO = new ItemDAO();
    }

    public function overview() {
        $items = $this->itemDAO->selectAll();
        $this->set('items', $items);
        $this->set('title', 'Overview');
        $this->set('currentPage', 'overview');
    }

    public function progress() {
      if(!empty($_GET['category'])) {
        switch ($_GET['category']) {
          case 'statistics':
            break;
          case 'achievements':
            break;
          case 'goals':
            # code...
            break;
          default:
            header('Location: index.php?page=progress&category=statistics');
            break;
        }
      } else {
        header('Location: index.php?page=progress&category=statistics');
      }
      $this->set('title', 'Progress');
      $this->set('currentPage', 'progress');
    }

}
