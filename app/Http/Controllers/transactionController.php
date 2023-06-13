<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class transactionController extends Controller
{
    function index(){
        $products = product::all();
        // dd($products);
        return view('transaction', ['products'=>$products]);
    }

    public function store(Request $request)
    {
        $id = $request->nama_produk;
        $jumlah = $request->jumlah;

        $compare = DB::table('products')->select('stok')->where('id_produk', '=', $id)->value('stok');
        if($request->jumlah > $compare){
            dd("stok kurang");
        } else if ($request->jumlah <= 0) {
            dd("kurang dari 0");
        } else {
            transaction::create([
                'id_produk' => $id,
                'jumlah' => $jumlah
            ]);
            return redirect('home');
        }
    }
}
