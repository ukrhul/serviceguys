<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar container py-0 bg-white" role="banner">

      <!-- <div class="container"> -->
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="{{ route('home') }}" class="text-black mb-0">Service<span class="text-primary">Guys</span>  </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="{{ route('home') }}">Home</a></li>
                <li><a href="listings.html">Ads</a></li>
                <li class="has-children">
                  <a href="about.html">About</a>
                  <ul class="dropdown">
                    <li><a href="#">The Company</a></li>
                    <li><a href="#">The Leadership</a></li>
                    <li><a href="#">Philosophy</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul>
                </li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>

                 <!-- Authentication Links -->
                 @guest

                    <li class="ml-xl-3 login">
                      <a href="{{ route('login') }}"><span class="border-left pl-xl-4">{{ __('Login') }}</span></a>
                    </li>
                    @if (Route::has('register'))
                      <li>
                        <a href="{{ route('register') }}">{{ __('Register') }}</a>
                      </li>
                    @endif
                  @else
                  <li class="has-children">
                    <a href="#"> {{ Auth::user()->user_name }}</a>
                    <ul class="dropdown">
                    <li><a href="{{ route('yourservices')}}" >Your Services</a></li>
                      <li><a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                         {{ __('Logout') }}</a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                        </li>
                    </ul>
                  </li>
                  @endguest
                <li><a href="{{ route('createpost') }}" class="cta"><span class="bg-primary text-white rounded">+ Post an Ad</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      <!-- </div> -->
      
    </header>
