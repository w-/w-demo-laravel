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

Route::get('/', function () {
    // test db connection
    DB::connection()->getPdo();
    $db_name = DB::connection()->getDatabaseName(); 
    $data = array(
        "db"=> $db_name
    );
    
    return view('welcome', $data);
});
