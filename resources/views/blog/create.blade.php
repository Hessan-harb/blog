@extends('layouts.app')
@section('content')


<div class="container m-auto text-center pt-15 pb-5"> 
    <h1 class="text-6xl font-bold"> Add New Post</h1>
</div>

<div class="container m-auto text-center pt-15 pb-5"> 
    <form action="/blog" method="post" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Title" 
            class="w-full h-20 text-6xl roudned-lg shadow-lg border-b p-15 mb-5">

        <textarea class="w-full h-60 text-l roudned-lg shadow-lg border-b p-15 mb-5" 
            name="description" placeholder="Description" >
        </textarea>

        <div class="py-15">
            <label class="bg-gray-400 hover:bg-gray-700 h-7 text-gray-700 hover:text-gray-200 transition duration-300
            p-5 rounded-lg font-bold uppercase ">
                <span>Select Image To Upload</span>
                <input type="file" name="image" class="hidden">
            </label>
        </div>

        <button type="submit" class="bg-green-700 hover:bg-gray-200 h-7 text-gray-400 transition duration-300
            p-5 pt-5 m-5 rounded-lg font-bold uppercase">
            Submit The Post
        </button>
    </form>
</div>


@endsection