<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

 // factory(App\User::class, 8)
 //   ->create()
 //   ->each(function ($user) {
 //    for ($i=0; $i<3; $i++) {
 //        $user->posts()->save(factory(App\Post::class)->make());
 //    }
 //   });

 Route::get('/', function () {
     \Log::info('welcome');
    try {
        return view('welcom');
    } catch (Exception $e) {
        \Bugsnag::notifyException($e);
        \Log::info('Caught exception from / route');
    }
 });

  Route::get('/abc', function () {
      \Log::info('abc');
    try {
        throw new App\Exceptions\AbcException();
    } catch (Exception $e) {
        // report($e);
        // return false;
        // \Bugsnag::notifyException($e);
    }
      \Log::info('I need to continue after AbcException from abc.');
  });

  Route::get('/xyz', function () {
      \Log::info('xyz');
      throw new App\Exceptions\AbcException();
      // report($e);
        // return false;
        // \Bugsnag::notifyException($e);
  });
  \Log::info('I need to continue after AbcException from xyz.');

  Route::get('/users', 'UserController@index');

  Route::get('/users/export', 'UserController@export')->name('users.excel.dwd');
  Route::get('/usersview/export', 'UserController@exportView')->name('usersview.excel.dwd');
  Route::get('/usersquery/export', 'UserController@exportQuery')->name('usersquery.excel.dwd');

  Route::get('skills', function () {
      return ['laravel', 'vue', 'php', 'javascript', 'tooling'];
  });

  Route::get('projects/create', 'ProjectsController@create');
  Route::post('projects', 'ProjectsController@store');
// Route::get('charts', 'ChartsController')->middleware(['auth']);
  Route::get('charts', 'ChartsController');

  Auth::routes();

  Route::get('/home', 'HomeController@index')->name('home');
 
// Ajax routes
  Route::get('form', 'FormController@create');
  Route::post('form', 'FormController@store');

 // Axios routes
  Route::get('axform', 'AxFormController@create');
  Route::post('axform', 'AxFormController@store');

  Route::get('todos', 'TodosController@db');
 
// Coders Vue Components
  Route::get('accord', 'FormController@accord');
  Route::get('test', function () {
      \Log::info('test route');
      throw new Exception('Example exception!');
  });
   Route::get('vue2d', 'FormController@vue2d');
