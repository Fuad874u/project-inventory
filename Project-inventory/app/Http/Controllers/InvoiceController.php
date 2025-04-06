<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoicePage()
    {
        return view('components/invoice/invoice-page');
    }

   
    public function invoiceDelete()
    {
        return view('components/invoice/invoice-delete');
    }

    public function invoiceList()
    {
        return view('components/invoice/invoice-list');

    }
    public function invoiceDetails()
    {
        return view('components/invoice/invoice-details');
    }


   
}
