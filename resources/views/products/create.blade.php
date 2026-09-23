<h1>Tambah Produk</h1>
<form action="/products" method="POST">
    @csrf
    <div>
        <label>Nama Produk</label>
        <input type="text" name="name">
    </div>
    <div>
        <label>Kategori</label>
        <input type="text" name="category">
    </div>
    <div>
        <label>Harga</label>
        <input type="number" name="price">
    </div>
    <div>
        <label>Stok</label>
        <input type="number" name="stock">
    </div>
    <button type="submit">Simpan</button>
</form>