<x-layouts.app title='Blog'>
<h1>Blog</h1>

<a href="{{ route('posts.create')}}">Crear nuevo post</a>
@foreach($post as $port)
	<h2>
		<a href="/blog/{{$port->id}}">{{ $port->title }}</a>
	</h2>
@endforeach
</x-layouts.app>