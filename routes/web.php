<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\innerController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/inner', [innerController::class, 'inner'])
    ->middleware(['auth'])
    ->name('inner');
    

require __DIR__.'/auth.php';

Route::get('/email', function () {
    Mail::to('alex@gmail.com')->send(new WelcomeMail());
    return new WelcomeMail();
});
