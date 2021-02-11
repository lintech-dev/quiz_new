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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('UDashboard', function () {
    return view('UDashboard');
});

    Route::get('Admin_Dashboard', function () {
        return view('Admin_Dashboard');
    });

        Route::post('/add_quiz_new', 'App\Http\Controllers\Controller@add_quiz_new_back');
    
        Route::get('quiz_question_awnser', function () {
            return view('quiz_question_awnser');
        });
        
            Route::post('/add_quiz_qa', 'App\Http\Controllers\Controller@add_quiz_qa_back');
            Route::post('/add_quiz_new_user', 'App\Http\Controllers\Controller@add_quiz_new_user_back');
    
            Route::get('score_card', function () {
                return view('score_card');
            });
            
            
        