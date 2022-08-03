@extends('frontend.layouts.main')

@section('main-container')
<!-- header-end -->
 

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-lg-12">
                        <div class="slider_text text-center about_slide">
                            <h3>Hi there, I am Vasudha <br>
                                    Full Stack Developer</h3>
                        <a class="boxed-btn3-line" href="{{url('/work')}}">View Works</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->
<br>
    <div class="download_area1">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12">
                    <h2 class="contact-title">Write a review for me.</h2>
                    <form class="form-contact contact_form" id="reviewForm" novalidate="novalidate">
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                              
                                <textarea class="form-control w-100" name="review" id="review" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Write Your Review'" placeholder = 'Write Your Review'></textarea>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input class="form-control" name="country" id="country" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Country'" placeholder = 'Enter your Country'>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mt-3">
                          <button type="submit" class="button button-contactForm btn_4 boxed-btn">Save your review</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- service_area end  -->
<!-- testimonial_area  -->
<div class="testimonial_area ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title">
                            <h3>What Clients say</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testmonial_active owl-carousel">
                        @foreach($review as $r)
                            <div class="single_carousel">
                                <div class="row">
                                    <div class="col-xl-9 col-md-9">
                                        <div class="single_testmonial">
                                            <p>
                                            {{$r->review}}
                                            </p>
                                            <div class="testmonial_author">
                                                <div class="thumb">
                                                    <img src="{{url('frontend/img/case/test.png')}}" alt="" height=60 width=60>
                                                </div>
                                                <div class="author_name">
                                                    <h3> {{$r->name}}</h3>
                                                    <span> {{$r->country}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <br> <br><br>

    <!-- footer start -->

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
       $("#reviewForm").submit(function(e) {      
            e.preventDefault(); 
            $.ajaxSetup({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
              });
            $.ajax({
              url: "{{ url('write-review') }}",
              type: "POST",
              datatype: "json",
              data: $('#reviewForm').serialize(),
                success: function(data){
                  if(data.status){
                    alert(data.msg);
                  }    
                  else{
                    alert("Review Not Saved");
                  }
                }
            });
        });
    </script>

    @endsection