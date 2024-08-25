<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaringalController;

// Redirect root to /caringal
Route::get('/', function () {
    return redirect('/caringal');
});

// Define the /caringal route to use CaringalController
Route::get('/caringal', [CaringalController::class, 'index'])->name('caringal');

// Define the POST route for form submission
Route::post('/caringal/submit-message', [CaringalController::class, 'submitMessage'])->name('submit.message');
