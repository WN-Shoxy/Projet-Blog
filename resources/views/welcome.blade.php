<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Bienvenue</title>
    </head>
    <body>
        <div class="flex flex-col justify-center items-center h-screen">
            @if (Route::has('login'))
            <img class="w-64" src="{{url('/img/logobmw.png')}}" alt="BMW Car">
                <div class="mt-16">
                    @auth
                        <a href="{{ url('/profil') }}" class="font-semibold mr-3 text-black uppercase py-4 px-8 bg-white tracking-widest rounded-xl border-2 border-black hover:bg-black hover:border-2 hover:border-transparent hover:text-white hover:transition-all hover:ease-in-out hover:duration-200">Accueil</a>
                        <a href="{{ route('logout') }}" class="font-semibold ml-3 text-white uppercase py-4 px-3 bg-black tracking-widest rounded-xl border-2 border-transparent hover:bg-white hover:border-2 hover:border-black hover:text-black hover:transition-all hover:ease-in-out hover:duration-200"" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Déconnexion
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold mr-3 text-black uppercase py-4 px-8 bg-white tracking-widest rounded-xl border-2 border-black hover:bg-black hover:border-2 hover:border-transparent hover:text-white hover:transition-all hover:ease-in-out hover:duration-200">Connexion</a>
                        
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="font-semibold ml-3 text-white uppercase py-4 px-7 bg-black tracking-widest rounded-xl border-2 border-transparent hover:bg-white hover:border-2 hover:border-black hover:text-black hover:transition-all hover:ease-in-out hover:duration-200">Inscription</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </body>
</html>
