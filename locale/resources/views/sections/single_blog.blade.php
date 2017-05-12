@extends('layouts.master')


@section('content')


    <div id="blog-detailed-full-width-banner" class="blog-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-equal-page-direction">
                        <div class="image-description">

                            <h3> {{$post->post_title}}</h3>
                            <span> 20 Feb, 2015</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-detail-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-detail-post mt80">
                        <div class="post-image">
                            <img src="{{ asset('public/uploads/large/' . $post->media->guid) }}" class="img-responsive" alt="">
                        </div>
                        <div class="post-content">
                            <div class="single-post">
                              <p style="margin-bottom: 50px">{!!$post->post_content!!}</p>


                            </div>

                        </div>
                        <!--== Form Four ==-->

                        <!--// Form Four -->
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection
