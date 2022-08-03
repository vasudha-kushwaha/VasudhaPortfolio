@extends('frontend.layouts.main')

@section('main-container')
   <!-- header-end -->
<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3>My Works and Projects</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ bradcam_area  -->
    <!-- gallery_area start  -->
    <div class="gallery_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="section_title">
                                <hr color="white">
                                <h3>Development Works</h3>
                                <hr color="white">
                            </div>
                        </div>
                    </div>
<!-- development work -->
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="single_gallery">
            <div class="thumb">
                <img src="{{url('frontend/img/work/6.jpg')}}" alt="">
            </div>
            <div class="gallery_heading">
                <span>Web App</span>
                <a href="works_details.html"><h4></h4></a>
            </div>
        </div>
        <div class="single_gallery">
            <div class="thumb">
                <img src="{{url('frontend/img/work/7.jpg')}}" alt="">
            </div>
            <div class="gallery_heading">
                <span>Web App</span>
                <a href="works_details.html"><h4></h4></a>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="single_gallery">
            <div class="thumb">
                <img src="{{url('frontend/img/work/8.jpg')}}" alt="">
            </div>
            <div class="gallery_heading">
                <span>Web App</span>
                <a href="works_details.html"><h4></h4></a>
            </div>
        </div>
        <div class="single_gallery">
            <div class="thumb">
                <img src="{{url('frontend/img/work/9.jpg')}}"  alt="">
            </div>
            <div class="gallery_heading">
                <span>Web App</span>
                <a href="works_details.html"><h4></h4></a>
            </div>
        </div>
        
    </div>
</div>
<!-- development work -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12">
                            <div class="section_title">
                                <hr color="white">
                                <h3>Graphics Designing Works</h3>
                                <hr color="white">
                            </div>
                        </div>
                    </div>

<!-- Graphic work -->
<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="single_gallery">
            <div class="thumb">
                <img src="{{url('frontend/img/work/10.jpg')}}"  alt="">
            </div>
            <div class="gallery_heading">
                <span>Graphics Designing</span>
                <a href="works_details.html"><h4></h4></a>
            </div>
        </div>
        <div class="single_gallery">
            <div class="thumb">
                <img src="{{url('frontend/img/work/11.jpg')}}"  alt="">
            </div>
            <div class="gallery_heading">
                <span>Print Media</span>
                <a href="works_details.html"><h4></h4></a>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="single_gallery">
            <div class="thumb">
                <img src="{{url('frontend/img/work/12.jpg')}}"  alt="">
            </div>
            <div class="gallery_heading">
                <span>Print Media</span>
                <a href="works_details.html"><h4></h4></a>
            </div>
        </div>
        <div class="single_gallery">
            <div class="thumb">
                <img src="{{url('frontend/img/work/13.jpg')}}"  alt="">
            </div>
            <div class="gallery_heading">
                <span>Print Media</span>
                <a href="works_details.html"><h4></h4></a>
            </div>
        </div>
    </div>
</div>
<!-- Graphic work -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="more_works">
                                    <a class="boxed-btn3-line" href="https://github.com/vasudha-kushwaha">Git Hub </a><br>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="more_works">
                                    <a class="boxed-btn3-line" href="{{url('/task')}}">View More </a><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery_area end  -->    

    <!-- footer start -->
    @endsection