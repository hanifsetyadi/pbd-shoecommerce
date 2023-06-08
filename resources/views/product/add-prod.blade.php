@include('layouts.main')

<div class="container">
    <form action="{{route('save')}}" method="post">
        @csrf
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Produk</label>
              <input type="text" class="form-control" id="nama_produk" name="nama_produk">
            </div>
            <div class="mb-3">
              <label for="deskripsi" class="form-label">Deskripsi</label>
              <input type="text" class="form-control" id="deskripsi" name="deskripsi">
            </div>
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori">
              </div>
            <div class="mb-3">
              <label for="harga" class="form-label">Harga</label>
              <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-3">
                <label for="gambar" class="form-label">Link Gambar</label>
                <input type="link" class="form-control" id="img" name="img">
              </div>
            <div class="mb-3">
              <label for="stok" class="form-label">Stok</label>
              <input type="number" class="form-control" id="stok" name="stok">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>