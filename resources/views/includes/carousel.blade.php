<div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-12">
          
          
          <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
              <h1 class="" data-aos="fade-up">Largest Classifieds In The World</h1>
              <p data-aos="fade-up" data-aos-delay="100">You can buy, sell anything you want.</p>
            </div>
          </div>

          <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
            <form method="post">
              <div class="row align-items-center">
                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-4">
                  <input type="text" class="form-control rounded" placeholder="What are you looking for?">
                </div>
                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                  <div class="wrap-icon">
                    <span class="icon icon-room"></span>
                    <input type="text" class="form-control rounded" placeholder="Location">
                  </div>
                  
                </div>
                <div class="col-lg-12 mb-4 mb-xl-0 col-xl-3">
                  <div class="select-wrap">
                    <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                    
                    <select class="form-control rounded" name="" id="">
                        <option value="">All Categories</option>
                        @foreach ($categories as $category)
                          <option value="{{$category->category_id}}">{{$category->category_title}}</option>
                        @endforeach
                    
                    </select>
                  </div>
                </div>
                <div class="col-lg-12 col-xl-2 ml-auto text-right">
                  <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
                </div>
                
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>  