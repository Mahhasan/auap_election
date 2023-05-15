<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\WelcomeController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WelcomeController::class, 'index']);
// Route::post('/', [VoteController::class, 'submitVote'])->name('vote.submit');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'candidateInfo']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vote', [VoteController::class, 'showForm'])->name('vote.form');
Route::post('/vote', [VoteController::class, 'submitVote'])->name('vote.submit');
Route::get('/results', [VoteController::class, 'showResults'])->name('vote.results');

//PDF Generate
Route::get('/vote-result', [ResultController::class, 'downloadCandidateResult'])->name('result.download.candidate');
Route::get('/result', [ResultController::class, 'downloadOverallResult'])->name('result.overall');



