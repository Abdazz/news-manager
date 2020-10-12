<?php

namespace Abdazz\PostsManager;

use Abdazz\PostsManager\Mail\CategoryCreated;
use Abdazz\PostsManager\Models\Category;
use App\Http\Controllers\Controller;
use Abdazz\PostsManager\Requests\CategoryFormRequest;
use Abdazz\PostsManager\Requests\CategoryUpdateFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;

class CategoryController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->only("store", "create", "edit", "update", "destroy");
    }

    public function adminIndex()
    {
        $categories=Category::with("posts")->paginate(10);
        return view("posts-manager::admin.categories", compact('categories'));
    }

    public function index()
    {
        $categories=Category::with("posts")->paginate(10);
        return view("posts-manager::categories.index", compact('categories'));

    }


    public function create()
    {
        $category=new Category;
        return view("posts-manager::categories.create", compact("category"));
    }


    public function store(CategoryFormRequest $request)
    {

        Category::create([
            "name"=>$request->name
            ]);

        Flashy::message("Catégorie a bien été ajoutée avec succès");

        Mail::to(config("posts_manager.send_mail_to"))->send(new CategoryCreated($request->name));


        return redirect()->route("admin.categories");
    }


    public function show($category)
    {
        $category_id=$category;
        $category=Category::with("posts")->where("id", $category_id)->first();
        return view("posts-manager::categories.show", compact("category", "category_id"));

    }


    public function edit($category)
    {

        $category_id=$category;
        $category=Category::with("posts")->where("id", $category_id)->first();
        return view("posts-manager::categories.edit", compact("category"));
    }


    public function update(CategoryUpdateFormRequest $request, $category)
    {
        $category_id=$category;
        $category=Category::with("posts")->where("id", $category_id)->first();
        Category::where("id", $category->id)->update(["name"=>$request->name]);
        Flashy::message("Catégorie modifiée avec succès");
        return redirect()->route("admin.categories", $category->id);
    }


    public function destroy( $category)
    {

        Category::destroy($category);
        Flashy::error("La catégorie a bien été supprimée");
        return redirect()->route("admin.categories");
    }
}
