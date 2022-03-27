<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/slider-homepage.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	

</head>

<body>

	<div class="container">
		<div class="owl-carousel owl-theme">
		    <div class="item">
		    	<a href="">
		    		<img src="img/background.jpg">
		    	</a>
		    </div>
		    <div class="item">
		    	<a href="">
		    		<img src="img/background.jpg">
		    	</a>
		    </div>
		    <div class="item">
		    	<a href="">
		    		<img src="img/background.jpg">
		    	</a>
		    	
		    </div>
		    
  
		</div>
	</div>

	<div class="container">
	    <div class="box"></div>
	</div>
	<script type="text/javascript">
	$(document).ready(function(){
		 $('.owl-carousel').owlCarousel({
			    loop:true,
			    margin:10,
			    nav:true,
			    responsive:{
			        0:{
			            items:1
			        },
			        600:{
			            items:2
			        },
			        1000:{
			            items:1
			        }
			    }
			})
		});
</script>
</body>
</html>