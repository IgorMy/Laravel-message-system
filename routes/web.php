<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MessageController;

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

Route::group([
    'middleware' => 'auth'
], function ($router) {
    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::post('/services', [ServiceController::class, 'create'])->name('add_service');
    Route::get('/services/{id}', [ServiceController::class, 'show'])->name('show_services');
    Route::post('/messages', [MessageController::class, 'create'])->name('add_message');
});



require __DIR__.'/auth.php';
