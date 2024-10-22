<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// Definisikan rute resource untuk Contact
Route::resource('contacts', ContactController::class);
