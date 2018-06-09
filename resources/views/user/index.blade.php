<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<head>
<title>Travel Adventure a Travel Category Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Travel Adventure a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<link href="{{ asset('/assets/frontend/web/css/JiSlider.css')}}" rel="stylesheet"> <!-- banner js-->

<link rel="stylesheet" href="{{ asset('/assets/frontend/web/css/flexslider.css')}}" type="text/css" media="screen" /> <!-- Testimonials js-->

<link href"{{ asset('/assets/frontend/web/css/simplelightbox.min.cs')}}s" rel='stylesheet' type='text/css'> <!-- lightbox css --> <!-- gallery js -->

<!-- default css files -->
	<link rel="stylesheet" href="{{ asset('/assets/frontend/web/css/bootstrap.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('/assets/frontend/web/css/style.css')}}" type="text/css" media="all">
	<link rel="stylesheet" href="{{ asset('/assets/frontend/web/css/font-awesome.min.css')}}" />
<!-- default css files -->
	
<!--web font-->
<link href="//fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,devanagari,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<!--//web font-->

</head>

<!-- Body -->
<body>

<!-- banner -->
@include('userpartial.banner')
<!-- banner -->
@include('userpartial.bannerslider')
<!-- //banner -->

<!-- about -->
@include('userpartial.about')
@include('userpartial.count')
<!--count-->
	
<!-- //about -->

<!-- video starts here -->
@include('userpartial.video')
<!-- video ends here -->

<!-- team -->
	@include('userpartial.team')
<!-- //team -->
	
<!-- gallery -->
@include('userpartial.gallery')
<div class="w3agile-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102623.04862310845!2d-82.59779327009554!3d36.506579763153326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885a856b70074b97%3A0x6f9cc0d30bcc841f!2sKingsport%2C+TN%2C+USA!5e0!3m2!1sen!2sin!4v1471495038514" allowfullscreen=""></iframe>
</div>
<!-- //gallery --> 

<!-- blog -->
	@include('userpartial.blog')
<!-- //blog -->
	
<!-- newsletter -->
	@include('userpartial.news')
<!-- //newsletter -->

<!-- contact -->
@include('userpartial.contact')
<!-- contact -->

<!-- map -->

<!-- //map -->
			
<!-- copyright -->
@include('userpartial.copyright')
<!-- copyright -->

<!-- bootstrap-pop-up -->
	@include('userpartial.pop-up')
<!-- //bootstrap-pop-up -->

<!-- Default-JavaScript-File -->
	<script type="text/javascript" src="{{ asset('/assets/frontend/web/js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('/assets/frontend/web/js/bootstrap.js')}}"></script>
<!-- //Default-JavaScript-File -->

<!-- gallery plugin -->
	<script type="text/javascript" src="{{ asset('/assets/frontend/web/js/simple-lightbox.min.js')}}"></script>
	<script>
		$(function(){
			var gallery = $('.w3gallery-grids a').simpleLightbox({navText:		['&lsaquo;','&rsaquo;']});
		});
	</script>  
<!-- //gallery plugin -->

<!-- ji slider --><!-- banner js script -->
<script src="{{ asset('/assets/frontend/web/js/JiSlider.js')}}"></script>
<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
			})
		</script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- //ji slider --><!-- //banner js script -->
			
<!-- for-Testimonials -->
	<script defer src="{{ asset('/assets/frontend/web/js/jquery.flexslider.js')}}"></script>
	<!--Start-slider-script-->
			<script type="text/javascript">
			
			$(window).load(function(){
			  $('.flexslider').flexslider({
				animation: "slide",
				start: function(slider){
				  $('body').removeClass('loading');
				}
			  });
			});
		  </script>
	<!--End-slider-script-->
<!-- //for-Testimonials -->

<script type="text/javascript" src="{{ asset('/assets/frontend/web/js/numscroller-1.0.js')}}"></script><!-- numscroller js file -->

<!-- smooth scrolling -->
	<script src="{{ asset('/assets/frontend/web/js/SmoothScroll.min.js')}}"></script>
	<script type="text/javascript" src="{{ asset('/assets/frontend/web/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{ asset('/assets/frontend/web/js/easing.js')}}"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
<!-- smooth scrolling -->

<!-- scrolling script -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- //scrolling script -->

<script src="{{ asset('/assets/frontend/web/js/jquery.vide.min.js')}}"></script><!-- video js file -->
	
</body>
<!-- //Body -->
</html>