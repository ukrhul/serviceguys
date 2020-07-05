@extends('layouts.layout')

@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);"
  data-aos="fade" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">

      <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">

        <div class="row justify-content-center mt-5">
          <div class="col-md-8 text-center">
            <h1>Your Services</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row m-4">
  @if (!$user_posts->isEmpty())
    @foreach ($user_posts as $post)
    
    <div class="col-3  block-13">
      <div class="d-block d-md-flex listing vertical">
      
        <a href="/service/{{$post->post_id}}" class="img d-block"
          style="background-image: url('{{ Storage::url('public/uploads/'.$post->post_id.'/'.$post->post_image_url) }}')"></a>
      
          <div class="lh-content">
      
            <span class="category">{{ $post->category->category_title}}</span>
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <h3><a href="/service/{{$post->post_id}}">{{$post->post_title}}</a></h3>
            <address>{{$post->post_description}}</address>
            <strong style="color: #30e3ca"><span>$</span>{{$post->post_min_price}}</strong>
            <p class="mb-0">
              @for ($i = 0; $i < $post->post_rating; $i++)
                <span class="icon-star text-warning"></span>
              @endfor
              
              @if (5-$post->post_rating > 0)
                @for($i= 1;$i<=5-$post->post_rating;$i++)
                  <span class="icon-star text-secondary"></span>
                @endfor
              @endif
              
              <span class="review">(3 Reviews)</span>
            </p>
            <div class="m-3">
              <div class="d-inline-block">
                <a class="btn btn-primary" href="/service/editpost/{{$post->post_id}}" role="button">Edit</a>
              </div>
              <div class="d-inline-block float-right">
                <form action="/service/deletepost/{{$post->post_id}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    @else
    <div class="col-12 text-center">
      <h1>You did not posted any Service Yet!</h1>
    </div>
    @endif
</div>




@endsection