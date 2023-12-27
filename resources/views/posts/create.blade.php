<x-layouts.app title='Crear Post'>

<h1>Crear Nuevo Post</h1>

<form action="{{ route('posts.store')}}" method="post">
	@csrf
	<label for="">
		Titulo
		<input type="text" name="titulo"><br />
		@error('titulo')
			<small style="color:red">{{ $message }}</small>
		@enderror
	</label><br />
	<label for="">
		Body
		<input type="text" name="body">
	</label>	
	<input type="submit" value="Aceptar">
</form>


<a href="{{route('posts.index')}}">Regresar</a>
</x-layouts.app>
