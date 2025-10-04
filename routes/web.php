<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/homepage', 'homepage');
Route::view('/lessons', 'lessonspage');
Route::view('/quizzes', 'quizzespage');
Route::view('/vocabulary', 'vocabularypage');
Route::view('/grammar', 'grammarpage');
Route::view('/exercises', 'exercisepage');
Route::view('/progres', 'progresspage');
Route::view('/contact', 'contactpage');
