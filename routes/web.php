<?php

// *****************************Frontend **************************


// Route::namespace('Frontend')->group(function () {

use App\Http\Controllers\Common\CKEditorController;
use App\Http\Controllers\Frontend\ContactFeedbackController;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\User\PulokController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['blockIp','localaization']],function(){

    Route::get('/', [IndexController::class, 'index'])->name('index');

    //Give feed back and contact User side
    Route::get('contact', [ContactFeedbackController::class, 'contact'])->name('contact');
    Route::post('feedback', [ContactFeedbackController::class, 'submitFeedback'])->name('submit.feedback');
    Route::get('feedback', [ContactFeedbackController::class, 'feedback'])->name('feedback');
    Route::get('query_form', [PulokController::class, 'query_form'])->name('query_form');
    Route::get('suggestions_symptoms', [PulokController::class, 'suggestions_symptoms'])->name('suggestions_symptoms');
    Route::get('symptoms', [PulokController::class, 'symptoms'])->name('symptoms');
    Route::get('suggestions', [PulokController::class, 'suggestions'])->name('suggestions');


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
