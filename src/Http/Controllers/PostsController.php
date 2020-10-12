<?php

namespace Abdazz\PostsManager\Http\Controllers;

use Abdazz\PostsManager\Mail\PostCreated;
use Abdazz\PostsManager\Models\Category;
use App\Http\Controllers\Controller;
use Abdazz\PostsManager\Models\Post;
use Abdazz\PostsManager\Requests\PostFormRequest;
use Abdazz\PostsManager\Requests\PostUpdateFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;

class PostsController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth')->only("store", "create", "edit", "update", "destroy");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function adminIndex()
    {
        $posts=Post::with("category")->paginate(10);
        return view("posts-manager::admin.index", compact('posts'));
    }

    public function index()
    {
        $posts=Post::with("category")->paginate(10);
        return view("posts-manager::posts.index", compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $post=new Post;
        $categories=Category::all();
        return view("posts-manager::posts.create", compact("post", "categories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
        if(!empty($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('vendor/posts-manager/images'), $imageName);
        }
        else
        $imageName=getImageName();


        $new_post=Post::create([
            "title"=>$request->title,
            "content"=>$request->content,
            "slug"=>$request->slug,
            "image"=>$imageName,
            "category_id"=>$request->category_id,
            ]);

        Mail::to(config("posts_manager.send_mail_to"))->send(new PostCreated($new_post->id, $new_post->title));

        Flashy::message("Le post a été ajouté avec succès");

        return redirect()->route("admin.index");
    }


    public function show( $post)
    {
        $post=Post::with("category")->where("id", $post)->first();
        return view("posts-manager::posts.show", compact("post"));
    }


    public function edit($post)
    {
        $post=Post::with("category")->where("id", $post)->first();
        $categories=Category::all();
        return view("posts-manager::posts.edit", compact("post", "categories"));
    }


    public function update(PostUpdateFormRequest $request, $post)
    {
        $post=Post::with("category")->where("id", $post)->first();

        if(!empty($request->image)){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
        }
        else
        $imageName=$post->image;

        Post::where("id", $post->id)->update([
            "title"=>$request->title,
            "content"=>$request->content,
            "slug"=>$request->slug,
            "category_id"=>$request->category_id,
            "image"=>$imageName,
        ]);
        Flashy::message("Post modifié avec succès");
        return redirect()->route("admin.index", $post->id);

    }


    public function destroy( $post)
    {
        Post::destroy($post);
        Flashy::error("Post #".$post." supprimé avec succès");
        return redirect()->route("admin.index");
    }
}
