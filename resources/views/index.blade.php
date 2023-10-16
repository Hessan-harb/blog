@extends('layouts.app')

@section('content')
<!-- hero -->
<div class=" bg-gray-800 w-full h-64 text-gray-100 flex flex-col items-center justify-center rounded-2 pt-7 pb-3">
    <h1 class="animate-bounce text-gray-100 text-5xl uppercase font-bold pb-10 text-center">welcom to my blog</h1>
    <a class="animate-pulse bg-gray-100 text-gray-700 py-4 px-5 rounded-lg font-bold uppercase text-xl" href="/">Start Reading</a>
</div>

<div class="container sm:grid grid-cols-2 gap-20 mx-auto py-15">
    <div>
        <img class="sm:rounded-lg mt-5" src="https://picsum.photos/id/239/960/620" alt="">
    </div>

    <div class="mt-5 flex flex-col items-left justify-center m-10 sm:m-0">
        <h2 class="font-bold text-gray-700 text-4xl uppercase">How To Be Expert In 2023</h2>

        <p class="font-bold text-gray-600 text-xl pt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iste 
            molestiae vitae molestias deleniti soluta aspernatur amet, sapiente quisquam. Nesciunt.
        </p>
           
        <p class="py-4 text-gray-500 text-sm leading-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit obcaecati est nulla nobis aliquid molestiae 
                reprehenderit exercitationem quaerat voluptatibus magnam?
            
        </p>

            <a class="bg-gray-700 text-gray-100 py-4 px-5 font-bold uppercase text-l place-self-start rounded-2" href="/">Read More</a>
    </div>
</div>


<!-- blog categories -->
<div class="text-center p-15 bg-gray-700 text-gray-100 m-9 rounded-2">
    <h2  class="text-2xl pt-4">Blog Categories</h2>
    <div class="container mx-auto pt-10 sm:grid grid-cols-4 pb-3">
        <div class="font-bold text-2xl py-2">UX Design</div>
        <div class="font-bold text-2xl py-2">Programming</div>
        <div class="font-bold text-2xl py-2">Graphic Design</div>
        <div class="font-bold text-2xl py-2">Backend</div>
    </div>
</div>

<!-- recent post -->

<div class="container text-center py-15 mx-auto">
    <h2 class="font-bold text-5xl py-10">Recent Posts</h2>
    <p class="text-gray-400 leading-6 px-10">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis tempora aliquam autem,
         voluptas nostrum sit. Magnam sint harum laborum consectetur magni quam aliquid cupiditate
          repellendus molestiae eum, facere quia voluptatum beatae error adipisci maxime fugiat recusandae
           doloremque tempore, dolore eius ea velit
        , autem quaerat! Nesciunt aliquam perferendis est doloremque esse?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis
         aliquam ullam, eaque quod sed libero temporibus maxime tempora voluptas,
          cumque vitae nostrum quidem architecto, fuga repudiandae! Minima culpa 
          repellendus sapiente architecto a omnis, nam soluta recusandae iusto voluptatum, 
        repudiandae incidunt.
    </p>
</div>

<div class="sm:grid grid-cols-2 w-4/5 mx-atuo m-7">
    <div class="flex bg-yellow-700 text-gray-100 pt-10">
        <div class="block m-auto pt-4 pb-15 w-4/5">

        <ul class="md:flex text-xs gap-2">
            <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">PHP</a></li>
            <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">Programming</a></li>
            <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">JS</a></li>
            <li class="bg-yellow-100 text-yellow-700 p-2 rounded inline-block my-1 md:my-0 hover:bg-yellow-500 hover:text-yellow-100 transition duration-300"><a href="/">React</a></li>
        </ul>

            <h3 class="text-l py-10 leading-6"> 
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab quod amet unde 
                laudantium, veritatis eaque minus necessitatibus, sed praesentium neque, voluptatem 
                vero eos nihil explicabo culpa quos. Amet doloribus rerum possimus adipisci, ab optio 
                quos dolorem totam ut sit velit. Fugit, earum ducimus in adipisci ad atque provident facere 
                corrupti ipsam velit placeat distinctio odio aspernatur asperiores natus corporis? Aliquam cum 
                praesentium maiores a natus autem placeat dolore, inventore debitis illo tempore quo quam? Impedit
                 repellendus corporis eligendi recusandae accusantium, nostrum earum et quo rerum quos minus repudiandae
                 , dicta aperiam quia 
                animi tempora distinctio libero? Reiciendis cupiditate quo quod accusamus?
            </h3><a href="/" class="bg-transparent border border-2 text-gray-100 py-4 px-5 rounded-lg font-bold uppercase text-l inline-block m-5">Read More</a>
        </div>
    </div>

    <div class="flex ">
        <img class="object-cover" src="https://picsum.photos/id/247/960/620" alt="">
    </div>
</div>
<!-- 
    https://picsum.photos/id/239/960/620
     -->

@endsection