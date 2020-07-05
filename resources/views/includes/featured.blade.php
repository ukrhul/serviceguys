<div class="row">
    <div class="col-12">
      <h2 class="h5 mb-4 text-black">Featured Services</h2>
    </div>
</div>
  
  <div class="row">
    
    <div class="col-12  block-13">
      <div class="owl-carousel nonloop-block-13">

        @foreach ($posts as $post)

        <div class="d-block d-md-flex listing vertical">
        <a href="/service/{{$post->post_id}}" class="img d-block" style="background-image: url('{{ Storage::url('public/uploads/'.$post->post_id.'/'.$post->post_image_url) }}')"></a>
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
          </div>
        </div>
        
        @endforeach

        <div class="d-block d-md-flex listing vertical">
          <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
          <div class="lh-content">
            <span class="category">Furniture</span>
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
            <address>Don St, Brooklyn, New York</address>
            <p class="mb-0">
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-secondary"></span>
              <span class="review">(3 Reviews)</span>
            </p>
          </div>
        </div>

        <div class="d-block d-md-flex listing vertical">
          <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_4.jpg')"></a>
          <div class="lh-content">
            <span class="category">Electronics</span>
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <h3><a href="listings-single.html">iPhone X gray</a></h3>
            <address>Don St, Brooklyn, New York</address>
            <p class="mb-0">
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-secondary"></span>
              <span class="review">(3 Reviews)</span>
            </p>
          </div>
        </div>

        <div class="d-block d-md-flex listing vertical">
          <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_1.jpg')"></a>
          <div class="lh-content">
            <span class="category">Cars &amp; Vehicles</span>
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <h3><a href="listings-single.html">Red Luxury Car</a></h3>
            <address>Don St, Brooklyn, New York</address>
            <p class="mb-0">
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-secondary"></span>
              <span class="review">(3 Reviews)</span>
            </p>
          </div>
        </div>

        <div class="d-block d-md-flex listing vertical">
          <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_2.jpg')"></a>
          <div class="lh-content">
            <span class="category">Real Estate</span>
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <h3><a href="listings-single.html">House with Swimming Pool</a></h3>
            <address>Don St, Brooklyn, New York</address>
            <p class="mb-0">
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-secondary"></span>
              <span class="review">(3 Reviews)</span>
            </p>
          </div>
        </div>

        <div class="d-block d-md-flex listing vertical">
          <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_3.jpg')"></a>
          <div class="lh-content">
            <span class="category">Furniture</span>
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <h3><a href="listings-single.html">Wooden Chair &amp; Table</a></h3>
            <address>Don St, Brooklyn, New York</address>
            <p class="mb-0">
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-secondary"></span>
              <span class="review">(3 Reviews)</span>
            </p>
          </div>
        </div>

        <div class="d-block d-md-flex listing vertical">
          <a href="listings-single.html" class="img d-block" style="background-image: url('images/img_4.jpg')"></a>
          <div class="lh-content">
            <span class="category">Electronics</span>
            <a href="#" class="bookmark"><span class="icon-heart"></span></a>
            <h3><a href="listings-single.html">iPhone X gray</a></h3>
            <address>Don St, Brooklyn, New York</address>
            <p class="mb-0">
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-warning"></span>
              <span class="icon-star text-secondary"></span>
              <span class="review">(3 Reviews)</span>
            </p>
          </div>
        </div>

      </div>
    </div>
    
  </div>