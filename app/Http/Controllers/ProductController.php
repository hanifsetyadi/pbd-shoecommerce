<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('home', ['products'=>$products]);        
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
        Product::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'img' => $request ->img,
            'harga' => $request->harga,
            'stok' => $request->stok
        ]);
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
