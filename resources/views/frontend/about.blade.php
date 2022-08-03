@extends('frontend.layouts.main')

@section('main-container')
<!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
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

    <div class="download_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-10">
                    <div class="download_text">
                        <h3>I’m a Creative web developer based on India, I design and develop user friendly websites. </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="download_left">
                        <p>
                            My Name is Vasudha Kushwaha, I am from India and 
                            I am working as a programmer for more than 5 years. 
                            I am a highly motivated, organized, disciplined, and innovative person. 
                            </p>
                        <p>
                            I believe that customer satisfaction is more important. 
                            I am looking forward to work on your project.  </p>
                        <a href="frontend/LatestVasudhaResume.pdf" class="boxed-btn3-line">Download CV</a>
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

    <!-- footer start -->
    @endsection