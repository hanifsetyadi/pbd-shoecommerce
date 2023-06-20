@if (Auth()->user()->isAdmin == 0)
<h1>Bukan adminn</h1>
@elseif(auth()->user()->isAdmin == 1)
    
@include('layouts.main')
<br>

<style>
    .button {
        border-radius: 5px;
        border: 3px;
        width: 5rem;
        font-size: 12px;

    }

    .add {
        background-color: forestgreen;
    }

    .edit {
        background-color: yellow;
    }

    .delete {
        background-color: red;
    }
    /* th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        width: 500px;
        align-content: center;
    } */

    a {
        color: blue;
    }

    .card{
        margin-top: 1rem;
    }
</style>
<div class="container">
    
    <a class="btn btn-success" href="{{route('add')}}">Tambah</a>
    <div class="card">
        <div class="card-body">    
    <table class="table table-stripped-columns">
            <tbody>
                <tr>
                    <td class="header table-header">Nama Produk</td>
                    <td class="header table-header">Deskripsi</td>
                    <td class="header table-header">Harga</td>
                    <td class="header table-header">Stok</td>
                    <td class="header table-header">Action</td>
                </tr>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->deskripsi }}</td>
                        <td>@currency($item->harga)</td>
                        <td>{{ $item->stok }}</td>
                        <td>
                            <div class="container">
                                {{-- <button class="button add">Add</button> --}}
                                <a class="btn btn-warning" href="{{route('editprod', $item->id_produk)}}">Edit</a>
                                <a class="btn btn-warning" href="{{ route('delete', $item->id_produk) }}">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endif


{{-- <form action="" method="post">
    <input type="text">

</form> --}}
