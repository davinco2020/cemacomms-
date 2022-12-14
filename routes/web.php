<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
use App\Http\Controllers\DavecrudController;




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
    return view('home1');
});

Route::view('/crud', 'crud');
Route::view('home', 'home');
Route::post('/submitCrud', [CrudController::class, 'store']);
Route::get('/crudlist', [CrudController::class, 'getcrud']);
Route::get('/edit/{id}', [CrudController::class, 'editcrud1']);
Route::post('/updatecrud', [CrudController::class, 'updatecrud']);
Route::get('/delete/{id}', [CrudController::class, 'deletecrud']);
Route::get('/davecrud', function(){
    return view('davecrud');
});

Route::post('/sendcrud', [DavecrudController:: class, 'saveinfo']);
Route::post('/salespost', [DavecrudController:: class, 'savesales']);
Route::get('/allsales', [DavecrudController:: class, 'allsales']);
Route::get('/todaysales', [DavecrudController:: class, 'todaysaless']);
Route::post('/allstocks', [DavecrudController:: class, 'allstocks']);
Route::post('/savestocks', [DavecrudController::class, 'savestock']);
Route::get('/allstocks', [DavecrudController::class, 'allstocks']);
Route::get('/findproducts', [DavecrudController::class, 'findsales']);
Route::post('/searchsale', [DavecrudController::class, 'searchsale']);

Route::get('/searchsales', [DavecrudController::class, 'search']);
Route::post('/searchsupply', [DavecrudController::class, 'searchsupply']);
Route::post('/searchproduct', [DavecrudController::class, 'searchproduct']);
Route::post('/searchcust', [DavecrudController::class, 'searchcust']);


Route::get('/fetchcust/{set}', [DavecrudController::class, 'fetchcust']);













Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/salesli', [App\Http\Controllers\DavecrudController::class, 'salesli']);
Route::get('/sales', [App\Http\Controllers\DavecrudController::class, 'saleslight']);
Route::get('/salesrequest', [DavecrudController::class, 'salesreq']);
Route::get('/findproductname', [DavecrudController::class, 'findproductname']);



Route::view('/sales1', 'saleslink');

Route::view('/saleslink', 'saleslink');
Route::get('/newstock', [DavecrudController::class, 'newstock']);
Route::get('/delete/{id}', [DavecrudController::class, 'deletesale']);
Route::post('/updateprice', [DavecrudController::class, 'updateprice']);
Route::get('/products', [DavecrudController::class, 'products']);





Route::view('/staff', 'staff');

Route::get('/sell', [\App\Http\Controllers\DavecrudController::class, 'sell']);
Route::post('/sendsales', [\App\Http\Controllers\DavecrudController::class, 'savesale']);

Route::get('/findproduct', [\App\Http\Controllers\DavecrudController::class, 'findpro']);

Route::post('/searchsale', [\App\Http\Controllers\DavecrudController::class, 'searchsale']);



Route::view('/first', 'sales');
Route::view('/allstaff', 'allstaff');
Route::view('/staff', [\App\Http\Controllers\DavecrudController::class, 'staff']);












Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
