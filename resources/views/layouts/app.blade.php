<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>@yield("title")</title>
    </head>
    <body>
        <header>
            <div class="flex justify-between p-5 text-lg bg-gray-200 border-b-2 border-black font-semibold tracking-wider">
                <div>
                    <a href="{{ url('/home') }}"><img class="w-24" src="{{url('/img/logobmw.png')}}" alt="BMW Car"></a>
                </div>
                <div style="" class=" space-x-5">
                    <a href="{{ url('/home') }}" class="hover:border-b-2 border-black transition-all ease-in-out duration-75">Accueil</a>
                    <a href="{{ url('/posts') }}" class="hover:border-b-2 border-black transition-all ease-in-out duration-75">Articles</a>
                    <a href="" class="hover:border-b-2 border-black transition-all ease-in-out duration-75">Autres</a>
                </div>
                <div>
                    <a href="{{ url('/profil') }}" class="hover:border-b-2 border-black transition-all ease-in-out duration-75">Profil</a>
                </div>
            </div>
        </header>
		@yield('content')
    </body>
</html>