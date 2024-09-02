<?php

use Illuminate\Support\Facades\Route;
use Modules\CompassContactForm\Http\Controllers\ContactFormController;


Route::get('kontakt', [ContactFormController::class, 'index'])
    ->name('contact.form')
    ->middleware('guest');
