<?php

namespace Curso\Http\Controllers;
use Curso\Post;

/*use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;*/

class WelcomeController extends Controller{
/**
  *@return Response;
  *
  */
  public function index ()
  {
      $posts = \DB::table('posts')->orderBy('id', 'desc')->paginate(4);
        return view('welcome')
        ->with('posts', $posts);
  }

  public function article($slug){
    $post = Post::findBySlug($slug);
    return view('article')
    ->with('post', $post);
  }

  public function tags($tag){
    $posts = Post::where('tags', 'LIKE', '%'.$tag.'%')->orderBy('id', 'desc')->paginate(9);
    return view('tags')
    ->with('posts', $posts);
  }

  public function search($searcher){
    $posts = \DB::table('posts')->where('content', 'LIKE', '%'.$searcher.'%')->paginate(4);
    return view($post->title);
  }
}
