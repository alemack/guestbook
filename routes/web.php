<?php

use App\Http\Middleware\XSS;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MyControl;
use App\Http\Controllers\Record\EditController;
use App\Http\Controllers\Record\ShowController;
use App\Http\Controllers\Record\IndexController;
use App\Http\Controllers\Record\StoreController;
use App\Http\Controllers\Record\CreateController;
use App\Http\Controllers\Record\UpdateController;
use App\Http\Controllers\Record\DestroyController;

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

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Auth::routes();
// Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/login', function () {
//     return 's';
// });

// Route::get('/login', [HomeController::class, 'index'])->name('login.index');

Route::group(['namespace' => 'Record', 'middleware'=>'XSS'], function() {
Route::get('/records', [IndexController::class, '__invoke'])->name('record.index');

Route::get('/records/create', [CreateController::class, '__invoke'])->name('record.create');
Route::post('/records', [StoreController::class, '__invoke'])->name('record.store');

Route::get('/records/{record}', [ShowController::class, '__invoke'])->name('record.show');

Route::get('/records/{record}/edit', [EditController::class, '__invoke'])->name('record.edit');
Route::patch('/records/{record}', [UpdateController::class, '__invoke'])->name('record.update');

Route::delete('/records/{record}', [DestroyController::class, '__invoke'])->name('record.delete');
});

// Route::get('/my', [MyControl::class, '__invoke']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
