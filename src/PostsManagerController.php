<?php

namespace Abdazz\PostsManager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostsManagerController extends Controller
{
    public function add($a, $b){
        $result= $a + $b;
        return view("news-manager::add", compact("result"));
    }

    public function subtract($a, $b){
        echo $a - $b;
    }
}
