<?php

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

// Route::get('/', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
   
    Route::get('/', App\Http\Livewire\Dashboard::class)->name('dashboard');

    Route::view('profile', 'profile')->name('profile');

    Route::prefix('processo')->group(function () {
        Route::get('form', App\Http\Livewire\Processo\Form::class)->name('processo.form'); 
    });

    Route::get('users', App\Http\Livewire\Users::class)->name('users');

    
});


require __DIR__.'/auth.php';
