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
use Faker\Factory as Faker;
/*Route::get('/create', function () {
  $faker=Faker::create();
  
    $user=User::create([
    	'name'=>$faker->name,
    	'email'=>$faker->email,
    	'password'=>bcrypt('asdad'),
    	'gender'=>$faker->randomElement(['f','m']),
    	'description'=>$faker->text(255)
    ]);
    return $user;
});

Route::get('/read/{id}', function($id){
	return User::find($id);
});

Route::get('/update/{id}', function ($id) {
	$faker=Faker::create();

    $user=User::find($id);
    $user->name='hello there';
    $user->description=$faker->text(40);
    $user->save();
    return $user;
});

Route::get('/delete/{id}', function($id){
	User::find($id)->delete();
	return 'eliminado';
});*/
Route::get('/',[
    'as'=>'home',
    'uses'=>'PagesController@home'
] );

Route::get('/all',[
'as'=>'methods',
'uses'=>'QueryController@getAll']);

Route::get('/user/{id}',[
'as'=>'getUser',
'uses'=>'QueryController@getUser']);

Route::get('/users/{gender}',[
'as'=>'getByGender',
'uses'=>'QueryController@getByGender']);

Route::get('/get-Custom',[
    'as'=>'getCustom',
    'uses'=>'QueryController@getCustom'

]);
Route::delete('/delete/{id}',[
'as'=>'delete',
'uses'=>'QueryController@delete'
]);

Route::get('/lists',[
'as'=>'getList',
'uses'=>'QueryController@getList']);