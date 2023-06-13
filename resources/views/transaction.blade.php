@include('layouts.main')

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
</head>

<div class="container">
    <h1>Silahkan Memasukkan Data Produk Yang Ingin Dicheckout</h1>
    <form action="{{route('save-transaction')}}" method="post">
        @csrf
        <label for="nama" class="form-label">Nama Produk</label>
        <select class="form-select select" aria-label="Default select example" value="a" name="nama_produk" required>
            @foreach ($products as $item)
                <option value="{{$item->id_produk}}">{{ $item->nama_produk }}</option>
            @endforeach
        </select>
        <div class="mb-3">
            <label for="nama" class="form-label">Jumlah</label>
            <input type="number" class="form-control" id="jumlah" name="jumlah" required>
        </div>
        <script>
            $(document).ready(function() {
                $('.select').select2();
            });
        </script>
        <button class="btn" type="submit">Submit</button>
    </form>
</div>
