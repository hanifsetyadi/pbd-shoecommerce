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
            Alert::error('Gagal', 'Stok Tidak Tersedia, Tersisa ' . $compare);
            return redirect('/transaction');
        } else if ($request->jumlah <= 0) {
            Alert::error('Gagal', 'Input Salah');
            return redirect('/transaction');
        } else {
            $query = "CALL sp_insert_transactions(?, ?)";
            $bindings = [$id, $jumlah];

            DB::statement($query,$bindings);
            
            Alert::success('Berhasil', 'Terimakasih Telah Melakukan Transaksi');
            return redirect('home');
        }
    }

    function getAllTransaction() {
        $transaction = transaction::all();
        $product = product::join('transactions', 'transactions.id_produk', '=', 'products.id_produk')->select('*')->get();
        // dd($product);
        return view('transaction-list', compact('transaction', 'product'));
    }

    function deleteTransaction(String $id) {
        $pr = transaction::findorfail($id);
        $pr->delete();
        Alert::alert('Berhasil Menghapus', 'Transaksi Dihapus');
        return back();

        // return redirect('/list-transaction');
    }
}
