@extends("layouts.app")
@section("title", "Accueil")
@section("content")
    <div class="h-full flex justify-center items-center mt-10">
        <div>
            <img class="w-96" src="{{url('/img/voiture.jpg')}}" alt="">
        </div>
        <div>
            <p class="w-96 ml-5 -mt-6 mb-5">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam iure illum consequuntur quo quae inventore, et deserunt quod. Possimus, provident? Odio corrupti voluptate quod itaque doloremque saepe, sequi obcaecati maxime.
                Eligendi eum quisquam accusamus nulla nostrum, est tempora quam natus voluptates, neque sit minima ad facere eos voluptatum, enim nihil saepe quas rerum animi. Delectus voluptas quod soluta aut omnis.
            </p>
            <a href="{{ route('posts.index') }}" class="font-semibold ml-5 text-white uppercase py-2 px-4 bg-black tracking-widest rounded-xl border-2 border-transparent hover:bg-white hover:border-2 hover:border-black hover:text-black hover:transition-all hover:ease-in-out hover:duration-200">Voir tous les articles</a>
        </div>
    </div>
@endsection