@php
	use Illuminate\Support\Str;
@endphp

@extends("layouts.app")
@section("title", "Nos articles")
@section("content")
	
	<style>
		.contour {
			border: 2px solid black;
			width: fit-content;
			padding-left: 2px;
			padding-right: 2px;
		}
		.ecart {
			padding-top: 15px;
			padding-bottom: 15px;
		}
	</style>

	<h1 class="text-3xl text-center font-bold">Nos Articles</h1>
	<div class="flex">
	@foreach ($posts as $post)
		<div class="flex flex-row flex-wrap">
			<div class="flex flex-col ml-5 bg-gray-200 px-5 ecart rounded-xl">
				<a href="{{ route('posts.show', $post) }}" title="Lire l'article" class=""><img class="w-44" src="{{ asset('storage/'.$post->picture) }}"></a>
				<a href="{{ route('posts.show', $post) }}" title="Lire l'article" class="font-semibold mt-5 text-xl">{{ $post->title }}</a>
				<p class="w-44 text-sm">{{ Str::limit($post->content, 25) }}</p>
				<div class="flex mt-2">
					<a href="{{ route('posts.edit', $post) }}" title="Modifier l'article" class="contour">Modifier</a>
					<form method="POST" action="{{ route('posts.destroy', $post) }}" >
						<!-- CSRF token -->
						@csrf
						<!-- <input type="hidden" name="_method" value="DELETE"> -->
						@method("DELETE")
						<button type="submit" class="contour ml-1">Supprimer</button>
					</form>
				</div>
			</div>
		</div>
		<hr>
	@endforeach
	</div>
@endsection