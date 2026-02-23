<h1>Category: {{ $category }}</h1>
<ul>
@foreach($products as $product)
    <li>{{ $product }}</li>
@endforeach
</ul>
<a href="/">Kembali ke Home</a>