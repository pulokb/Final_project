<?php

// *****************************Frontend **************************


// Route::namespace('Frontend')->group(function () {

use App\Http\Controllers\Common\CKEditorController;
use App\Http\Controllers\Frontend\ContactFeedbackController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\User\PulokController;
use App\Http\Controllers\User\SearchController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => config('user.user_route_prefix'), 'as' => 'user.'], function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware'=>['blockIp','localaization']],function(){

    Route::get('/', [IndexController::class, 'index'])->name('index');

    //Give feed back and contact User side
    Route::get('contact', [ContactFeedbackController::class, 'contact'])->name('contact');
    Route::post('feedback', [ContactFeedbackController::class, 'submitFeedback'])->name('submit.feedback');
    Route::get('feedback', [ContactFeedbackController::class, 'feedback'])->name('feedback');
    Route::get('query_form', [PulokController::class, 'query_form'])->name('query_form');
    Route::get('suggestions_symptoms', [PulokController::class, 'suggestions_symptoms'])->name('suggestions_symptoms');
    Route::post('suggestions_symptoms', [PulokController::class, 'suggestions_symptoms'])->name('suggestions_symptoms');
    Route::get('symptoms', [PulokController::class, 'symptoms'])->name('symptoms');
    Route::get('suggestions', [PulokController::class, 'suggestions'])->name('suggestions');
    Route::get('faq', [PulokController::class, 'faq'])->name('faq');
    Route::get('blogdetails', [PulokController::class, 'details'])->name('blog.details');
    Route::get('/symptoms/{id}', [PulokController::class, 'symptom'])->name('symptom.details');
    Route::get('search', [SearchController::class,'search'])->name('search');


    // Pages
    // Route::get('privacy-policy', [PageController::class,'privacyPolicy'])->name('privacy.policy');
    // Route::get('terms-and-conditions', [PageController::class,'termsAndConditions'])->name('terms.and.conditions');
    Route::get('about', [PageController::class, 'about'])->name('about');
    // });

    // Ckeditor Image Upload
    Route::post('ckeditor/image-upload', [CKEditorController::class, 'imageUpload'])->name('ckeditor.image.upload');


    Route::get('/language/{locale}', [IndexController::class, 'changeLanguage'])->name('changeLanguage');
});



Route::group(['prefix' => 'admin'], function () {
    Route::resource('newTest2s', App\Http\Controllers\Admin\NewTest2Controller::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('userQueries', App\Http\Controllers\Admin\UserQueryController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('doctorFeedbacks', App\Http\Controllers\Admin\DoctorFeedbackController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('symptoms', App\Http\Controllers\Admin\SymptomsController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('suggestions', App\Http\Controllers\Admin\SuggestionsController::class, ["as" => 'admin']);
});











Route::group(['prefix' => 'admin'], function () {
    Route::resource('helpTypes', App\Http\Controllers\Admin\HelpTypeController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('helpRequests', App\Http\Controllers\Admin\HelpRequestController::class, ["as" => 'admin']);
});


Route::group(['prefix' => 'admin'], function () {
    Route::resource('emergencyContacts', App\Http\Controllers\Admin\EmergencyContactController::class, ["as" => 'admin']);
});
