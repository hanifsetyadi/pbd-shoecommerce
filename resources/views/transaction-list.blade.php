@include('layouts.main')


<div class="container">
    <div class="card">
        <div class="card-body">
            {{-- <a class="btn btn-success" href="{{route('add')}}">Tambah</a> --}}
            <table class="table table-stripped-columns">
                <tbody>
                    <tr>
                        <td class="header table-header">No</td>
                        <td class="header table-header">Nama Produk</td>
                        <td class="header table-header">Harga</td>
                        <td class="header table-header">Jumlah</td>
                        <td class="header table-header">Total Harga</td>
                        <td class="header table-header">Action</td>
                    </tr>
                    @foreach ($product as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>@currency($item->harga)</td>
                        <td> {{$item->jumlah}} </td>
                        <td>@currency($item->sub_total)</td>
                        <td>
                            <div class="container">
                                <a class="btn btn-warning" href="{{ route('delete-transaction', $item->id_transaksi) }}">Delete</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>