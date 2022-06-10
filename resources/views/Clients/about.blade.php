@extends('LayoutMaster.template')
@section('content')
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
		<li class="active editContent">About</li>
	</ul>
	</div>
	</div>
	</section>
	<!-- breadcrumbs //-->
	<section class="w3l-content-with-photo-4"  id="about">
		<div class="content-with-photo4-block editContent">
			<div class="container">
				<div class="cwp4-two row">
				<div class="cwp4-image col-lg-6">
					<img src="assets/images/13.jpg" alt="product" class="img-responsive about-me">
				</div>
					<div class="cwp4-text col-lg-6 ">
						<div class="posivtion-grid">
						<h3 class="editContent"> Personal
							Care For<span class="color-text"> Your Pets</span></h3>
						<p class="para editContent">Mollitia placeat modi explicabo voluptatum 
							 adipisci Quisquam exercit tionem praesentium suscipit.unde Dicta in uaerat harum Mollitia placeat modi explicabo voluptatum 
							 adipisci Quisquam.
						</p>
						<ul>
							<li><span class="fa fa-circle mr-2" aria-hidden="true"></span><a href="#page">Tionem praesentium suscipit.</a></li>
							<li><span class="fa fa-circle mr-2" aria-hidden="true"></span><a href="#page">Mollitia placeat modi explicabo .</a></li>
							<li><span class="fa fa-circle mr-2" aria-hidden="true"></span><a href="#page">Mollitia placeat modi explicabo .</a></li>
							<li><span class="fa fa-circle mr-2" aria-hidden="true"></span><a href="#page">Unde Dicta in uaerat harum.</a></li>
					
							<li><span class="fa fa-circle mr-2" aria-hidden="true"></span><a href="#page">Unde Dicta in uaerat harum.</a></li>
						</ul>
				   
				</div>
				<a href="about.html" class="action-button btn">Read more</a>
			</div>
			</div>
		</div>
	</div>
	</section>
	<section class="w3l-about ">
		  <div class="skills-bars editContent text-center">
				<div class="container">
				  <img src="assets/images/3.jpg" alt="product" class="img-responsive about-me">
	
	
				  <h3>Pet Grooming & Care Center</h3>
	
				  <p class="para mt-md-4 mt-3">Consectetur adipisicing elit Lorem ipsum dolor, sit amet. Adipisci voluptate dolore quis, deleniti error temporibus qui quaerat ea, tempora autem delectus eligendi doloremque cumque! Aperiam eveniet eos ad dolorem fugit Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad, ullam alias enim dolorem minus illum sit rem! Minus alias, sint nihil quas culpa eveniet. Veniam, quae mollitia! Vel, voluptatibus magnam.</p>
				</div>
		  </div>
	</section>
	<section class="w3l-recent-work">
		<div class="jst-two-col">
			<div class="container">
				<div class="content-photo-1 row">
					<div class="content-photo-left_sur col-lg-6">
						<h3>We’ll Take Care of your <span class="color-text"> Pets Friends</span></h3>
						<span class="price">$ 240/month</span>
						<p class="para mt-3">Donec vestibulum metus ut eros condimentum, sit amet maximus felis sed et porttitor. Nullam risus libero,
							euismod non nisi a, lacinia facilisis odio. Integer eleifend, leo vitae gravida iaculis, leo dolor
							venenatis libero, nec faucibus risus mi quis dolor. </p>
							<a href="about.html" class="action-button btn mt-md-4 mt-3">Read more</a>
					</div>
					<div class="content-photo-right_sur col-lg-6">
						<div class="csslider infinity" id="slider1">
								<input type="radio" name="slides" checked="checked" id="slides_1">
								<input type="radio" name="slides" id="slides_2">
								<input type="radio" name="slides" id="slides_3">
								<ul class="banner_slide_bg">
									<li>
										<img class="img" src="assets/images/5.jpg" alt="">
									</li>
									<li>
										<img class="img" src="assets/images/9.jpg" alt="">
									</li>
									<li>
										<img class="img" src="assets/images/8.jpg" alt="">
									</li>
								
								</ul>
								<div class="arrows">
									<label for="slides_1"></label>
									<label for="slides_2"></label>
									<label for="slides_3"></label>
								</div>
								<div class="navigation">
									<div>
										<label for="slides_1"></label>
										<label for="slides_2"></label>
										<label for="slides_3"></label>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="w3l-team-main-6" id="team">
		<!-- /team-grids -->
		<div class="team-content-page editContent">
			<div class="container">
				<div class="main-contteam-28">
					<div class="team-main-19 ">
						<div class="column-19">
							<a href="#page"><img class="img-responsive" src="assets/images/t4.jpg" alt=" "></a>
						</div>
						<div class="right-team-9">
							<h6><a href="F" class="title-team-28">Alexander</a></h6>
							<p class="sm-text-28">Pet Sitter</p>
							<p class="para mt-3">Illo voluptas eum molestias quae sapiente porro velit veritatis modi.</p>
							<ul class="team-details">
								<li><a href="tel:+7-800-999-800"><span class="fa fa-mobile"></span> +(21)-255-999-8886</a></li>
								<li><a href="mailto:petsitter1@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span> petsitter3@mail.com</a></li>
							</ul>
							<div class="social-teams">
								<a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
								<a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
								<a href="#team" class="pinterest"><span class="fa fa-pinterest"></span></a>
							</div>
						</div>
					</div>
					<div class="team-main-19">
						<div class="column-19">
							<a href="#page"><img class="img-responsive" src="assets/images/t3.jpg" alt=" "></a>
						</div>
						<div class="right-team-9">
							<h6><a href="#page" class="title-team-28">Johnson</a></h6>
							<p class="sm-text-28">Pet Sitter</p>
							<p class="para mt-3">Illo voluptas eum molestias quae sapiente porro velit veritatis modi.</p>
							<ul class="team-details">
								<li><a href="tel:+7-800-999-800"><span class="fa fa-mobile"></span> +(21)-255-999-8885</a></li>
								<li><a href="mailto:petsitter1@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span> petsitter4@mail.com</a></li>
								</ul>
							<div class="social-teams">
								<a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
								<a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
								<a href="#team" class="pinterest"><span class="fa fa-pinterest"></span></a>
							</div>
						</div>
					</div>
					<div class="team-main-19">
						<div class="column-19">
							<a href="#page"><img class="img-responsive" src="assets/images/t2.jpg" alt=" "></a>
						</div>
						<div class="right-team-9">
							<h6><a href="#page" class="title-team-28">Watson</a></h6>
							<p class="sm-text-28">Pet Sitter</p>
							<p class="para mt-3">Illo voluptas eum molestias quae sapiente porro velit veritatis modi.</p>
							<ul class="team-details">
							<li><a href="tel:+7-800-999-800"><span class="fa fa-mobile"></span> +(21)-255-999-8883</a></li>
								<li><a href="mailto:petsitter1@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span> petsitter5@mail.com</a></li>
							</ul>
							<div class="social-teams">
								<a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
								<a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
								<a href="#team" class="pinterest"><span class="fa fa-pinterest"></span></a>
							</div>
						</div>
					</div>
					<div class="team-main-19">
						<div class="column-19">
							<a href="#page"><img class="img-responsive" src="assets/images/t1.jpg" alt=" "></a>
						</div>
						<div class="right-team-9">
							<h6><a href="#page" class="title-team-28">Paul laura</a></h6>
							<p class="sm-text-28">Pet Sitter</p>
							<p class="para mt-3">Illo voluptas eum molestias quae sapiente porro velit veritatis modi.</p>
							<ul class="team-details">
							<li><a href="tel:+7-800-999-800"><span class="fa fa-mobile"></span> +(21)-255-999-8882</a></li>
								<li><a href="mailto:petsitter1@mail.com" class="mail"><span class="fa fa-envelope-open-o"></span> petsitter6@mail.com</a></li>
							</ul>
							<div class="social-teams">
								<a href="#team" class="facebook"><span class="fa fa-facebook"></span></a>
								<a href="#team" class="twitter"><span class="fa fa-twitter"></span></a>
								<a href="#team" class="pinterest"><span class="fa fa-pinterest"></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /team-grids -->
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