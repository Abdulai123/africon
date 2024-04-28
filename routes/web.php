<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JobController;
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


// **************************
// **** LEAVE BELOW HERE ****
// **************************


// This is a coming soon routes
Route::get('/learn', function () {
    return view('learn.landing-page');
});

Route::get('/communities', function () {
    return view('communities.landing-page');
});


// **************************
// ***** LEAVE UP HERE ******
// **************************

Route::get('/', function () {
    return view('welcome');
});




Route::get('/jobs', [JobController::class, 'index'])->name('jobs.job-listing');

Route::get('/job', [JobController::class, 'create'])->name('jobs.job-single');

Route::post('/dashboard/job/create-only', [JobController::class, 'store'])->middleware(['auth', 'verified']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/create-job', function () {
        // Redirect to the specified view
        return view('user-jobs.job_create');
    });
});

require __DIR__.'/auth.php';


