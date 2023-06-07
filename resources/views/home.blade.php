@include('layouts.main')
<style>
    .card-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-gap: 20px;
        /* Memberikan ruang antara kartu */
        justify-content: flex-start;
        margin: 20px;
    }
    .card {}
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
</style>

<div class="container">
    <h2 style="text-align: center;">Our Catalog</h2>
</div>

@if ($products->count())
    <div class="card-container">
        @foreach ($products as $item)
            <div class="card">
                <img src="https://w7.pngwing.com/pngs/337/325/png-transparent-sneakers-shoe-running-shoes-outdoor-shoe-converse-shoe.png"
                    class="card-img-top" alt="shoes-image">
                <div class="card-body">
                    <p class="price">@currency($item->harga)</p>
                    <p class="card-text">{{ $item->nama_produk }}</p>
                    <p class="desc">{{ $item->deskripsi }}</p>
                </div>
            </div>
        @endforeach
    </div>
@else
    <p class="text-center fs-4">No Product Found.</p>
@endif
