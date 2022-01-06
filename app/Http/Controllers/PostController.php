<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\members;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function add(Request $request){
            
            $request->validate([
                'name' => 'required',
                'email'=>'required|string|email|max:255',
                'address'=>'required',
            ]);
            // return $request->input();
            $members = new members;

            $members->name= $request->name;
            $members->email= $request->email;
            $members->address= $request->address;
            $members->save();
            return  redirect('/');
    }
    public function index()
    {
        
        // $users = new members();
        $users = members::get();
        return view('welcome',compact('users'));
    }
}
