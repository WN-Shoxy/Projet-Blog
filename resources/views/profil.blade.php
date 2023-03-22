@extends("layouts.app")
@section("title", "Tous les articles")
@section("content")

    <h1 class="mb-10"></h1>
	<a href="{{ route('posts.create') }}" class="text-white uppercase py-4 px-3 ml-2 mr-96 bg-black tracking-widest rounded-xl mt-10" title="Créer un article" >Créer un nouveau post</a>
    
    <a href="{{ route('logout') }}" class="font-semibold ml-96 text-white uppercase py-1 px-2 bg-black tracking-widest rounded-xl border-2 border-transparent hover:bg-white hover:border-2 hover:border-black hover:text-black hover:transition-all hover:ease-in-out hover:duration-200" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Déconnexion
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
@endsection