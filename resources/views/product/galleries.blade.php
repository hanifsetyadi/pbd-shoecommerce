@extends('layouts.main')

@section('content')
    <section class="container gallery my-5 pt-1">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-12 col-12">
                <div class="product-frame">
                    <img src="{{ $product->img }}" alt="Product Image" class="product-image">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <h6><a href="/home">product</a>/{{$product->nama_produk}}   </h6>
                <h3 class="py-3">{{ $product->nama_produk }}</h3>
                <h2 class="price mb-3">@currency($product->harga)</h2>
                <a href="#" class="btn btn-primary">Beli Sekarang</a>
                <h4 class="mt-3 bt-5">Detail Produk</h4>
                <span>{{ $product->deskripsi }}</span> 
            </div>
        </div>
    </section>
{{-- <div class="container">
    <div class="row">
        <div class="col-md-6 left-container">
            <div class="value-img">
                <img src="{{ $product->img }}" alt="Product Image" class="product-image">
            </div>
        </div>
        <div class="col-md-6 right-container">
            <h1>{{ $product->nama_produk }}</h1>
            <p>{{ $product->deskripsi }}</p>
            <p>Kategori: {{ $product->kategori }}</p>
            <p>Harga: {{ $product->harga }}</p>
            <p>Stok: {{ $product->stok }}</p>
            <a href="#" class="btn btn-primary">Beli Sekarang</a>
        </div>
    </div>
</div> --}}
@endsection

@section('styles')

@endsection