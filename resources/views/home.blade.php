@include('layouts.main')
<style>
    .card-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-gap: 20px;
        /* Memberikan ruang antara kartu */
        justify-content: flex-start;
        margin: 20px;
        text-decoration: none;
    }
    .container h2 {
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        font: 800;
        color: #829f71;
    }
    /* Menyesuaikan lebar kartu jika jumlah kartu tidak kelipatan 3 */
    @media (max-width: 992px) {
        .card:nth-child(3n+1) {
            width: 100%;
            /* Kartu pertama dalam setiap baris menggunakan lebar penuh */
        }
    }
    @media (max-width: 768px) {
        .card {
            width: 100%;
            /* Kartu menggunakan lebar penuh di layar yang lebih kecil */
        }
    }
    .desc {
        color: #817e7eaf;
        padding: 0;
        margin: 0;
    }
    .price {
        font-weight: bold;
    }
    .card{
        text-decoration: none;
    }
</style>

<div class="container">
    <h2 style="text-align: center;">Our Catalog</h2>
</div>
<div class="container">
    @if ($products->count())
    <div class="card-container">
        @foreach ($products as $item)
        <a href="{{ route('products.galleries', $item->slug) }}" class="card">
                <img src="{{$item->img}}"
                class="card-img-top" alt="shoes-image" width="300" height="200" style="object-fit: cover">
                <div class="card-body">
                    <p class="price" style="text-decoration: none">@currency($item->harga)</p>
                    <p class="card-text" style="text-decoration: none">{{ $item->nama_produk }}</p>
                    <p class="desc" style="text-decoration: none">{{ $item->deskripsi }}</p>
                </div>
            </a>
            @endforeach
    </div>
@else
<p class="text-center fs-4">No Product Found.</p>
@endif
</div>