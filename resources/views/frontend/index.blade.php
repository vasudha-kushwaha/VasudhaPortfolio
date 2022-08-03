@extends('frontend.layouts.main')

@section('main-container')
<!-- Header End -->
    <!-- slider_area_start --> 
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-lg-9">
                        <div class="slider_text">
                            <h3>Hi there, I am Vasudha <br>
                                <span>Full Stack Developer</span></h3>
                        <a class="boxed-btn3-line" href="{{url('/work')}}">View Works</a>
                        </div>
                    </div>
                    <div class="my_img d-none d-lg-block">
                        <img src="{{url('frontend/img/about/my_img1.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <div class="download_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <div class="download_text">
                        <h3>I’m a Creative web developer based on India, I design and develop user friendly websites. My skills are:-</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-6">

                <div class="progress_skills">
                        <div class="single_progress">
                            <div class="label d-flex justify-content-between">
                                <span>Bootstrap/Responsive Design</span>
                                <span>70%</span>
                            </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </div>
                        <div class="single_progress">
                                <div class="label d-flex justify-content-between">
                                        <span>UI/UX</span>
                                        <span>70%</span>
                                    </div>
                                <div class="progress">
                                        <div class="progress-bar " role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                        </div>
                        <div class="single_progress">
                                <div class="label d-flex justify-content-between">
                                        <span>Ajax</span>
                                        <span>45%</span>
                                    </div>
                                <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                        </div>
                    </div>


                    <div class="download_left">
                        <p>           </p>
                        <p></p>
                        <a href="{{url('frontend/LatestVasudhaResume.pdf')}}" class="boxed-btn3-line">Download CV</a>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6">
                    <div class="progress_skills">
                        <div class="single_progress">
                            <div class="label d-flex justify-content-between">
                                <span>PHP</span>
                                <span>70%</span>
                            </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                        </div>
                        <div class="single_progress">
                                <div class="label d-flex justify-content-between">
                                        <span>Laravel</span>
                                        <span>50%</span>
                                    </div>
                                <div class="progress">
                                        <div class="progress-bar " role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                        </div>
                        <div class="single_progress">
                                <div class="label d-flex justify-content-between">
                                        <span>WordPress</span>
                                        <span>45%</span>
                                    </div>
                                <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 45%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                      </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- service_area start  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50">
                        <h3>My Services</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service text-center">
                    
                        <h3>
                                Web Design
                        </h3>
                        <p>
                        If you're looking for a clean, business-oriented trendy design for your website, 
                        I am here to help you. I can design any kind of Web UI/UX, 
                        Landing page UI/UX, Dashboard UI/UX web page for you.
                        
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service text-center">
                        
                        <h3>
                                Web Development
                        </h3>
                        <p>
                        If you are facing any bugs or want to add/extend functionality to your web application or 
                        even want to develop a web application from scratch. 
                        Then discuss with me.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service text-center">
                        
                        <h3>
                                Graphics Designing
                        </h3>
                        <p>
                        I am a Professional and experienced Graphic Designer, Canva, Corel and Photoshop Expert. 
                        I am hardworking and reliable. 
                        Projects are completed in a timely manner with great proficiency.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="more_works">
                        <a class="boxed-btn3-line" href="{{url('/service')}}">More Services</a>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    <!-- service_area end  -->

    <!-- gallery_area start  -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50">
                        <h3>My Works</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6">
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="{{url('frontend/img/work/t1.jpg')}}" alt="">
                                </div>
                                <div class="gallery_heading">
                                    <span>Web Design</span>
                                    <a href="works_details.html"><h4></h4></a>
                                </div>
                            </div>
                            <div class="single_gallery"> 
                                <div class="thumb">
                                    <img src="{{url('frontend/img/work/t5.png')}}" alt="">
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
                                    <img src="{{url('frontend/img/work/t2.jpg')}}" alt="">
                                </div>
                                <div class="gallery_heading">
                                    <span>Web App</span>
                                    <a href="works_details.html"><h4></h4></a>
                                </div>
                            </div>
                            <div class="single_gallery">
                                <div class="thumb">
                                    <img src="{{url('frontend/img/work/t3.gif')}}" alt="">
                                </div>
                                <div class="gallery_heading">
                                    <span>Web Design</span>
                                    <a href="works_details.html"><h4></h4></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="more_works">
                                    <a class="boxed-btn3-line" href="{{url('/work')}}">More Works</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery_area end  -->

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
                                            <p>{{$r->review}}</p>
                                            <div class="testmonial_author">
                                                <div class="thumb">
                                                    <img src="{{url('frontend/img/case/test.png')}}" alt="" height=60 width=60>
                                                </div>
                                                <div class="author_name">
                                                    <h3>{{$r->name}}</h3>
                                                    <span>{{$r->country}}</span>
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

            <!-- Write a review -->
            <div class="container">
                <div class="row"> 
                    <div class="col-lg-12">
                        <div class="more_works">
                            <br><br>
                            <a class="boxed-btn3-line" href="{{url('/review')}}">Write a review</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /testimonial_area  -->
 <!-- footer start -->
 @endsection