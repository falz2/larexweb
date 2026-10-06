<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact-list', [ContactController::class, 'contactList'])->name('contact-list');