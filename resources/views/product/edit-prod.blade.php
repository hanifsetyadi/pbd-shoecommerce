@include('layouts.main')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Stok</title>
    <style>
        .form-control::placeholder{
            color: lightgrey;
        }
        .form-control{
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="{{route('update',$pr->id_produk)}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="{{$pr->nama_produk}}" value="{{$pr->nama_produk}}" onclick="onChange()">
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" placeholder="{{$pr->deskripsi}}" value="{{$pr->deskripsi}}">
              </div>
              <div class="mb-3">
                  <label for="kategori" class="form-label">Kategori</label>
                  <input type="text" class="form-control" id="kategori" name="kategori" placeholder="{{$pr->kategori}}" value="{{$pr->kategori}}">
                </div>
              <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="{{$pr->harga}}" value="{{$pr->harga}}">
              </div>
              <div class="mb-3">
                  <label for="gambar" class="form-label">Link Gambar</label>
                  <input type="link" class="form-control" id="img" name="img" placeholder="{{$pr->img}}" value="{{$pr->img}}">
                </div>
              <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" placeholder="{{$pr->stok}}" value="{{$pr->stok}}">
              </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
</body>
</html>