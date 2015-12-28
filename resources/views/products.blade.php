<h1>Produtos</h1>

<ul>
	@foreach($products as $product)
		<li>{{ $product->name }}</li>
			<ul>
				<li>{{ $product->description }}</li>
				<li>{{ $product->price }}</li>
			</ul>
	@endforeach
</ul>