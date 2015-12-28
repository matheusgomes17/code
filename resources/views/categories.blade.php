<h1>Categorias</h1>

<ul>
	@foreach($categories as $category)
		<li><b>{{ $category->name }}</b></li>
			<ul>
				<li>{{ $category->description }}</li>
			</ul>
	@endforeach
</ul>