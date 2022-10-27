<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Record\EditController;
use App\Http\Controllers\Record\ShowController;
use App\Http\Controllers\Record\IndexController;
use App\Http\Controllers\Record\StoreController;
use App\Http\Controllers\Record\CreateController;
use App\Http\Controllers\Record\UpdateController;
use App\Http\Controllers\Record\DestroyController;
use App\Http\Middleware\XSS;

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

Route::group(['namespace' => 'Record', 'middleware'=>'XSS'], function() {
Route::get('/records', [IndexController::class, '__invoke'])->name('record.index');

Route::get('/records/create', [CreateController::class, '__invoke'])->name('record.create');
Route::post('/records', [StoreController::class, '__invoke'])->name('record.store');

Route::get('/records/{record}', [ShowController::class, '__invoke'])->name('record.show');

Route::get('/records/{record}/edit', [EditController::class, '__invoke'])->name('record.edit');
Route::patch('/records/{record}', [UpdateController::class, '__invoke'])->name('record.update');

Route::delete('/records/{record}', [DestroyController::class, '__invoke'])->name('record.delete');
});

