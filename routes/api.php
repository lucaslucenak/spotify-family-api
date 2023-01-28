<?php

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MonthlyPaymentController;
use App\Http\Controllers\CustomerMonthlyPaymentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'customer' => CustomerController::class,
    'monthly-payment' => MonthlyPaymentController::class,
    'customer-monthly-payment' => CustomerMonthlyPaymentController::class
]);

Route::controller(CustomerMonthlyPaymentController::class)->group(function () {
    Route::get('/customer-monthly-payment/by-month/{monthlyPaymentId}', 'showByMonth');
    Route::get('/customer-monthly-payment/by-month/{monthlyPaymentId}/{customerId}', 'showByMonthAndByCustomer');
});
