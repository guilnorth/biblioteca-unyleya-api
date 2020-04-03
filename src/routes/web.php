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

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->group(['prefix' => 'api/v1'], function () use ($router) {
    /**
     * Publisher Routes
     */
    $router->group(['prefix' => 'publishers'], function () use ($router) {
        $router->get('/',  ['uses' => 'PublisherController@getAll']);
  
        $router->get('/{id}', ['uses' => 'PublisherController@getOne']);
      
        $router->post('/', ['uses' => 'PublisherController@create']);
      
        $router->delete('/{id}', ['uses' => 'PublisherController@delete']);
      
        $router->put('/{id}', ['uses' => 'PublisherController@update']);
    });

    /**
     * Author Routes
     */
    $router->group(['prefix' => 'authors'], function () use ($router) {
        $router->get('/',  ['uses' => 'AuthorController@getAll']);
  
        $router->get('/{id}', ['uses' => 'AuthorController@getOne']);
      
        $router->post('/', ['uses' => 'AuthorController@create']);
      
        $router->delete('/{id}', ['uses' => 'AuthorController@delete']);
      
        $router->put('/{id}', ['uses' => 'AuthorController@update']);
    });

    /**
     * Genre Routes
     */
    $router->group(['prefix' => 'genres'], function () use ($router) {
        $router->get('/',  ['uses' => 'GenreController@getAll']);
  
        $router->get('/{id}', ['uses' => 'GenreController@getOne']);
      
        $router->post('/', ['uses' => 'GenreController@create']);
      
        $router->delete('/{id}', ['uses' => 'GenreController@delete']);
      
        $router->put('/{id}', ['uses' => 'GenreController@update']);
    });
    
    /**
     * Book Routes
     */
    $router->group(['prefix' => 'books'], function () use ($router) {
        $router->get('/',  ['uses' => 'BookController@getAll']);
  
        $router->get('/{id}', ['uses' => 'BookController@getOne']);
      
        $router->post('/', ['uses' => 'BookController@create']);
      
        $router->delete('/{id}', ['uses' => 'BookController@delete']);
      
        $router->put('/{id}', ['uses' => 'BookController@update']);
    });
  });