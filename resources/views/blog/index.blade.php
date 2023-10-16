@extends('layouts.app')
@section('content')




<div class="container m-auto text-center pt-5 pb-5">
    <h1 class="text-6xl font-bold">All Posts</h1>
</div>
@if(Auth::check())
<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-9 px-5 border-b border-gray-300">
    <a class="bg-blue-500 text-gray-100 py-4 px-5 font-bold uppercase text-l place-self-start 
            rounded-2 hover:bg-gray-300 text-gray-800" href="/blog/create">Add New Post</a>
</div>
@endif
@foreach($posts as $post)
<div class="container sm:grid grid-cols-2 gap-15 mx-auto py-9 px-5 border-b border-gray-300">
    <div class="flex px-9">
        <img class="object-conver rounded-5" src="/images/{{ $post->image_path }}" alt="">
    </div>

    <div>
        <h2 class="text-gray-700 font-bold text-4xl py-5 md:pt-0"> {{$post->title}} </h2>
        <span>
            By: <span class="text-gray-500 italic">{{$post->user->name}}</span> <br>
            On: <span class="text-gray-500 italic">{{date('d-m-Y',strtotime($post->updated_at))}}</span>
            <p class="text-l text-gray-700 py-8 leading-8">
                {{$post->description}}
            </p>
            <a class="bg-gray-700 text-gray-100 py-4 px-5 font-bold uppercase text-l place-self-start 
            rounded-2" href="/blog/{{$post->slog}}">Read More</a>

        </span>
    </div>
</div>


@endforeach




@endsection