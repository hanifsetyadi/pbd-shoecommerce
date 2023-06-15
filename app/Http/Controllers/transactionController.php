<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

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
            Alert::error('Gagal', 'Stok Tidak Tersedia');
            return redirect('/transaction');
        } else if ($request->jumlah <= 0) {
            Alert::error('Gagal', 'Input Salah');
            return redirect('/transaction');
        } else {
            transaction::create([
                'id_produk' => $id,
                'jumlah' => $jumlah
            ]);
            Alert::success('Berhasil', 'Terimakasih Telah Melakukan Transaksi');
            return redirect('home');
        }
    }
}
