@extends('layouts.app')
@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font- blod text-shadow-md pb-14">
                    Do You want to become a devlopper
                </h1>          
                <a href="/blog" 
                class=" text-center bg-gray-50 text-gray-700 py-2 px-4
                 font-bold text-xl  uppercase">
                Read More</a>
          </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15  border-b border-gray-200">
<div>
    <img src="https://cdn.pixabay.com/photo/2016/11/19/14/00/code-1839406_1280.jpg" width="700" alt="">
</div>
<div class="m-auto sm:m-auto text-left w-4/5 block">
<h2 class="text-3xl font-extrabold text-gray-600">
    Struggling to be a better web devlopper?
</h2>
<p class="py-8 text-gray-500 text-l">
iste adipisci aspernatur sed cum inventore blanditiis, excepturi quisquam fugit laborum! Voluptatem!</p>
<p class="font-extrabold text-gray-600 text-s pb-9">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum expedita, et error voluptas quo ullam tenetur officia id aspernatur beatae maiores repellendus nulla quas facilis, voluptates placeat perspiciatis rerum quasi?
</p>
<a href="/blog"
class="uppercase bg-blue-500 Text-gray-100 text-S font-extrabold py-3 p-8 rounded-3xl">
    find More
</a>
</div>
    </div>
    <div class="text-center p-15 bg-black text-white">
<h2 class="text-2xl pb-5 text-l">
I'm an expert in...
</h2>
<span class="font-extrabord block text-4xl py-1"> 
    UX Design
</span>
<span class="font-extrabord block text-4xl py-1"> 
    Project Management
</span>
<span class="font-extrabord block text-4xl py-1"> 
    Digital sStrategy
</span>
<span class="font-extrabord block text-4xl py-1"> 
    Backend Development
</span>
    </div>
    <div class="text-center py-15">
            <span class="uppercase text-s text-gray-400">
                blog
            </span>
            <h2 class="text-4xl font-bold py-10">
                Recent Posts
            </h2>
            <p class="m-auto w-4/5 text-gray-500">
                consequatur dolor hic sit repudiandae reiciendis rem cumque, mollitia ut fugiat tempora voluptate.
            </p>
    </div>
    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
            <div class="flex bg-yellow-700 text-gray-100 pt-10">
                    <div class="m-auto pt-4 bp-16 sm:m-auto w-4/5 block">
                            <span class="uppercase text-xs ">
                                PHP
                            </span>
                            <h3 class="text-xl font-bold py-10">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum eum aliquid corporis nobis sint, quasi fuga dolores modi, fugit accusamus adipisci perspiciatis culpa expedita vel! Eveniet, in? Atque, optio labore.
                            </h3>
                            <a href=""
                            class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                            Find out more

                            </a>
                    </div>
            </div>
            <div>
                <img src="https://cdn.pixabay.com/photo/2015/09/05/20/02/coding-924920_1280.jpg" width="700" alt="">
            </div>
    </div>
@endsection