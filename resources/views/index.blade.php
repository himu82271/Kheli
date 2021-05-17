@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Game News </h1>
                <a href="/blog" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="{{ url('/images/Post1.png') }}" width="700" alt="Image" />
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Spider-Man Miles Morales will be getting an PC version
            </h2>
            <p class="py-8 text-gray-500 text-l">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione, rem minima fugiat,
                neque exercitationem esse at architecto accusantium, praesentium animi excepturi nobis
                quae nihil itaque! Possimus fugit dolorum voluptas fuga!
            </p>
            <a href="/blog" class="uppercase bg-blue-500 text-gray-100 text-l font-extrabold py-3 px-8 rounded-3xl"></a>
        </div>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>
        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius similique,
            facere perferendis quam earum recusandae quas unde ratione, aliquid voluptates
            impedit natus nam ipsam praesentium? Possimus voluptas nostrum qui nemo.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>
                <h3 class=" text-xl font-bold py-10">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam odio dolores
                    distinctio ducimus soluta at minima? Voluptate veniam, porro voluptatum perspiciatis,
                    eveniet earum aspernatur aliquam fuga aut magnam id dolor.
                </h3>
                <a href="" class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold
                        py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="{{ url('/images/Post1.png') }}" width="700" alt="Image" />
        </div>
    </div>


@endsection
