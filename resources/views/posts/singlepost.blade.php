@extends('layouts.layout')

@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(/images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
          
          <div class="row justify-content-center mt-5">
            <div class="col-md-8 text-center">
            <h1>{{ $singlepost->post_title}}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          
          <div class="mb-4">
            <div class="slide-one-item home-slider owl-carousel">
              <div><img src="{{ Storage::url('public/uploads/'.$singlepost->post_id.'/'.$singlepost->post_image_url) }}" alt="Image" class="img-fluid fix-img-size" ></div>
              <div><img src="/images/img_2.jpg" alt="Image" class="img-fluid fix-img-size"></div>
              <div><img src="/images/img_3.jpg" alt="Image" class="img-fluid fix-img-size"></div>
              <div><img src="/images/img_4.jpg" alt="Image" class="img-fluid fix-img-size"></div>
            </div>
          </div>
          
          
        </div>
        <div class="col-lg-6 ml-auto">

          <h4 class="h5 mb-4 text-black text-center">Description</h4>
          <p>{{ $singlepost->post_description }}</p>

          <hr/>
          <div class="text-center" >
            <h4 class="h5 mb-4 text-black inline">Ratings</h4>
            @for ($i = 0; $i < $singlepost->post_rating; $i++)
              <span class="icon-star text-warning"></span>
            @endfor
            
            @if (5-$singlepost->post_rating > 0)
              @for($i= 1;$i<=5-$singlepost->post_rating;$i++)
                <span class="icon-star text-secondary"></span>
              @endfor
            @endif
            <strong>{{ $singlepost->post_rating }} Stars</strong>
          </div>
          
          <hr/>

          <div class="text-center">
            <h4 class="h5 mb-4 text-black inline">Reviews</h4>
          </div>
        </div>

      </div>
    </div>
  </div>

  @include('includes.trending');

@endsection