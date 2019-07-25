<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
      $posts = \App\Post::all();
      return view("welcome",compact('posts'));
    }
    public function contact()
    {
      return view('contact');
    }
    public function contactPost(Request $request)
    {
      $file = $request->file('attachment')->getClientOriginalName();
      if($request->hasFile('attachment'))
      {
        echo "filename ".$file;
        $request->file('attachment')->move('images',$file);
      }
       print_r($request['email']);
    }
}
