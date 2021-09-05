<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers;

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

Route::get('/index', function () {
    return view('index');
});

Route::get('/orders', [OrderController::class, 'index'])->name('orders');
Route::get('/orderdetails', [OrderDetailController::class, 'index'])->name('orderdetails');

Route::get('/content', [ContentController::class, 'index'])->name('content');
Route::post('/content', [ContentController::class, 'store']);
Route::get('/content/{content}/edit', [ContentController::class, 'edit']);
Route::put('/content/{content}', [ContentController::class, 'update']);
Route::get('/create', [ContentController::class, 'create']);
Route::delete('content/{content}', [ContentController::class, 'destroy']);

Route::get('/products', [ProductController::class, 'index'])->name('products');

Route::get('/events', [EventController::class, 'index'])->name('events');

/* Begin Updated Part */
Route::resource('/features', FeatureController::class)->names([
    'index' => 'features',
]);
/* End Updated Part */

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets');

Route::group(['prefix' => 'mx-merchant-api'], function () {
    Route::get('/make-visa-payment', [\App\Http\Controllers\MxMerChantApiController::class, 'makeVISACreditPayment']);
});

require __DIR__ . '/auth.php';
