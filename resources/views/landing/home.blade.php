@extends('landing.layouts.app')
@section('title', 'Hotel Hebat')

@section('content')

<section id="carousel">
    <div class="carousel w-full">
        <div id="slide1" class="carousel-item relative w-full">
            <img
            src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg"
            class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide4" class="btn btn-circle">❮</a>
                <a href="#slide2" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide2" class="carousel-item relative w-full">
            <img
            src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg"
            class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide1" class="btn btn-circle">❮</a>
                <a href="#slide3" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide3" class="carousel-item relative w-full">
            <img
            src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg"
            class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide2" class="btn btn-circle">❮</a>
                <a href="#slide4" class="btn btn-circle">❯</a>
            </div>
        </div>
        <div id="slide4" class="carousel-item relative w-full">
            <img
            src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.jpg"
            class="w-full" />
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between">
                <a href="#slide3" class="btn btn-circle">❮</a>
                <a href="#slide1" class="btn btn-circle">❯</a>
            </div>
        </div>
    </div>
</section>

<section id="about" class="p-5">
    <center class="mb-5">
        <h1 class="text-2xl font-bold">About Us</h1>
    </center>

    <div class="flex justify-center gap-4">
        <div class="container mx-auto py-5">
            <div class="flex flex-col md:flex-row bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="md:w-1/2">
                    <img src="https://images.unsplash.com/photo-1517840901100-8179e982acb7?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Image" class="object-cover w-full h-full">
                </div>
                <div class="md:w-1/2 p-8 flex flex-col justify-center">
                    <h1 class="text-4xl font-bold mb-4">Hotel</h1>
                    <p class="text-gray-700 mb-4">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi sint voluptatum iure placeat quos eius quibusdam laborum quod laudantium ullam? Qui vel dignissimos expedita delectus vero. Esse atque dolores nihil ad quo necessitatibus minus numquam et provident odio ipsam omnis quibusdam sed modi nobis nam, illum neque, ab fugiat reiciendis? Possimus aperiam obcaecati exercitationem mollitia aut! Deleniti voluptas voluptatem laboriosam labore vel error beatae architecto itaque quis omnis aut eum, aspernatur temporibus corporis est nobis odit earum quasi quas. Magnam pariatur nostrum possimus perspiciatis. Aperiam officiis maxime sint modi odio facilis, nisi molestiae? Quia neque aliquid veniam dolores vero labore.
                    </p>
                    <a href="#" class="self-start bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="rooms" class="p-5">
    <center class="mb-5">
        <h1 class="text-2xl font-bold">Our Rooms</h1>
    </center>
    <div class="flex justify-center gap-4">
        <div class="card bg-base-100 w-96 shadow-xl">
            <figure>
                <img
                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 w-96 shadow-xl">
            <figure>
                <img
                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 w-96 shadow-xl">
            <figure>
                <img
                src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.jpg"
                alt="Shoes" />
            </figure>
            <div class="card-body">
                <h2 class="card-title">Shoes!</h2>
                <p>If a dog chews shoes whose shoes does he choose?</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-primary">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
