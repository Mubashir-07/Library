<?php

use GuzzleHttp\Middleware;
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

Route::get('/', 'Controller@Login')->name('Login');
Route::get('Logout', 'Controller@Logout')->name('Logout');
Route::get('Register', 'Controller@Register')->name('Register');
Route::post('DoLogin', 'Controller@DoLogin')->name('DoLogin');
Route::post('AddingAdmin', 'Controller@AddingAdmin')->name('AddingAdmin');
Route::get('test', 'Controller@test')->name('test');

Route::group(['middleware' => 'user_auth'], function () {
    Route::resource('book', BookController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('branch', BranchController::class);


    Route::get('Dashboard', 'Controller@Dashboard')->name('Dashboard');
    Route::get('EditProfile/{id}', 'Controller@EditProfile')->name('EditProfile');
    Route::post('UpdateProfile/{id}', 'Controller@UpdateProfile')->name('UpdateProfile');


    Route::get('DeleteBook/{id}', 'BookController@DeleteBook')->name('DeleteBook');


    Route::get('DeleteCust/{customer}', 'CustomerController@DeleteCust')->name('DeleteCust');
    Route::get('RestoreCust/{customer}', 'CustomerController@RestoreCust')->name('RestoreCust');

    // Route::get('DeleteBook/{book}','BookController@DeleteBook')->name('DeleteBook');

    // Transaction
    Route::get('AddTransaction', 'TransactionController@AddTransaction')->name('AddTransaction');
    Route::get('EditTransaction/{trans_id}', 'TransactionController@EditTransaction')->name('EditTransaction');
    Route::post('StoreTransaction', 'TransactionController@StoreTransaction')->name('StoreTransaction');
    Route::get('ShowTransaction', 'TransactionController@ShowTransaction')->name('ShowTransaction');
    Route::post('UpdateTransaction/{trans_id}', 'TransactionController@UpdateTransaction')->name('UpdateTransaction');


    // Report
    Route::get('BookInventory', 'ReportController@BookInventory')->name('BookInventory');
    Route::get('BorrowerList', 'ReportController@BorrowerList')->name('BorrowerList');
});
