<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

Route::view('/', 'homepage');
Route::view('/about', 'homepage1');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

  Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
  Route::resource('members', UserController::class);

  Route::view('forms', 'forms')->name('forms');
  Route::view('cards', 'cards')->name('cards');
  Route::view('charts', 'charts')->name('charts');
  Route::view('buttons', 'buttons')->name('buttons');
  Route::view('modals', 'modals')->name('modals');
  Route::view('tables', 'tables')->name('tables');
  Route::view('calendar', 'calendar')->name('calendar');

});

require_once __DIR__ . '/jetstream.php';
