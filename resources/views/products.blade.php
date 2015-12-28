<h1>Produtos</h1>

<ul>
	@foreach($products as $product)
		<li><b>{{ $product->name }}</b></li>
			<ul>
				<li>{{ $product->description }}</li>
				<li>R$ {{ $product->price }}</li>
			</ul>
	@endforeach
</ul>