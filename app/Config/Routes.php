<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->presenter('auth', ['controller' => 'AuthController', 'only' => ['index', 'create', 'delete']]);

$routes->group('admin',[
  'filter' => 'authGuard' // apply auth filter to all routes in admin group, see Filters.php
], static function ($routes) {
  $routes->presenter('dashboard', ['controller' => 'Admin\DashboardController']);
});