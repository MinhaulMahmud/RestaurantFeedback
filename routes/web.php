<?php

use App\Http\Controllers\FeedbackController;

use Illuminate\Support\Facades\Route;


Route::get('/', [FeedbackController::class, 'home'])->name('home');
Route::get('/menu', [FeedbackController::class, 'menu'])->name('menu');
Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');