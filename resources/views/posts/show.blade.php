@extends("layouts.app")
@section("title", $post->title)
@section("content")
	<style>
		.espace {
			float: right;
			margin-top: 2px;
			margin-right: 2px;
		}
	</style>
	<p><a href="{{ route('posts.index') }}" title="Retourner aux articles" class="espace bg-black py-2 px-2 text-white rounded">Retourner aux posts</a></p>
	<div class="ml-5">
		<h1><span class="font-bold text-lg">Titre : </span>{{ $post->title }}</h1>
		<img src="{{ asset('storage/'.$post->picture) }}" alt="Image de couverture" style="max-width: 250px;">
		<div class="mb-5"><span class="font-bold text-lg">Description : </span>{{ $post->content }}</div>
	</div>
    @forelse ($post->comments as $comment)
  
		<div class="card">
			<div class="card-body">
			<div class="font-medium text-base text-gray-800 ml-12">{{ $comment->user->name }}: {{ $comment->content}}
			</div>
		</div>
            @empty
                <div class="alert alert-info ml-12">Aucun commentaire pour cet article</div>
    @endforelse
	<div class="flex justify-center">
    	<form action="{{ route('comments.store', $post->id) }}" method="POST" class="flex flex-col rounded-lg p-4 wrap">
			@csrf
			<h2> Créer un commentaire</h2>
			<div class="form-group mb-3">
				<textarea placeholder= "Entrez un commentaire" class="border-2 border-black form-control @error('content') is-invalid @enderror h-20" name="content" id="content" rows="5"></textarea>
			</div>
			<button type="submit" class="text-xl text-white p-2 bg-black border-black border-2 rounded ">Commenter</button>
    	</form>
	</div> 
@endsection