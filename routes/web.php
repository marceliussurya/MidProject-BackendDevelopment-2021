<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home;
use App\Http\Livewire\CourseComponent;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home',Home::class);
Route::get('/course',Home::class)->name('course');

Route::middleware(['auth:sanctum', 'verified', 'authadmin'])->group(function () {
    Route::get('/',Home::class)->name('home');
    Route::get('/course',CourseComponent::class)->name('course');
});
    
