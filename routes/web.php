<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CaringalController;

// Define the root route to render the rence view
Route::get('/', function () {
    return view('contents.rence'); 
})->name('home'); // Naming the root route

// Define the POST route for form submission at the root
Route::post('/', [CaringalController::class, 'submitMessage'])->name('submit.message');

Route::get('/blog1', function () {
    return view('caringal.blogone');  // Render blog one content
})->name('blog1');






//testing pages
Route::get('/home', function () {
    return view('contents.home');  // Render home content from the 'contents' folder
})->name('home.content');

Route::get('/about', function () {
    return view('contents.about');  // Render about content from the 'contents' folder
})->name('about');