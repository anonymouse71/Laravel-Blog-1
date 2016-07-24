<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use App\Category;

class PostController extends Controller
{
    //
    public function getBlogIndex()
    {
    	$posts = Post::orderBy('id', 'desc')->paginate(5);
    	return view('frontend.blog.index', compact('posts'));
    }

    public function getSinglePost($post_id, $end ="frontend")
    {
    	return view($end.'.blog.index');
    }

    public function getCreatePost()
    {
    	return view('admin.blog.create_post');
    }

    public function postCreatePost(Request $request)
    {
    	// validate the data
        $this->validate($request, array(
            'title'  => 'required|max:120|unique:posts',
            'author' => 'required|max:80',
            'body' =>'required'
        ));	

        $post = new Post();
        $post->title = $request->title;
        $post->author = $request->author;
        $post->body = $request->body;
        $post->save();

        return redirect()->route('admin.index')->with(['success' => 'Your post has created succesfully']);
    }

    private function shortenText($text, $words_count)
    {
        if(str_word_count($text,0)>$words_count){
            $words = str_word_count($text,2);
            $pos = array_keys($words);
            $text = substr($text, 0, $pos[$words_count]).'....';
        }
        return $text;
    }
}
