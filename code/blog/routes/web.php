<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    return $router->app->version();
});
//author
$router->get('/authors', ['uses' => 'AuthorController@ShowAllAuhtor']);
$router->get('/authors/{id}',  ['uses'=> 'AuthorController@ShowOneAuthor']);
$router->post('/authors', ['uses' => 'AuthorController@create']);
$router->delete('authors/{id}', ['uses' => 'AuthorController@delete']);
$router->put('authors/{id}', ['uses' => 'AuthorController@edit']);
// API route group
$router->group(['prefix' => 'api'], function () use ($router) {
    // Matches "/api/register
    $router->post('register', 'AuthController@register');
  // Matches "/api/login
  $router->post('login', 'AuthController@login');
 });
 // API route group
$router->group(['prefix' => 'api'], function () use ($router) {
    // Matches "/api/register
   $router->post('register', 'AuthController@register');
     // Matches "/api/login
    $router->post('login', 'AuthController@login');

    // Matches "/api/profile
    $router->get('profile', 'UserController@profile');

    // Matches "/api/users/1 
    //get one user by id
    $router->get('users/{id}', 'UserController@singleUser');

    // Matches "/api/users
    $router->get('users', 'UserController@allUsers');
});
Route::get('email', 'EmailController@sendEmail');
$router->get('Job',['uses'=>'HelloController@HelloControl']);
$router->get('Jobb',  ['uses' => 'ExampleController@showAllUser']);