<?php
session_start();
ini_set('display_errors', true);
error_reporting(E_ALL);

$routes = array(
  'home' => array(
    'controller' => 'Pages',
    'action' => 'index'
  ),
  'overview' => array(
    'controller' => 'Posts',
    'action' => 'overview'
  ),
  'add' => array(
    'controller' => 'Posts',
    'action' => 'add'
  ),
  'progress' => array(
    'controller' => 'Progress',
    'action' => 'progress'
  ),
  'profile' => array(
    'controller' => 'Users',
    'action' => 'profile'
  ),
  'login' => array(
    'controller' => 'Users',
    'action' => 'login'
  ),
  'logout' => array(
    'controller' => 'Users',
    'action' => 'logout'
  ),
  'register' => array(
    'controller' => 'Users',
    'action' => 'register'
  )
);


if (empty($_GET['page'])) {
    $_GET['page'] = 'home';
}


if (empty($routes[$_GET['page']])) {
    header('Location: index.php');
    exit();
}

$route = $routes[$_GET['page']];
$controllerName = $route['controller'] . 'Controller';

require_once __DIR__ . '/controller/' . $controllerName . ".php";

$controllerObj = new $controllerName();
$controllerObj->route = $route;
$controllerObj->filter();
$controllerObj->render();
