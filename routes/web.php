<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

// Route::get('/', function () {
//     return view('auth.login')->name("home");
// });


// Route::post('/artisan', function () {
//     $exitCode = Artisan::call('make:filament-resource Artisan', [
//         '--generate' => true,
//         '--view' => true,
//         '--panel' => 'admin'
//         ]);
// });

Route::get('/', function () {
    return view('auth.login');
});

Route::view('/', 'auth.login')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

// Route::get('/buckets', function(){
//     $disk = 'stsn';
//     $heroImage = Storage::get('testtsn.pdf');
//     $uploadedPath = Storage::disk($disk)->put('testtsn.pdf', $heroImage);
//     return Storage::disk($disk)->url($uploadedPath);
// });
