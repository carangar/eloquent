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

use ORM\User;
Route::get('/create', function () {
    $user=User::create([
    	'name'=>'yolo',
    	'email'=>'yolerino@mail.com',
    	'password'=>bcrypt('asdad'),
    	'gender'=>'m',
    	'description'=>'some description'
    ]);
    return "usuario guardado";
});
Route::get('/update/{id}', function ($id) {
    $user=User::find($id);
    $user->name='hello there';
    $user->save();
    return "usuario actualizado";
});
