@extends('layouts.layout')

@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
          
          <div class="row justify-content-center mt-5">
            <div class="col-md-8 text-center">
              <h1>{{ $editpost->post_title }}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 mb-5"  data-aos="fade">

          @include('includes.messages')

          <form method="POST" action="/service/updatepost/{{$editpost->post_id}}" enctype="multipart/form-data">
              @csrf

              <div class="form-group row">
                  <label for="post_title" class="col-md-4 col-form-label text-md-right">{{ __('Title:') }}</label>

                  <div class="col-md-6">
                      <input id="post_title" type="text" class="form-control @error('Title') is-invalid @enderror" name="post_title" value="{{ $editpost->post_title }}" required autofocus>

                      @error('post_title')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>
              </div>

              <div class="form-group row">
                <label for="post_description" class="col-md-4 col-form-label text-md-right">{{ __('Description:') }}</label>

                <div class="col-md-8">
                    <textarea id="post_description" type="text" class="form-control @error('Description') is-invalid @enderror" name="post_description" required autofocus >{{ $editpost->post_description }}
                    </textarea>
                    @error('post_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
           
            <div class="form-group row">
              <label for="post_category" class="col-md-4 col-form-label text-md-right">{{ __('Category:') }}</label>
                <div class="col-md-8">
                  
                  <select id="post_category" name="post_category" class="form-control custom-select">
                    @foreach ($categories as $category)
                      <option value="{{$category->category_id}}" {{ ($category->category_id == $editpost->category_id) ? "selected" : "" }} >{{$category->category_title}}</option>
                    @endforeach
                  </select>
                  
                  @error('post_category')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
            </div>
            </div>

            <div class="form-group row">
              <label for="post_min_price" class="col-md-4 col-form-label text-md-right">{{ __('Starting Price:') }}</label>
              <div class="col-md-3">

                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">$</div>
                  </div>
                  <input id="post_min_price" type="text" class="form-control @error('Price') is-invalid @enderror" name="post_min_price" value="{{ $editpost->post_min_price }}" required autofocus>
                </div>

                @error('post_min_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            </div>
            
            <div class="form-group row">

              <label for="post_image" class="col-md-4 col-form-label text-md-right">{{ __('Upload Pictures:') }}</label>

            </div>

            <div class="form-group row">
              <div class="col-sm-4 imgUp">
                <div class="imagePreview" style="background-image: url('{{ Storage::url('public/uploads/'.$editpost->post_id.'/'.$editpost->post_image_url) }}')"></div>
                <label class="btn btn-primary">
                   Upload<input type="file" id="post_image" name="post_image" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
                </label>
              </div>
              <i id="imgAdd" class="material-icons imgAdd">add_circle_outline</i>

                @error('post_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

              <div class="form-group row mb-0">
                  <div class="col-md-8 offset-md-4">
                      <button type="submit" class="btn btn-primary">
                          {{ __('Update') }}
                      </button>
                  </div>
              </div>
          </form>

        </div>
        
      </div>
    </div>
  </div>

@endsection