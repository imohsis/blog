<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\admin\admin;

class UserController extends Controller
{


   public function __construct()
   {
       $this->middleware('auth:admin');
   }


   
    public function index()
    {
        $users = admin::all();
        return view('admin.user.show', compact('users'));
    }

    
    public function create()
    {
        return view('admin.user.create');
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

  
   
    public function destroy($id)
    {
        //
    }
}
