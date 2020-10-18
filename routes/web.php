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

use Symfony\Component\Finder\Finder;


Route::get('ola', function () {
    return view('ola');
});

Route::get('/', [
    'as' =>'site.home',
    'uses' => 'Site\HomeController@index'
]);

Route::get('imobiliaria', function () {
    return view('imobiliaria/index');
});

// Route::get('/teste', function (){
//     return view('teste');
// });

// Route::get('/test', 'TestController@index');
// Route::get('produtos', 'ProdutosController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index');

// Route::get('/users', function () {
// 	return Datatables::of(App\User::with('posts', 'post'))->make(true);
// });

// Route::get('eloquent', 'EloquentController@index');
// Route::get('eloquent/users-data', 'EloquentController@usersData');
// foreach(Finder::create()->in([
//     __DIR__.'/eloquent',
//     __DIR__.'/buttons',
// ])->files() as $file) {
//     require $file->getPathname();
// }
// Route::get('eloquent/{view}', 'EloquentController@display');
