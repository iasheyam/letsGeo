<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    Route::get('/questions', [QuestionController::class, 'index'])->name('questions.index');
    Route::post('/questions', [QuestionController::class, 'store'])->name('questions.store');

    Route::middleware('question')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        Route::get('/dashboard', [QuestionController::class, 'suggestedPlaces'])->name('dashboard');

        Route::get('preferences', [QuestionController::class, 'preferences'])->name('preferences');

        Route::get('/place/{place}', [QuestionController::class, 'showPlace'])->name('place.show');
        Route::post('/going/place/{place}', [QuestionController::class, 'going'])->name('place.going');
    });
});

require __DIR__ . '/auth.php';
