<h1>Toko Sepatu</h1>

@foreach ($products as $products)
<h2>{{ $product->name }}</h2>
<p>{{ $product->category }}</p>
<p>Rp {{ $product->price }}</p>
<p>Stok barang : {{ $product->stock }}</p>
@endforeach
<p>Daftar Produk</p>