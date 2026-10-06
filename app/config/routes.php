<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/** @var object $router **/

$router->get('/', 'StudentController::index');

$router->get('/home', 'StudentController::index');

$router->get('/student', 'StudentController::index');

$router->get('/student/profile', 'StudentController::profile')
       ->middleware('StudentMiddleware');


$router->get('/users', 'UsersController::index');

$router->match('/users/create', 'UsersController::create', ['GET', 'POST']);

$router->match('/users/edit/{id}', 'UsersController::edit', ['GET', 'POST']);

$router->get('/users/delete/{id}', 'UsersController::delete');


$router->match('/login', 'AuthController::login', ['GET', 'POST']);

$router->get('/logout', 'AuthController::logout');


$router->get('/products', 'ProductController::index')
       ->middleware('AuthMiddleware');

$router->match('/products/create', 'ProductController::create', ['GET', 'POST'])
       ->middleware('AuthMiddleware');

$router->match('/products/edit/{id}', 'ProductController::edit', ['GET', 'POST'])
       ->middleware('AuthMiddleware');

$router->get('/products/delete/{id}', 'ProductController::delete')
       ->middleware('AuthMiddleware');

// Migration Routes
$router->get('create-migration/{migration_class}', 'MigrationController::create_migration');
$router->get('migrate', 'MigrationController::migrate');
$router->get('rollback', 'MigrationController::rollback');
$router->get('rollback-all', 'MigrationController::rollback-all');
$router->get('refresh', 'MigrationController::refresh');
$router->get('status', 'MigrationController::status');

// API Authentication Routes
$router->post('/api/login', 'ApiAuthController::login');
$router->post('/api/logout', 'ApiAuthController::logout');
$router->post('/api/refresh', 'ApiAuthController::refresh');

// API Product Routes
$router->get('/api/products', 'ApiProductController::index');
$router->post('/api/products', 'ApiProductController::store');
$router->put('/api/products/{id}', 'ApiProductController::update');
$router->delete('/api/products/{id}', 'ApiProductController::delete');