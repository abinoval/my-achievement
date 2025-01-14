<?php

use App\Http\Controllers\CertificatesController;
use App\Http\Controllers\MyCertificatesController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/', [CertificatesController::class, 'index'])->middleware(['auth']);
Route::resource('/certificates', MyCertificatesController::class)->middleware(['auth']);

require __DIR__ . '/auth.php';
