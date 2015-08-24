<?php

namespace Curso\Http\Controllers;
use Curso\Post;
use Illuminate\Http\Request;

use Curso\Http\Requests;
use Curso\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct(){

      $this->middleware('auth');
    }

    public function admin()
    {
      $posts = \DB::table('posts')->orderBy('id','desc')->paginate('10');
     return view('desktop')->with('posts', $posts);
    }
    public function logout(){
      \Auth::logout();

      return \Redirect::route('home');
    }
    public function edit($id){
        $post = Post::find($id);
        return view('edit')->with('post', $post);
    }

    public function delete($id){
        $post = Post::find($id)->delete();
        return \Redirect::route('adminsite');
    }

    public function refresh($id){
        $p = Post::find($id);
        $p->title = \Input::get('title');
        $p->content = \Input::get('content');
        $p->tags = \Input::get('tags');
        $p->photo = \Input::get('photo');
        $p->resluggify();
        $p->save();
        return \Redirect::route('adminsite');
    }
    public function ModifyUser(){
        $p = \Auth::user()->id;
        $p = \DB::table('users')->where('id', $p);
        $p->name = \Input::get('name');
        $p->email = \Input::get('email');
        $p->username = \Input::get('username');
        $p->save();
        return \Redirect::route('adminsite');
    }
    public function NewPost()
    {
      return view('NewPost');
    }
    public function profile()
    {
      return view('profile');
    }

    public function prof()
    {
      $user = \DB::table('users')->orderBy('id','desc')->get();
      return view('profile')->with('user', $user);
    }
    public function CreatePost(){
        $p = new Post;
        $p->title = \Input::get('title');
        $p->content = \Input::get('content');
        $p->tags = \Input::get('tags');
        $p->photo = \Input::get('photo');
        $p->save();

        $alert = \Session::flash('alert', 'Your new post was created successfully');
        return \Redirect::route('adminsite')->with('alert', $alert);
    }
}
