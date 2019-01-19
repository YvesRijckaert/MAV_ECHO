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
      $this->set('title', 'Progress');
        $this->set('currentPage', 'progress');
    }

}
