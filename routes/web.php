<?php

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

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function (){
    Route::get('/', function (){
        return redirect()->route('dashboard.setting.index');
    });
    Route::resource('/setting', 'dashboard\SettingController');
    Route::resource('/question', 'dashboard\QuestionController');
    Route::resource('/poll', 'dashboard\PollController');
    Route::resource('/message', 'dashboard\MessageController');
    Route::resource('/resource', 'dashboard\ResourceController');
    Route::resource('/speaker', 'dashboard\SpeakerController');
    Route::resource('/event', 'dashboard\EventController');
});
