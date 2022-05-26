<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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




Route::get('/', [EventController::class,'showEventsCards']);
Route::get('/signin',[UserController::class,'showSignInForm']);
Route::post('/login',[UserAuthController::class,'login']);
Route::get('/formupdate',function(){
    return view('dashboard.updateeventform');
})->name('formupdate');
 Route::group(['middleware'=>'auth'],function(){
Route::get('/userlist',[UserController::class,'showUserList'])->name('userlist');
Route::post('/adduser',[UserController::class,'addUsers']);
Route::get('/userform', [UserController::class,'showForm']);
Route::get('/eventform',[EventController::class,'showEventForm']);
Route::post('/addevent',[EventController::class,'addEvents']);
Route::get('/eventlist',[EventController::class,'showEventlist'])->name('eventlist');
Route::get('/logout',[UserAuthController::class,'logout']);
Route::get('/update/{id}',[EventController::class,'showupdateform'])->name('update');
Route::post('/eventlistupdated',[EventController::class,'update']);
Route::get('/delete/{id}',[EventController::class,'delete'])->name('delete');
Route::get('deleteuser/{id}',[UserController::class,'delete'])->name('deleteuser');
});