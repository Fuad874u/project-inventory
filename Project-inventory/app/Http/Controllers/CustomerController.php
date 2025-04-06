<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerPage()
    {
        return view('components/customer/customer-page');
    }

    public function customerCreate()
    {
        return view('components/customer/customer-create');
    }
    public function customerDelete()
    {
        return view('components/customer/customer-delete');
    }

    public function customerList()
    {
        return view('components/customer/customer-list');
    }

    public function customerUpdate()
    {
        return view('components/customer/customer-update');
    }
}
