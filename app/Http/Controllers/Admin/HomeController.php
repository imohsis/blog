<?php

namespace App\Http\Controllers\Admin;


use App\Model\User\Category;
use App\Model\User\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

   
  public function __construct()
  {
    

   $this->middleware('auth:admin');


  }




    public function index()
    {
    	return view('admin/home');
 
    }






}

