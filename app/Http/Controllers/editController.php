<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class editController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('edit', ["products"=>$products]);
    }
}
