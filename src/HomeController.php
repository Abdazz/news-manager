<?php

namespace Abdazz\PostsManager;

use Abdazz\PostsManager\Models\Category;
use Abdazz\PostsManager\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminIndex()
    {
        $posts=Post::with("category")->paginate(10);
        return view("posts-manager::admin.index", compact('posts'));
    }

    public function showCategories()
    {
        $categories=Category::with("posts")->paginate(10);
        return view("posts-manager::admin.categories", compact('categories'));
    }
}
