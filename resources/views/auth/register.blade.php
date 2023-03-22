<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body class=" bg-gray-200">
        <div class="m-5">
            <a href="{{ url('/') }}" class=" absolute font-semibold mr-3 text-black uppercase bg-white tracking-widest rounded border-2 border-black hover:bg-black hover:border-2 hover:border-transparent hover:text-white hover:transition-all hover:ease-in-out hover:duration-200 py-2 px-4">
                Retour
            </a>
        </div>
        <div class="w-4/12 mx-auto mt-4 p-10 bg-white rounded-xl">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="flex justify-center">
                    <img class="w-32" src="{{url('/img/logobmw.png')}}" alt="BMW Car">
                </div>
                <div class="">
                    <label for="name" class="block text-black text-sm font-bold mb-1 mt-1">{{ __('Pseudo') }}</label>

                    <div class="">
                        <input id="name" type="text" class="shadow appearance-none border-2 border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-red-500 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="text-xs m-0 text-red-500">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <label for="email" class="block text-black text-sm font-bold mb-1 mt-1">{{ __('E-mail') }}</label>

                    <div class="">
                        <input id="email" type="email" class="shadow appearance-none border-2 border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-red-500 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                        @error('email')
                            <span class="text-xs m-0 text-red-500">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <label for="password" class="block text-black text-sm font-bold mb-1 mt-1">{{ __('Mot de passe') }}</label>

                    <div class="">
                        <input id="password" type="password" class="shadow appearance-none border-2 border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-red-500 @error('password') is-invalid @enderror" name="password" required>

                        @error('password')
                            <span class="text-xs m-0 text-red-500">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <label for="password-confirm" class="block text-black text-sm font-bold mb-1 mt-1">{{ __('Confirmer le mot de passe') }}</label>

                    <div class="">
                        <input id="password-confirm" type="password" class="shadow appearance-none border-2 border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline focus:border-red-500" name="password_confirmation" required>
                    </div>
                </div>

                <div class="flex justify-center">
                    <button type="submit" class="uppercase bg-black mt-3 rounded tracking-widest border-2 border-transparent hover:bg-white hover:border-2 hover:border-black hover:text-black hover:transition-all hover:ease-in-out hover:duration-200 text-white font-bold py-2 px-4">
                        {{ __('Inscription') }}
                    </button>
                </div>
            </form>
        </div>
    </body>
</html>