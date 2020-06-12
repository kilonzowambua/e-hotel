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
    return view('welcome');
});
Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/events', function () {
    return view('events');
});


Route::get('/contact', function () {
    return view('contact');
});

/*
Route::get('/contact','pagescontroller@contact');
Route::get('/login','pagescontroller@login');
Route::get('/register','pagescontroller@register');
*/


Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'clientController@create')->name('create');
Route::post('/storeclient', 'clientController@storeclient')->name('storeclient');
Route::get('/manageclients', 'clientController@manageclients')->name('manageclients');
Route::get('/viewsingleclient/{clientid}', 'clientController@viewsingleclient')->name('viewsingleclient');
Route::get('/show/{clientid}', 'clientController@show')->name('show');
Route::post('/editsingleclient/{clientid}', 'clientController@editsingleclient')->name('editsingleclient');
Route::get('/removeclient/{clientid}', 'clientController@removeclient')->name('removeclient');
Route::post('/deleteclient/{clientid}', 'clientController@deleteclient')->name('deleteclient');
Route::get('/status/{clientid}', 'clientController@status')->name('status');
Route::post('/controlstatus/{clientid}', 'clientController@controlstatus')->name('controlstatus');
Route::get('/home', 'clientController@countclients')->name('countclients');
//staff route
Route::get('/createstaff','staffController@createstaff')->name('createstaff');
Route::post('/storestaff','staffController@storestaff')->name('storestaff');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/managestaffs', 'staffController@managestaffs')->name('managestaffs');
Route::get('/viewsinglestaff/{staffid}', 'staffController@viewsinglestaff')->name('viewsinglestaff');
Route::get('/showstaff/{staffid}', 'staffController@showstaff')->name('showstaff');
Route::post('/editsinglestaff/{staffid}', 'staffController@editsinglestaff')->name('editsinglestaff');
Route::get('/removestaff/{staffid}', 'staffController@removestaff')->name('removestaff');
Route::post('/deletestaff/{staffid}', 'staffController@deletestaff')->name('deletestaff');
Route::get('/staffstatus/{staffid}', 'staffController@staffstatus')->name('staffstatus');
Route::post('/controlstaff/{staffid}', 'staffController@controlstaff')->name('controlstaff');
//food(dish)
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/createfood','foodController@createfood')->name('createfood');
Route::post('/storedish','foodController@storedish')->name('storedish');
Route::get('/managedish', 'foodController@managedish')->name('managedish');
Route::post('/managedish/', 'foodController@search')->name('search');
Route::get('/viewsingledish/{foodid}', 'foodController@viewsingledish')->name('viewsingledish');
Route::post('/editsingledish/{foodid}', 'foodController@editsingledish')->name('editsingledish');
Route::get('/deletedish/{foodid}', 'foodController@deletedish')->name('deletedish');
//room
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/createroom','roomController@createroom')->name('createroom');
Route::post('/storeroom','roomController@storeroom')->name('storeroom');
Route::get('/managerooms', 'roomController@managerooms')->name('managerooms');
Route::get('/more/{roomid}', 'roomController@more')->name('more');
Route::post('/managerooms/', 'roomController@search')->name('search');
Route::get('/viewupdate/{roomid}', 'roomController@viewupdate')->name('viewupdate');
Route::get('/viewsingleroom/{roomid}', 'roomController@viewsingleroom')->name('viewsingleroom');
Route::get('/controloperation/{roomid}', 'roomController@controloperation')->name('controloperation');
Route::post('/editsingleroom/{roomid}', 'roomController@editsingleroom')->name('editsingleroom');
//rent  room and food
Route::get('/allrooms', 'roomController@allrooms')->name('allrooms');
Route::get('/controlrent/{roomid}/{clientid}','roomController@controlrent')->name('controlrent');
Route::get('/viewroom/{roomid}', 'roomController@viewroom')->name('viewroom');
Route::post('/ submitrent/{roomid}', 'roomController@submitrent')->name('submitrent');
Route::get('/menu', 'foodController@menu')->name('menu');
Route::get('/breakfast', 'foodController@breakfast')->name('breakfast');
Route::get('/lunch', 'foodController@lunch')->name('lunch');
Route::get('/supper', 'foodController@supper')->name('supper');
Route::get('/softdrink', 'foodController@softdrink')->name('softdrink');
Route::get('/controlfoodorder/{clientid}/{foodid}','foodController@controlfoodorder')->name('controlfoodorder');
Route::get('/skip/{clientid}', 'roomController@skip')->name('skip');
Route::get('/invoicecomplete1/{clientid}', 'roomController@invoicecomplete1')->name('invoicecomplete1');
Route::get('/dish/{foodid}', 'foodController@dish')->name('dish');
Route::post('/orderfood', 'foodController@orderfood')->name('orderfood');
Route::get('/removeroom/{roomid}', 'roomController@removeroom')->name('removeroom');
//pay admin
Route::get('/controlpay','paymentController@controlpay')->name('controlpay');
Route::get('/pay','paymentController@pay')->name('pay');
Route::post('/sent', 'paymentController@sent')->name('sent');

//all together
Route::get('/invoicecomplete/{clientid}', 'foodController@invoicecomplete')->name('invoicecomplete');
Route::get('/removedish/{foodid}/{clientid}', 'foodController@removedish')->name('removedish');
Route::get('/vieworder', 'foodController@vieworder')->name('vieworder');

Route::get('/controlorder/{clientid}','foodController@controlorder')->name('controlorder');
Route::get('/manageorder/{clientid}', 'foodController@manageorder')->name('manageorder');

//staff dashboard
Route::group(['middleware' => ['web']], function () {
Route::get('/staff/login','Auth\Staff\LoginController@staffloginform');
Route::post('/stafflogin','Auth\Staff\LoginController@stafflogin')->name('stafflogin');
Route::get('/staffdashboard', 'staffController@staffdashboard')->name('staffdashboard');
//food
Route::get('/Add meal','staffController@createfood')->name('createfood');
Route::post('/storemeal','staffController@storedish')->name('storedish');
Route::get('/Our menu', 'staffController@staffmenu')->name('menu');
Route::get('/Our breakfast', 'staffController@staffbreakfast')->name('breakfast');
Route::get('/Our lunch', 'staffController@stafflunch')->name('stafflunch');
Route::get('/Our supper', 'staffController@staffsupper')->name('staffsupper');
Route::get('/Our softdrink', 'staffController@staffsoftdrink')->name('staffsoftdrink');
Route::get('/single meal/{foodid}', 'staffController@viewsingledish')->name('viewsingledish');
Route::post('/Change/{foodid}', 'staffController@editsingledish')->name('editsingledish');
//Room
Route::get('/Add new Room','staffController@createroom')->name('createroom');
Route::post('/addroom','staffController@storeroom')->name('storeroom');
Route::get('/Rooms', 'staffController@managerooms')->name('managerooms');
Route::get('/Update this/{roomid}', 'staffController@viewupdate')->name('viewupdate');
Route::get('/controloperation/{roomid}', 'roomController@controloperation')->name('controloperation');
Route::post('/editsingleroom/{roomid}', 'roomController@editsingleroom')->name('editsingleroom');
Route::get('/all order', 'staffController@manageorder')->name('manageorder');
Route::get('/controlorder/{clientid}','staffController@controlorder')->name('controlorder');
Route::get('/Order/{clientid}', 'staffController@vieworder')->name('vieworder');

});  




