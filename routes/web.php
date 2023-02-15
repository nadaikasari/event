<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SkkmController;
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
    return view('dashboard');
});

// Route::get('/skkm', function () {
//     return view('skkm');
// });

Route::get('/skkm', [SkkmController::class, 'getViewSkkm']);
Route::get('/getListEvent', [SkkmController::class, 'showListEvent']);
Route::get('/events', [EventController::class, 'getEvent']);
Route::get('/events/detail/{url_detail}', [EventController::class, 'getDetailEvent']);
Route::post('/events/register/{event_id}/{student_number}/{student_name}', [EventController::class, 'registerEvent']);
Route::get('/registration', [RegistrationController::class, 'validationData']);
Route::get('/scanqr', function () {
    return view('scan');
});
Route::get('/{idEvent}', [SkkmController::class, 'scanQr']);

