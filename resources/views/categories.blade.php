<h1>Categorias</h1>

<ul>
	@foreach($categories as $category)
		<li>{{ $category->name }}</li>
			<ul>
				<li>{{ $category->description }}</li>
			</ul>
	@endforeach
</ul>