<h1>Transaksi POS</h1>
<ul>
@foreach($products as $product)
    <li>{{ $product['name'] }} - Rp {{ $product['price'] }}</li>
@endforeach
</ul>
<a href="/">Kembali ke Home</a>