@extends('frontend.layouts.main')

@section('main-container')
<!-- header-end -->
    
             <!-- bradcam_area  -->
             <div class="bradcam_area bradcam_bg_1">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="bradcam_text text-center">
                                    <h3>contact</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ bradcam_area  -->
  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form id="contactForm" name="contactForm"  method="post" action="javascript:void(0)">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4 boxed-btn">Send Message </button>
              <!--  -->
            </div>
          </form>
          
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-github"></i></span>
            <div class="media-body">
              <h3>www.github.com/vasudha-kushwaha</h3>
              <p>you can visit my repositories on www.github.com</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-facebook"></i></span>
            <div class="media-body">
              <h3>www.facebook.com/vasudha.kush</h3>
              <p>connect on faebook</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-linkedin"></i></span>
            <div class="media-body">
              <h3>www.linkedin.com/in/vasudha-kushwaha-46499651/</h3>
              <p>conect on linkedin</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>vasudha.kush2022@gmail.com</h3>
              <p>Send your query anytime!</p>
            </div>
          </div>

          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-link"></i></span>
            <div class="media-body">
              <h3>www.fiverr.com/vasukush</h3>
              <p>connect on Fiverr</p>
            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-lg-12">
          <div class="form-group mt-3">
              <button type="button" class="button button-contactForm btn_4 boxed-btn" data-toggle="collapse" data-target="#demo">Book a free Appointment</button>
          </div>

          <div id="demo" class="collapse">
   <!-- Calendly inline widget begin -->
<div class="calendly-inline-widget" data-url="https://calendly.com/talk2vasudha?primary_color=a25301" style="min-width:320px;height:630px;"></div>
<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
<!-- Calendly inline widget end -->
          </div>

        </div>
      </div>


    </div>
  </section>
  <!-- ================ contact section end ================= -->

    <!-- footer start -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
       $("#contactForm").submit(function(e) {      
            e.preventDefault(); 
            $.ajaxSetup({
              headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
              });
            $.ajax({
              url: "{{ url('message') }}",
              type: "POST",
              datatype: "json",
              data: $('#contactForm').serialize(),
                success: function(data){
                  if(data.status){
                    alert(data.msg);
                  }    
                  else{
                    alert("Message Not Sent to Vasudha");
                  }
                }
            });
        });
    </script>
    @endsection
