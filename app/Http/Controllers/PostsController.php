<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostsController extends Controller
{
   
    public function index(){
        //$post=Post::all();
        return view('blog.index')->with('posts',Post::get());
    }

    
    public function create(){
        return view('blog.create');
    }

    
    public function store(Request $request){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required ',
        ]);
         $slug=Str::slug( $request->title ,'-');
        $newimagename=uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'),$newimagename);

         
        Post::create([
            'title'=>$request->input('title'),
            'description'=>$request->input('description') ,
            'slog'=>$slug,
            'image_path'=>$newimagename,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog');
    }

    
    public function show(string $slug){
        return view('blog.show')->with('post',Post::where('slog',$slug)->first());
        
    }

    
    public function edit(string $slug){
        return view('blog.edit')->with('post',Post::where('slog',$slug)->first());
    }

    
    public function update(Request $request, string $slug){

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image'=>'required ',
        ]);

        $newimagename=uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'),$newimagename);

        Post::where('slog',$slug)-> update([
            'title'=>$request->input('title'),
            'description'=>$request->input('description') ,
            'image_path'=>$newimagename,
            'slog'=>$slug,
            'user_id'=>auth()->user()->id
        ]);
        return redirect('/blog/' .$slug)->with('message','Post Updated Done');
        
    }

    
    public function destroy(string $slug){
        Post::where('slog',$slug)->delete();
        return redirect('/blog');
        
    }
}
