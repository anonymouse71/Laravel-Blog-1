<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;

use App\Post;


class AdminController extends Controller
{
    public function getIndex()
    {
    	$posts = Post::orderBy('created_at', 'desc')->get();
    	return view('admin.index', compact('posts'));	
    }

    public function getLogin()
    {
    	return view('admin.login'); 
    }

    public function postLogin(Request $request)
    {
    	// validate the data
        $this->validate($request, array(
            'email'  => 'required|email',
            'password' => 'required'
        ));	

        if(!Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
        	return redirect()->back()->with(['fail'=>'Could not Log In']);
        } 

        return redirect()->route('admin.index');
    }

    public function getLogout()
    {
    	Auth::logout();
    	return redirect()->route('blog.index');
    }
}
