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
Route::get('/webinar/logout', 'WebinarController@logout')->name('webinar.logout');
Route::get('/webinar', 'WebinarController@event')->name('webinar.event')->middleware('auth:guest');

Route::get('/messages', 'MessageController@index');
Route::get('/settings', 'WebinarController@getSetting');
Route::get('/all_q_p', 'WebinarController@getQuestionsAndPolls');
Route::post('/messages', 'MessageController@store');
Route::post('/delete_message', 'MessageController@delete');
Route::post('/submit_questions', 'QuestionController@submitForm');
Route::get('/submit_polls/{id}', 'QuestionController@submit_polls');
Route::get('/poll/api/{poll}', 'dashboard\PollController@api')->name('poll.api');

Route::middleware(['auth'])->prefix('dashboard')->name('dashboard.')->group(function (){
    Route::get('/', function (){
        return redirect()->route('dashboard.setting.index');
    });
    Route::resource('/setting', 'dashboard\SettingController')->except(['show']);
    Route::resource('/question', 'dashboard\QuestionController')->except(['show']);
    Route::resource('/guest', 'dashboard\GuestController')->except(['show']);
    Route::resource('/poll', 'dashboard\PollController')->except(['show']);
    Route::get('/poll/single/{poll}', 'dashboard\PollController@show')->name('poll.show');
    Route::resource('/message', 'dashboard\MessageController')->except(['show']);
    Route::resource('/resource', 'dashboard\ResourceController')->except(['show']);
    Route::resource('/speaker', 'dashboard\SpeakerController')->except(['show']);
    Route::resource('/event', 'dashboard\EventController')->except(['show']);
    Route::resource('/message', 'dashboard\MessageController')->except(['show']);
    Route::get('/message/reset', 'dashboard\MessageController@reset')->name('message.reset');
    Route::get('/question/export', 'dashboard\QuestionController@export')->name('question.export');
    Route::get('/guest/export', 'dashboard\GuestController@export')->name('guest.export');
    Route::get('/poll/export', 'dashboard\PollController@export')->name('poll.export');
    Route::get('/message/export', 'dashboard\MessageController@export')->name('message.export');
    Route::get('/resource/export', 'dashboard\ResourceController@export')->name('resource.export');
    Route::get('/speaker/export', 'dashboard\SpeakerController@export')->name('speaker.export');
    Route::get('/event/export', 'dashboard\EventController@export')->name('event.export');
    Route::get('/reset', 'dashboard\SettingController@reset')->name('setting.reset');
    Route::get('/reset_guests', 'dashboard\GuestController@reset')->name('guest.reset');
    Route::get('/open_poll/{id}', 'dashboard\SettingController@open_poll')->name('setting.open_poll');
    Route::get('/open_question/{id}', 'dashboard\SettingController@open_question')->name('setting.open_question');
});
