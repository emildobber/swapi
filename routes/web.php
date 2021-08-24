<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PlanetsController;
use App\Http\Controllers\SpeciesController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/filldatabase', [Controller::class, 'fillDatabase']);

Route::resource('people', PeopleController::class);
Route::resource('planets', PlanetsController::class);
Route::resource('species', SpeciesController::class);

require __DIR__.'/auth.php';
