<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChefController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CookerController;
use App\Http\Controllers\ReservationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/table', function () {
    return view('admin.table');
});
Route::get('/addchef', function () {
    return view('admin.addchef');
});
Route::get('/chef', [ChefController::class, 'index'])->name('chef');




Route::get('/cook',[CookerController::class,'index'])->name('cook.main');
Route::get('/cookform',[CookerController::class,'addcook'])->name('cookform');
Route::post('/addcook',[CookerController::class,'store'])->name('cook.add');
Route::get('/deletecook/{id}', [CookerController::class,"delete"])->name('cook.delete');
Route::get('/editcook/{id}', [CookerController::class,"edit"])->name('cook.edit');
Route::post('/updatecook/{id}', [CookerController::class,"update"])->name('cook.update');





Route::get('/',[HomeController::class,'index'])->name('rest.main');
Route::get('/dash',[HomeController::class,'dashboard'])->name('dashboard');
// Route::get('/table',[HomeController::class,'table'])->name('table');
Route::get('/logged.in',[HomeController::class,'logged'])->name('logged.in');
Route::post('/chefadd',[ChefController::class,'addchef'])->name('chef.add');

Route::get('/delete_chef/{id}', [ChefController::class,"deleteChef"])->name('delete.chef');
Route::get('/edit_chef/{id}', [ChefController::class,"editChef"])->name('edit.chef');
Route::post('/update_Chef/{id}', [ChefController::class,"updateChef"])->name('update.chef');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



Route::get('/delete/{id}', [HomeController::class,"delete"])->name('user.delete');
Route::get('/edit/{id}', [HomeController::class,"edit"])->name('user.edit');
Route::post('/update/{id}', [HomeController::class,"update"])->name('user.update');





Route::prefix('/reservation/')->group( function(){

    Route::post('/reservation/add', [ReservationController::class,"store"])->name('reservation');
    Route::get('/reserv_tables', [ReservationController::class,"show"])->name('reservation_tbl');
    Route::get('/done{id}', [ReservationController::class,"done"])->name('done');
    Route::get('/completed', [ReservationController::class,"completed"])->name('reservation.completed');
    Route::get('/trash', [ReservationController::class,"trash"])->name('reservation_trash');
    Route::get('/trashshow', [ReservationController::class,"trashshow"])->name('reservation_trashshow');

    Route::get('/forcedelete', [ReservationController::class,"forcedelete"])->name('reservation_forcedelete');
    Route::get('/restore/{id}', [ReservationController::class,"restore"])->name('reservation_restore');

    Route::get('/reservation_trashed/{id}', [ReservationController::class,"destroy"])->name('reservation_delete');

});
