@extends('LayoutMaster.template')
@section('content')
<!-- //bootstrap working-->
<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
  </script>
  <!-- disable body scroll which navbar is in active -->
  
  <!-- breadcrumbs -->
  <section class="w3l-inner-banner-main">
      <div class="about-inner editContent">
  <div class="container">   
  <ul class="breadcrumbs-custom-path">
      <li class="right-side propClone"><a href="index.html" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a> <p></li>
      <li class="active editContent">Contact</li>
  </ul>
  </div>
  </div>
  </section>
  <!-- breadcrumbs //-->
  <section class="w3l-contact-info-main" id="contact">
      <div class="contact-sec	editContent">
          <div class="container">
              <div class="main-titles-head text-center">
                  <h3 class="header-name editContent">
                      Get in Touch
                  </h3>
                  <p class="tiltle-para editContent editContent">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
              </div>
              <div class="d-grid contact-view">
                  <div class="cont-details">
                     <div class="cont-top">
                          <div class="cont-left text-center">
                              <span class="fa fa-phone text-primary"></span>
                          </div>
                          <div class="cont-right">
                              <p class="para"><a href="tel:+44 99 555 42">+123 45 67 89</a></p>
                          </div>
                      </div>
                      <div class="cont-top margin-up">
                          <div class="cont-left text-center">
                              <span class="fa fa-envelope-o text-primary"></span>
                          </div>
                          <div class="cont-right">
                              <p class="para"><a href="mailto:example@mail.com" class="mail">example@mail.com</a></p>
                          </div>
                      </div>
                      <div class="cont-top margin-up">
                          <div class="cont-left text-center">
                              <span class="fa fa-map-marker text-primary"></span>
                          </div>
                          <div class="cont-right">
                              <p class="para"> California, #32841 block,
                                 <br> #221DRS 75 West Rock,<br> Maple Building, UK.</p>
                          </div>
                      </div>
                  </div>
                  <div class="map-iframe ">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" width="100%" height="300" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
                  </div>
   
      </div>
      <div class="map-content-9 mt-5">
          <form action="https://sendmail.w3layouts.com/submitForm" method="post">
              <div class="twice-two">
                  <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Name" required="">
                  <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email" required="">
              </div>
              <div class="twice">
                  <input type="text" class="form-control" name="w3lSubject" id="w3lSubject" placeholder="Subject" required="">
              </div>
              <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message" required=""></textarea>
  
              <div class="text-right">
              <button type="submit" class="btn btn-contact">Send Message</button>
          </div>
          </form>
      </div>
      </div></div>
  </section>
  
  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-eject"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };
  
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }
  
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
  </body>
  
  </html>
@endsection