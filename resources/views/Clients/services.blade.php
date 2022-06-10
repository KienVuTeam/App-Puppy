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
        <li class="active editContent">Services</li>
    </ul>
    </div>
    </div>
    </section>
    <!-- breadcrumbs //-->
    <section class="w3l-recent-work-hobbies" id="services"> 
        <div class="recent-work editContent">
            <div class="container">
                <div class="row about-about">
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                     <img src="assets/images/f5.jpg" alt="product" class="img-responsive about-me">
                        <div class="about-grids editContent">
                            <h5><a href="#page" class="editContent">Therapy Parlour</a></h5>
                            <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam corporis, dolores
                                quos, nobis culpa est praes entium ipsum </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                     <img src="assets/images/f4.jpg" alt="product" class="img-responsive about-me">
                        <div class="about-grids editContent">
                            <h5><a href="#page" class="editContent">Quality & Caring</a></h5>
                            <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam corporis, dolores
                                quos, nobis culpa est praes entium ipsum </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                     <img src="assets/images/f3.jpg" alt="product" class="img-responsive about-me">
                        <div class="about-grids editContent">
                            <h5><a href="#page" class="editContent">Ear Cleaning</a></h5>
                            <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam corporis, dolores
                                quos, nobis culpa est praes entium ipsum </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                     <img src="assets/images/f2.jpg" alt="product" class="img-responsive about-me">
                        <div class="about-grids editContent">
                            <h5><a href="#page" class="editContent">Brushing</a></h5>
                            <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam corporis, dolores
                                quos, nobis culpa est praes entium ipsum </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                     <img src="assets/images/f6.jpg" alt="product" class="img-responsive about-me">
                        <div class="about-grids editContent">
                            <h5><a href="#page" class="editContent">Clipping Fur</a></h5>
                            <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam corporis, dolores
                                quos, nobis culpa est praes entium ipsum </p>
                        </div>
                    </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 propClone about-line-top">
                        <div class="pet-grid-row">
                     <img src="assets/images/f1.jpg" alt="product" class="img-responsive about-me">
                        <div class="about-grids editContent">
                            <h5><a href="#page" class="editContent">Pet Insurance</a></h5>
                            <p class="para editContent">Sit amet consect etur adipi sicing elit. Rem quib usdam corporis, dolores
                                quos, nobis culpa est praes entium ipsum </p>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="w3l-services-two" id="services">
        <div class="service-single-page editContent">
            <div class="container">
                <div class=" service-treat">
    
    <div class="service-pet">
        <div class="image-grid">
            <img src="assets/images/f6.jpg" alt="product" class="img-responsive about-me">
        </div>
        <div class="pet-animals">
            <h4><a href="#page">Bath, Dry &
                Bursh</a></h4>
                <p class="para">Voluptas commodi quae accusantium amet dolorum quia architecto assumenda id facere dolorem ex fugiat.</p>
            </div>
    </div>
    <div class="service-pet">
        <div class="image-grid">
            <img src="assets/images/f1.jpg" alt="product" class="img-responsive about-me">
        </div>
        <div class="pet-animals">
            <h4><a href="#page">Pets Full
                Grooming</a></h4>
                <p class="para">Voluptas commodi quae accusantium amet dolorum quia architecto assumenda id facere dolorem ex fugiat.</p>
            </div>
    </div>
    <div class="service-pet">
        <div class="image-grid">
            <img src="assets/images/f9.jpg" alt="product" class="img-responsive about-me">
        </div>
        <div class="pet-animals">
            <h4><a href="#page">Styling Your
                Pets</a></h4>
                <p class="para">Voluptas commodi quae accusantium amet dolorum quia architecto assumenda id facere dolorem ex fugiat.</p>
            </div>
    </div>
    <div class="service-pet">
        <div class="image-grid">
            <img src="assets/images/f8.jpg" alt="product" class="img-responsive about-me">
        </div>
        <div class="pet-animals">
            <h4><a href="#page">Pets Cleaning
                & Plucking</a></h4>
                <p class="para">Voluptas commodi quae accusantium amet dolorum quia architecto assumenda id facere dolorem ex fugiat.</p>
            </div>
    </div>
    
            </div>
        </div>
        </div>
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