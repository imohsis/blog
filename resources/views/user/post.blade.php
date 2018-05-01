@extends('user/app')

@section('bg-img',  asset('user/img/post-bg.jpg')   )


@section('title', $post->title)

@section('subheading', $post->subtitle)

@section('main-content')

 <article>
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-10 mx-auto">
            {{-- <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1"> --}}
              <small>Posted  {{ $post->created_at->diffForHumans() }}</small>
             {!! htmlspecialchars_decode($post->body) !!}
          </div>
        </div>
      </div>
    </article>

    <hr>

@endsection