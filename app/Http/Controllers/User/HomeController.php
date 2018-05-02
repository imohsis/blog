<?php

namespace App\Http\Controllers\User;

use App\Model\user\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
    	//$posts = Post::where('status', 0)->get();
    	$posts = Post::where('status',1)->paginate(1);
    	return view('user/blog', compact('posts'));
    }
}
