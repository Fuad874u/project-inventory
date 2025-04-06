<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateSaleController extends Controller
{
  public function createSale(){
    return view('pages/dashboard/sale-page');
  }
}
