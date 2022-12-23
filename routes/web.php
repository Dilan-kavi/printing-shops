<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;;
use App\Http\Controllers\PcenterController;
use App\Http\Controllers\SkeeperController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FcustomerController;
use App\Http\Controllers\FrontskeeperController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Print_detailController;

;
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
//check

Route::get('check', function () {
    return view('timing');
});



Route::get('/', function () {
    return view('land');
});
Route::resource('users', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/fskeeper', [App\Http\Controllers\HomeController::class, 'skeeperindex']);
Route::get('/fcustomer', [App\Http\Controllers\HomeController::class, 'customerindex']);
Route::group(['middleware' => ['auth']], function() {

    Route::resource('roles', RoleController::class);

    

    Route::resource('pcenters', PcenterController::class);

    Route::resource('skeepers', SkeeperController::class);

    Route::resource('customers', CustomerController::class);

    Route::resource('print_details', Print_detailController::class);

    Route::resource('notifications', NotificationController::class);

    Route::resource('orders', OrderController::class);

    Route::resource('fskeepers', FrontskeeperController::class);

    Route::resource('fcustomers', FcustomerController::class);
});

Route::get('/myorders', 'FcustomerController@myorders')->name('myorders');
Route::get('/profile', 'FcustomerController@profile')->name('profile');
