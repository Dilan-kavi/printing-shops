<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;;
use App\Http\Controllers\PcenterController;
use App\Http\Controllers\SkeeperController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FskeeperController;
use App\Http\Controllers\TimeslotController;
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

// Route::get('check', function () {
//     return view('timing');
// });
// Route::get('cselect', function () {
//     return view('frontcustomer\centerselect');
// });


Route::get('/', function () {
    return view('land');
});
Route::resource('users', UserController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/fskeeper', [App\Http\Controllers\HomeController::class, 'skeeperindex']);
Route::get('/fskeeper', [FrontskeeperController::class, 'index']);
Route::get('/fcustomer', [App\Http\Controllers\HomeController::class, 'customerindex'])->name('cushome');
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

    Route::resource('timeslots', TimeslotController::class);
});
Route::get('/avalible/{id}', [TimeslotController::class, 'avalible'])->name('available'); //check available time slots

Route::get('/cselect', [FcustomerController::class, 'cselect'])->name('check'); //turn to check available time slots

Route::get('/editorder', [FcustomerController::class, 'editorder'])->name('edit'); //view customer's order list

Route::get('/pview', [FcustomerController::class, 'pview'])->name('profile'); //profile view

Route::get('/edit', [FcustomerController::class, 'edit'])->name('editdetail'); //edit print details

Route::post('/create', [FcustomerController::class, 'create'])->name('create'); //turn to center selection page

Route::post('/store', [FcustomerController::class, 'store'])->name('store'); //create print detail 

Route::get('/download/{id}', [FrontskeeperController::class, 'download'])->name('download'); //to download files 

