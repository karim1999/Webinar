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
    return redirect()->route('webinar.register');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/webinar/register', 'WebinarController@register')->name('webinar.register')->middleware('guest:guest');
Route::post('/webinar/register', 'WebinarController@register_guest')->name('webinar.register');
Route::get('/webinar', 'WebinarController@event')->name('webinar.event')->middleware('auth:guest');

Route::get('/messages', 'MessageController@index');
Route::get('/settings', 'WebinarController@getSetting');
Route::post('/messages', 'MessageController@store');
Route::post('/submit_questions', 'QuestionController@submitForm');
Route::get('/submit_polls/{id}', 'QuestionController@submit_polls');

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function (){
    Route::get('/', function (){
        return redirect()->route('dashboard.setting.index');
    });
    Route::resource('/setting', 'dashboard\SettingController');
    Route::resource('/question', 'dashboard\QuestionController');
    Route::resource('/guest', 'dashboard\GuestController');
    Route::resource('/poll', 'dashboard\PollController');
    Route::resource('/message', 'dashboard\MessageController');
    Route::resource('/resource', 'dashboard\ResourceController');
    Route::resource('/speaker', 'dashboard\SpeakerController');
    Route::resource('/event', 'dashboard\EventController');
});
