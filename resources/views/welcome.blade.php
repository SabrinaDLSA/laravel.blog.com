@extends('templates.main')
@section('title')
{{'Mi Blog Laravel'}}
@endsection

@section('content')
@include('templates.partials.main-nav')
@if(isset($_GET['page']))
<div class="row-fluid secondHeader img-responsive">
  <div class="GoogleFonts" id="Secondtitle">
        Blog in Laravel
 </div>
  <div class="GoogleFonts" id='Secondsubtitle'>
        By Sabrina .....
  </div>
</div><hr style="margin-top:0; border: 5px solid" class="blue">
@else
<header>
  <div class="blur">
    <div class="GoogleFonts" id="title">
          Prueba de Mi Primer Blog En Laravel
    </div>
    <div class="GoogleFonts" id='subtitle'>
          Articles about, well lots of things.....
    </div>
    <div align='center'>
          <a onclick="$('#posts').animatescroll({scrollSpeed:2000,easing:'easeInOutBack'})" class="btn btn-web">Leer Blog</a>
    </div>
  </div>
</header>
@endif
<section id='posts'>
      <div class='row-fluid'>
          <div class="container">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                  @foreach($posts as $p)
                      <h3 class='text-center'>{{$p->title}}</h3>
                      <div align='center';><img src="{{$p->photo}}" title="{{$p->title}}" class="img-responsive img-thumbnail"></div>

                      <div align='right'>
                        <h5 class="text-info">Temas relacionados con el Artículo</h5>
                            <?php
                                $tags = explode(',', $p->tags);
                            ?>
                            @foreach($tags as $t)
                            <a href="tag/{{$t}}" alt="labels"><label class="label label-primary">{{$t}}</label></a>
                            @endforeach
                      </div>
                      <div class='text-justify Nunito'><p class='text-justify Nunito'>{!! substr( $p->content , 0, 250). '...' !!}</p>
                    </div>  <div align='center'><a href="articles/{{$p->slug}}" class="btn btn-info">Leer más....</a></div>
                  @endforeach
                  <div align="center">
                    {!! $posts->render() !!}
                  </div>
          </div>
          <div class="col-md-2"></div>

    </div>
  </div>
  <br>
</section>
@include('templates.partials.footer')
@stop
