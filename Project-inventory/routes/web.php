<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CreateSaleController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CreateSaleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MultiController;
use App\Http\Controllers\ReportController;



Route::get('/', function () { return 'welcome';});
Route::get('/homepage',[HomeController::class,'homePage']);
Route::get('/dashboard',[DashboardController::class,'dashboardPage']);
Route::get('/categoryPage',[CategoryController::class,'categoryPage']);
Route::get('/categorycreate',[CategoryController::class,'categoryPage']);
//customer
Route::get('/customerPage',[CustomerController::class,'customerPage']);
Route::get('/customercreate',[CustomerController::class,'customerCreate']);
Route::get('/customerdelete',[CustomerController::class,'customerDelete']);
Route::get('/customerlist',[CustomerController::class,'customerList']);
Route::get('/customerupdate',[CustomerController::class,'customerUpdate']);
//product
Route::get('/productPage',[ProductController::class,'productPage']);
Route::get('/productcreate',[ProductController::class,'productCreate']);
Route::get('/productdelete',[ProductController::class,'productDelete']);
Route::get('/productlist',[ProductController::class,'productList']);
Route::get('/productupdate',[ProductController::class,'productUpdate']);
//invoice
Route::get('/invoicePage',[InvoiceController::class,'invoicePage']);
Route::get('/invoicedelete',[InvoiceController::class,'invoiceDelete']);
Route::get('/invoicelist',[InvoiceController::class,'invoiceList']);
Route::get('/invoicedetails',[InvoiceController::class,'invoiceDetails']);
//sale page
Route::get('/salePage',[CreateSaleController::class,'createSale']);

//report
Route::get('/reportPage',[ReportController::class,'report']);

//other works next
//login
Route::get('/userLogin',[MultiController::class,'login']);

//regestration
Route::get('/userRegistration',[MultiController::class,'registration']);

//reset-pass
Route::get('/reset',[MultiController::class,'reset']);

//send otp
Route::get('/sendOtp',[MultiController::class,'send']);

Route::get('/verify',[MultiController::class,'verify']);


//user profile
Route::get('/logout',[MultiController::class,'profile']);
Route::get('/userProfile',[MultiController::class,'profile']);
//logout
