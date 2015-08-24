@extends('templates.main')
@section('title'){{$post->title . 'Blog Laravel'}}@endsection
@section('content')
 <div class="row-fluid">
      <div class="container">
          <div class="col-md-2">

          </div>
          <div class="col-md-8" align="center">
              <img src="{{$post->photo}}" title="{{$post->title}}" class="img-responsive img-thumbnail">
              <h2><a style="float:left" href="{{route('home')}}" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Inicio</a>{{$post->title}}</h2>
              <hr>
              <div class="text-justify Nunito">
                {!! $post->content !!}
              </div>
              <hr>
              <div class="fb-comments" data-colorscheme='dark' data-href="http://laravel.blog.com/articles/{{$post->slug}}" data-width="100%" data-numposts="5"></div>
          </div>
          <div class="col-md-2">

          </div>
      </div>
 </div>
 <br>
 <div id="fb-root"></div>
{{--Facebook--}}
<script>
(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));
  </script>
@endsection
@section('footer')
@include('templates.partials.footer')
@stop
