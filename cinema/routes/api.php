<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HallController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\SeatNumberController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*
Защиненное API для авторизированных пользователей
*/
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/signout', [AuthController::class, 'signout']);
    Route::get('/current', [AuthController::class, 'current']);
    Route::get('/seats/vip/{hall_id}', [SeatNumberController::class, 'vip']);
    Route::get('/seats/default/{hall_id_id}', [SeatNumberController::class, 'default']);
    Route::apiResource('movies', MovieController::class);
    Route::apiResource('halls', HallController::class);
    Route::apiResource('types', TypeController::class);
    Route::apiResource('seats', SeatNumberController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('prices', PriceController::class);
    Route::apiResource('sessions', SessionController::class);
});

/*
API для гостевого доступа
*/
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/signin', [AuthController::class, 'signin']);
// Для страницы Index
Route::get('/getmovies', [MovieController::class, 'indexGuest']);
Route::get('/getsessions/{movie_id}', [SessionController::class, 'showSessionsByMovie']);
Route::get('/gethalls', [HallController::class, 'index']);
// Для страниц Session/Payment
Route::get('/getsession/{id}', [SessionController::class, 'showSession']);
Route::get('/getmovie/{movie_id}', [MovieController::class, 'show']);
Route::get('/getseats/{hall_id}', [SeatNumberController::class, 'show']);
Route::get('/getseat/{seat_id}', [SeatNumberController::class, 'showByID']);
Route::get('/gethall/{hall_id}', [HallController::class, 'show']);
Route::get('/gettypes', [TypeController::class, 'index']);
Route::get('/getprices/{hall_id}', [PriceController::class, 'show']);
Route::post('/tickets', [TicketController::class, 'store']);
Route::get('/getticket/{session_id}/{date}', [TicketController::class, 'showSeatsBySession']);
Route::get('/getticket/{uuid}', [TicketController::class, 'showTicketsBySession']);
