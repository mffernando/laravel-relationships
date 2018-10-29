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

//one to one
$this->get('one-to-one', 'OneToOneController@oneToOne');
//one to one inverse
$this->get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');
//one to one insert
$this->get('one-to-one-insert', 'OneToOneController@oneToOneInsert');
//one to many
$this->get('one-to-many', 'OneToManyController@oneToMany');
//many to one
$this->get('many-to-one', 'OneToManyController@manyToOne');
//one to many
$this->get('one-to-many-two', 'OneToManyController@oneToManyTwo');

Route::get('/', function () {
    return view('welcome');
});
