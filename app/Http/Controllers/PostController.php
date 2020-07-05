<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Storage;
use File;
use App\User;
use Auth;
use App\Category;

class PostController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('posts.createpost');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'post_title' => 'required|max:60',
            'post_description' => 'required',
            'post_min_price' => 'required|numeric',
            'post_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'post_category' => 'required',
            ]);


        $post = new Post();
        $post->user_id = Auth::id();
        $post->post_title = $request['post_title'];
        $post->post_description = $request['post_description'];
        $post->post_min_price = $request['post_min_price'];
        $post->post_number_of_images = 0;
        $post->post_image_url = '/';
        $post->category_id = $request['post_category'];
        $post->post_rating = 4;
        $post_image = $request['post_image'];
        $post->save(); 
        $post_id = $post->post_id;
        $imageName = $this->uploadImage($request,$post_id);
        $post->update(['post_image_url' => $imageName]);
        
        return redirect()->route('home')->with(['success' => 'Post Successfully Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $user_id = Auth::id();
        $user_posts = Post::get()->where('user_id',$user_id);
        return view('profile.yourservices')->with('user_posts',$user_posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editPost = Post::find($id);
        return view('posts.editpost')->with('editpost',$editPost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate($request, [
            'post_title' => 'required|max:60',
            'post_description' => 'required',
            'post_min_price' => 'required|numeric',
            'post_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'post_category' => 'required',
            ]);


        $post = Post::find($id);
        $post->user_id = Auth::id();
        $post->post_title = $request['post_title'];
        $post->post_description = $request['post_description'];
        $post->post_min_price = $request['post_min_price'];
        $post->post_number_of_images = 0;
        $post->post_image_url = '/';
        $post->category_id = $request['post_category'];
        $post->post_rating = 4;
        $post_image = $request['post_image'];
        $post->save(); 
        $post_id = $post->post_id;
        $imageName = $this->uploadImage($request,$post_id);
        $post->update(['post_image_url' => $imageName]);
        
        return redirect()->route('home')->with(['success' => 'Post Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home')->with(['success' => 'Post Successfully deleted']);

    }

    protected function uploadImage(Request $request,$post_id)
    {
        $temp = $request->file('post_image');
        $fileName = $temp->getClientOriginalName();
      //  $extension = $temp->getClientOriginalExtension();
        $newFileName = time().'-'.$fileName;
        $storageFilePath = $post_id;
        
        if (!Storage::disk('public')->exists($storageFilePath)) {
            Storage::disk('public')->makeDirectory($storageFilePath, $mode = 0777, true, true);
            Storage::disk('public')->put($newFileName,  File::get($temp));
            Storage::disk('public')->move($newFileName, $storageFilePath.'/'.$newFileName);

        }else{

            Storage::disk('public')->put($newFileName,  File::get($temp));
            Storage::disk('public')->move($newFileName,$storageFilePath.'/'.$newFileName);
        }

        return $newFileName;
        
    }

    public function getPost($id)
    {
        $singlePost = Post::find($id);
        return view('posts.singlepost')->with('singlepost',$singlePost);
    }

}
