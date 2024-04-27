<?php

use App\Controllers\PagesController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
/* MAIN PAGE */
$routes->match(['get'],'/', [PagesController::class, 'index']);
