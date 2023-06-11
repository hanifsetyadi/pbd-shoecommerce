<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class ProductController extends Controller
{
    public function index()
    {
        $products = product::paginate(6);
        return view('home', ['products'=>$products]);    
        
        // if (Auth::id()) {
        //     $usertype=Auth()->user()->isAdmin;
        //     if($usertype==1){
        //         dd("admin");
        //     }else{
        //         dd("user");
        //     }
        // }
    }
    public function routeEdit(){
        $products = product::all();
        return view('edit', ['products'=>$products]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $product = product::all();
        return view('product.add-prod',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nama_produk = $request->nama_produk;
        $slug = SlugService::createSlug(product::class, 'slug', $nama_produk);
        // $slug = Str::slug($nama_produk);
        $deskripsi = $request->deskripsi;
        $kategori = $request->kategori;
        $img = $request ->img;
        $harga = $request->harga;
        $stok = $request->stok;

        $query = "CALL sp_insert_product(?, ?, ?, ?, ?, ?, ?)";
        $bindings = [$nama_produk, $deskripsi, $kategori,$img, $harga, $stok, $slug];

        DB::statement($query, $bindings);
        return redirect('edit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = product::all();
        $pr = product::find($id);
        return view('product.edit-prod', compact('pr', 'product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $pr = product::findorfail($id);
        $pr->update($request->all());
        return redirect('edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $pr = product::findorfail($id);
        $pr->delete();
        return back();
    }   
}
