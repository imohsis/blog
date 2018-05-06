@extends('user/app')

{{-- @section('bg-img',  asset('user/img/post-bg.jpg')   ) --}}



@section('bg-img', Storage::disk('local')->url($post->image)  )

@section('head')

<link rel="stylesheet"  href="{{ asset('user/css/prism.css') }}">

@endsection

@section('title', $post->title)

@section('subheading', $post->subtitle)

@section('main-content')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=1883953631636428&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
 <article>
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-10 mx-auto">
            {{-- <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1"> --}}
              <small>Posted  {{ $post->created_at->diffForHumans() }}</small>
              @foreach($post->categories as $category)
              <small class="pull-right" style="margin-right:22px">

                 <a href="{{ route('category',$category->slug) }}">
                 {{ $category->name }}</a>

              </small>
              @endforeach
             {!! htmlspecialchars_decode($post->body) !!}

              <h3>Tags</h3>
              @foreach($post->tags as $tag)
             <a href="{{ route('tag',$tag->slug) }}"> <small class="pull-left" style="margin-right:22px; border-radius:5px; border:1px solid gray; padding:5px;">

                 {{ $tag->name }}

              </small></a>
              @endforeach
          </div>
          <div class="fb-comments" data-href="{{ Request::url() }}" data-numposts="5"></div>
        </div>
      </div>
    </article>

    <hr>

@endsection

@section('footer')
 <script src="{{ asset('user/js/prism.js') }}"></script>
@endsection