<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('/homepage', 'homepage')->name('home');
Route::view('/about', 'aboutpage')->name('about');
Route::view('/contact', 'contactpage')->name('contact');
Route::view('/lessons', 'lessonspage')->name('lessons');
Route::view('/quizzes', 'quizzespage')->name('quizzes');
Route::view('/vocabulary', 'vocabularypage')->name('vocabulary');
Route::view('/progress', 'progresspage')->name('progress');
