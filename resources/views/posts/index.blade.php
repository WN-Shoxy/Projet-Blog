@php
	use Illuminate\Support\Str;
@endphp

@extends("layouts.app")
@section("title", "Nos articles")
@section("content")
	
	<h1 class="text-3xl text-center font-bold">Nos Articles</h1>
	@foreach ($posts as $post)
		<div class="flex flex-row flex-wrap">
			<div class="flex flex-col ml-5 bg-gray-200 px-5 py-10 rounded-xl">
				<a href="{{ route('posts.show', $post) }}" title="Lire l'article" class=""><img class="w-44" src="{{ asset('storage/'.$post->picture) }}"></a>
				<a href="{{ route('posts.show', $post) }}" title="Lire l'article" class="font-semibold mt-5">{{ $post->title }}</a>
				<p class="w-44">{{ Str::limit($post->content, 25) }}</p>
				<a href="{{ route('posts.edit', $post) }}" title="Modifier l'article" >Modifier</a>
				<form method="POST" action="{{ route('posts.destroy', $post) }}" >
					<!-- CSRF token -->
					@csrf
					<!-- <input type="hidden" name="_method" value="DELETE"> -->
					@method("DELETE")
					<input type="submit" value="x Supprimer" >
				</form>
			</div>
		</div>
		<hr>
	@endforeach
@endsection