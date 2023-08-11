@extends("layouts.app")
@section("title", "Tous les articles")
@section("content")
    
    <style>
        .ecart-droite {
            margin-left: auto;
            margin-top: 2px;
            margin-right: 2px;
        }
    </style>
    <div class="mt-6 flex">
        <h1 class="mb-10"></h1>
	    <a href="{{ route('posts.create') }}" class="text-white uppercase py-4 px-3 ml-2 mr-96 bg-black tracking-widest rounded-xl" title="Créer un article" >Créer un nouveau post</a>
        <div class="ecart-droite">
            <a href="{{ route('logout') }}" class="font-semibold text-white uppercase py-1 px-2 bg-black tracking-widest rounded-xl border-2 border-transparent hover:bg-white hover:border-2 hover:border-black hover:text-black hover:transition-all hover:ease-in-out hover:duration-200" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Déconnexion
            </a>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>
    </div>
@endsection