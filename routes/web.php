<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::view('/about', 'about');
Route::view('/tips', 'tips');
Route::view('/resources', 'resources');
Route::view('/contact', 'contact');
Route::view('/list', 'list')->name('list');

Route::view('/topics/addiction', 'topics.addiction')->name('topics.addiction');
Route::view('/topics/cyber-violence', 'topics.cyber-violence')->name('topics.cyber-violence');
Route::view('/topics/financial-fraud', 'topics.financial-fraud')->name('topics.financial-fraud');
Route::view('/topics/grooming', 'topics.grooming')->name('topics.grooming');
Route::view('/topics/harmful-content', 'topics.harmful-content')->name('topics.harmful-content');
Route::view('/topics/sexting', 'topics.sexting')->name('topics.sexting');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboar@todod');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
