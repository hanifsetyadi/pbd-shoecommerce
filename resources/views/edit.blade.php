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
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        width: 500px;
        align-content: center;
    }

    .header {
        text-align: center;
    }

    a {
        color: blue;
    }
</style>
<div class="container">
    <table>
        <table class="table table-stripped-columns">
            <tbody>
                <tr>
                    <td class="header">Nama Produk</td>
                    <td class="header">Deskripsi</td>
                    <td class="header">Harga</td>
                    <td class="header">Stok</td>
                    <td class="header">Action</td>
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
                                <button class="button edit">Edit</button>
                                <button class="button delete">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>





{{-- <form action="" method="post">
    <input type="text">

</form> --}}
