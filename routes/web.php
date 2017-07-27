<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
 */

// $app->get('/', function () use ($app) {
// 	return $app->version();
// });
$app->get('/login', ['as' => 'login', function () use ($app) {
	return view('login');
}]);
$app->post('/login', ['as' => 'post.login', 'uses' => 'UserController@postLogin']);

$app->get('/', ['as' => 'index', function () use ($app) {
	return view('index');
}]);
$app->get('/dashboard-1', ['as' => 'dashboard-1', function () use ($app) {
	return view('page.dashboard-1');
}]);
$app->get('/dashboard-2', ['as' => 'dashboard-2', function () use ($app) {
	return view('page.dashboard-2');
}]);
$app->get('/dashboard-3', ['as' => 'dashboard-3', function () use ($app) {
	return view('page.dashboard-3');
}]);
$app->get('/dashboard-4', ['as' => 'dashboard-4', function () use ($app) {
	return view('page.dashboard-4');
}]);
$app->get('/layouts', ['as' => 'layouts', function () use ($app) {
	return view('page.layouts');
}]);
$app->get('/graph_flot', ['as' => 'graph_flot', function () use ($app) {
	return view('page.graphs.graph_flot');
}]);
$app->get('/metrics', ['as' => 'metrics', function () use ($app) {
	return view('page.metrics');
}]);
$app->get('/widgets', ['as' => 'widgets', function () use ($app) {
	return view('page.widgets');
}]);
