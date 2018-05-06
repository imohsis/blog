<?php

namespace App\Http\Controllers\Admin;

use App\Model\user\Post;
use App\Model\user\Tag;
use App\Model\user\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{



  public function __construct()
  {
    

   $this->middleware('auth:admin');


  }
   
    public function index()
    {



        $posts = Post::all(); 
       return view('admin.post.show', compact('posts'));
    }

   
    public function create()
    {

          $tags = Tag::all();
          $categories = Category::all();
         return view('admin/post/post', compact('tags','categories'));
    }

   
    public function store(Request $request)
    {
       $this->validate($request, [

       'title'  => 'required',
       'subtitle'  => 'required',
       'slug'  => 'required',
       'body'  => 'required',
       'image'  => 'required',
 
       ]);

        if ($request->hasFile('image')) {
         


        $imageName = $request->image->store('public');
       }

       $post = new Post;
       $post->image = $imageName;
       $post->title = $request->title;
       $post->subtitle = $request->subtitle;
       $post->slug = $request->slug;
       $post->status = $request->status;
       $post->body = $request->body;
       $post->save();
       $post->tags()->sync($request->tags);
       $post->categories()->sync($request->categories);

     return redirect( route('post.index') );




    }

    
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
         $post = Post::with('tags', 'categories')->where('id', $id  )->first();
         $tags = Tag::all();
         $categories = Category::all();
         return view('admin/post/edit', compact('tags','categories','post'));

       // return view('admin.post.edit',compact('post'));
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request, [

       'title'  => 'required',
       'subtitle'  => 'required',
       'slug'  => 'required',
       'body'  => 'required',
       'image'  =>'required',
 
       ]);
     
       if ($request->hasFile('image')) {
       $imageName = $request->image->store('public');
        
       }






       $post =  Post::find($id);
       $post->image = $imageName;
       $post->title = $request->title;
       $post->subtitle = $request->subtitle;
       $post->slug = $request->slug;
       $post->status = $request->status;
       $post->body = $request->body;

       $post->save();
       $post->tags()->sync($request->tags);
       $post->categories()->sync($request->categories);

     return redirect( route('post.index') );
    }

  
    public function destroy($id)
    {
        Post::where('id',$id)->delete();
        return redirect()->back();
    }
}
