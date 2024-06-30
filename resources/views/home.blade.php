@extends('layouts.app')
<nav>
    <div class="container  mx-auto font-medium  justify-between flex p-4 text--sec">
        <a href="">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
        </a>
        <ul class="flex justify-end space-x-4 font-bold gap-12">
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="">Product</a>
            </li>
            <li>
                <a href="">Blog</a>
            </li>
            <li>
                <a href="">Contact</a>
            </li>
        </ul>
    </div>
</nav>
<section class="mt-8">
    <div class="container mx-auto flex flex-col p-4 sm:flex-row sm:left-0 sm:right-0 overflow-hidden">

        <div class="items-center  px-16">
            <img class="w-[650px] h-[500px]" src="https://demo.gethugothemes.com/vex/site/images/watch.png" alt="">
            
        </div>
        <div class="mx-auto">
            <h1 class="text-5xl p-2 font-serif text-center sm:text-8xl sm:text-left font-bold">
                Believe in Technology, Make the change
            </h1>
            <p class="text-lg p-2 mt-8 text-center sm:text-left">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, modi fugit in veritatis labore perferendis. Minima hic at, nostrum nihil!
            </p>
            <div class="justify-center flex sm:justify-start">
                <button class="bg-orange-300 px-10 py-5 rounded-full shadow-sm text-white shadow-orange-300 mt-10 hover:bg-orange-200  ">
                    Browser All Products
                </button>
            </div>
        </div>
    </div>
    <div>
        <p class="text-5xl text-center mt-20 font-bold">
            Our Core Features
        </p>
    </div>
</section>
<section>
    <div class="container mx-auto col-span-12 bg-red-200">
        <div>
            <h3 class="">
                Smooth Touch 
            </h3>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem culpa corporis libero voluptatibus consequatur consectetur cumque aperiam pariatur quisquam, sed architecto impedit rem molestiae et nihil cum omnis, ut officiis!
            </p>
        </div>
    </div>
</section>
@section('content')