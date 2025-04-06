<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productPage()
    {
        return view('components/product/product-page');
    }

    public function productCreate()
    {
        return view('components/product/product-create');
    }
    public function productDelete()
    {
        return view('components/product/product-delete');
    }

    public function productList()
    {
        return view('components/product/product-list');
    }

    public function productUpdate()
    {
        return view('components/product/product-update');
    }
}
