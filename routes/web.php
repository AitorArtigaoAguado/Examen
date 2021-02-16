<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::get('/', function () {
    return view('index');
});

Route::get('/migraciones', function () {
    return view('migraciones');
});

Route::get('/seeders', function () {
    return view('seeders');
});

Route::get('/email', [ContactController::class, 'contact']);
    
Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');
