@extends('layouts.app')
@section('content')


<div class="container m-auto text-center pt-15 pb-5"> 
    <h1 class="text-6xl font-bold"> {{ $post->title}}</h1>
    <div class="mt-2">
        By: <span class="text-gray-500 italic">{{$post->user->name}}</span> 
        On: <span class="text-gray-500 italic">{{date('d-m-Y',strtotime($post->updated_at))}}</span>
    </div>
</div>

<div class="container m-auto text-center pt-15 pb-5"> 

    <div class="flex px-9 h-96">
        <img class="object-conver rounded-5 w-full mb-5" src="/images/{{ $post->image_path }}" alt="">
    </div>

    <div>
        <p class="text-l text-gray-700 py-8 leading-8">
             {{$post->description}}
        </p>
    </div>
    @if(Auth::user() && Auth::user()->id ==$post->user_id)
    <a class="bg-green-700 text-green-100 py-4 px-5 mt-6 inline-block font-bold uppercase  text-l place-self-start 
            rounded-2 " href="/blog/{{$post->slog}}/edit">Edit Post
        
    </a>

    <form action="/blog/{{$post->slog}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="bg-gray-700 text-gray-100 py-4 px-5 mt-6 inline-block font-bold uppercase  text-l place-self-start 
            rounded-2 " >Delete Post
        
    </button>
    </form>
    @endif
</div>


@endsection