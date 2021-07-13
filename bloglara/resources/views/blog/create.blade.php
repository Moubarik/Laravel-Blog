@extends('layouts.app')
@if (Auth::check())
@section('content')
 <div class="w-4/5 m-auto text-left">
        <div class="py-15">
            <h1 class="text-6xl">
                Create Post
            </h1>
        </div>
</div>

@if ($errors->any())
<div class="w-4/5 m-auto">
    <ul>
        @foreach ($errors->all() as $error)
        <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
            {{$error}}
        </li>
            
        @endforeach
    </ul>

</div>
    
@endif
<div class="w-4/5 m-auto pt-20">
<form 
action="/blog"
method="POST"
enctype="multipart/form-data">
@csrf
<input 
type="text"
name="title"
placeholder="Title"
class="bg-transparent block border-b-2 w-full h-20 text-6xl Outline-none">
<textarea 
name="description" 
placeholder="Description"
 class="py-20 bg-transparent block border -b-2 w-full h-60 text-xl outline-none"></textarea>
<div class="bg-grey-lighter pt-15">
    <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border-blue cursor-pointer">
        <span class="mt-2 text-base leading-normal">
            Select a file
        </span>
            <input type="file"
                   name="image"
                   class="hidden">
    </label>

</div>
<button 
type="submit"
class="uppercase mt-15 bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
Submit Post
</button>
</form>
</div>
@endsection
@else
    @section('content')
    
    <div class="error grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font- blod text-shadow-md pb-14">
                    You have to sign up first 
                </h1>          
                <a href="/register" 
                class=" text-center bg-gray-50 text-gray-700 py-2 px-4
                 font-bold text-xl  uppercase">
               Sign up</a>
          </div>
        </div>
    </div>
      
    @endsection
@endif

