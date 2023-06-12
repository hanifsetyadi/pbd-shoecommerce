@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->img }}" alt="Product Image" class="product-image">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->nama_produk }}</h1>
            <p>{{ $product->deskripsi }}</p>
            <p>Kategori: {{ $product->kategori }}</p>
            <p>Harga: {{ $product->harga }}</p>
            <p>Stok: {{ $product->stok }}</p>
            <!-- Tambahkan tombol atau tautan untuk aksi tambahan -->
            <a href="#" class="btn btn-primary">Beli Sekarang</a>
        </div>
    </div>
</div>
@endsection

@section('styles')
<style>
    .product-image {
        width: 100%;
        max-height: 300px;
        object-fit: cover;
    }
</style>
@endsection