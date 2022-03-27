
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Belleza&family=Montserrat:wght@100;600&family=Ribeye+Marrow&family=Roboto+Condensed:wght@700&family=Roboto:wght@100&family=Rubik:wght@300;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Belleza&family=Montserrat:wght@100;600&family=Ribeye+Marrow&family=Roboto+Condensed:wght@700&family=Roboto+Mono:wght@100&family=Roboto:wght@100&family=Rubik:wght@300;700&display=swap" rel="stylesheet">
	
	<link rel="stylesheet" type="text/css" href="css/deneiyi.css">
	

</head>
<body class = "container-fluid">
	<header>
		
		<?php
		require "include/header.php";
		?>

		

	</header>
	<main>
		<div class= "section-1 row center-1">
			<div class="col-7">
				<div class="row center-2">
					<h2>SHOP AT HOME</h2>
					
				</div>
				<div class="row center-2">
					<p>#stayathome</p>	
				</div>
				<div class="row center-2 section-1-letterspacing">
					<p>Giảm<p class="discount"> 10% </p><p>tất cả sản phẩm</p> </p>
					
					
				</div>

				
			</div>
			<div class="col-5">
				
				<?php
				require "include/slider-homepage.php";
				?>

				
			</div>


		</div>
		<div class= "section-2 row center-1">
			<div class="col-4">
				<div class="row center-2">
					<h3 style="font-size: 40px;font-weight: 700;">DANH MỤC SẢN PHẨM</h3>
					
				</div>
				
			
				
			</div>
			<div class="col-8">
				<div class="row center-1 ">
					<div class="col-4">
						<div class="row center-2">
							<a href="#"><img style="margin: 100px auto;" src="img/set.jpg"></a>
						</div>
						
						
					</div>
					<div class="col-4">
						<div class="row center-2">
							<a href="#"><img style="margin-bottom: 20px; height: ;" src="img/top.jpg"></a>
							
						</div>
						<div class="row center-2">
							<a href="#"><img src="img/under.jpg"></a>
							
						</div>
						
					
					</div>
					<div class="col-4 ">
						<div class="row center-2">
							<a href="#"><img src="img/phukien.jpg"></a>
						</div>
						
						
					</div>
				</div>
				
			</div>

		</div>
		<div class= "section-3 row center-1">
			<div class="col-12 ">
				
					<h3 class="section-3-content-1" style="text-align:center">BỘ SƯU TẬP MÙA HÈ</h3>
				
			</div>
			<div class="col-12 ">
				<div class="row container center-2">
					<div class="col-3">
						<a href="#"><img src="img/bst-1.jpg"></a>
					</div>
					<div class="col-3">
						<a href="#"><img src="img/bst-2.jpg"></a>
					</div>
					<div class="col-3">
						<a href="#"><img src="img/bst-3.jpg"></a>
					</div>
					<div class="col-3">
						<a href="#"><img style=" width: 270px;height: 405px; " src="img/bst-4.jpg"></a>
					</div>
					
				</div>
				
			</div>
			<div class="col-12">
				
					<h3 class="section-3-content-2" > XEM THÊM >> </h3>
					
				
				
			</div>

		</div>
		<div class= "section-4 row center-1">
			<div class="col-12">
				<div class="row">
					<a href="#"><img style="width:90%;" src="img/promotion.jpg"> </a>
				</div>
				
			</div>
			<div class="col-12">
					<h3>SẢN PHẨM MỚI<hr>XEM THÊM >></h3>
				
			</div>
			
					
			
		</div>
		<div class= "section-5 row center-1">
			
			<div class="col-3">
				<?php
					require "detail-product.php";
				?>
			</div>
			<div class="col-3">
				<?php
					require "detail-product.php";
				?>
			</div>
			<div class="col-3">
				<?php
					require "detail-product.php";
				?>
			</div>
			<div class="col-3">
				<?php
					require "detail-product.php";
				?>
			</div>
		</div>
		<div class="section-4">
			<div class="col-12">
					<h3>SẢN PHẨM KHUYẾN MÃI<hr style="width:50%;">XEM THÊM >></h3>
				
			</div>
		</div>
			
		

		<div class= "section-6 row center-1">
			
			
				<div class="col-3">
					<?php
						require "detail-product.php";
					?>
				</div>
				<div class="col-3">
					<?php
						require "detail-product.php";
					?>
				</div>
				<div class="col-3">
					<?php
						require "detail-product.php";
					?>
				</div>
				<div class="col-3">
					<?php
						require "detail-product.php";
					?>
				</div>
			

		</div>
		<div class= "section-7 row center-1">
			<div class="col-12">
				<div class="row center-2 ">
					<a href="#"><h3><img class="icon" src="img/instagram.png">FOLLOW US<h3></a>
					

				</div>
			
				<div class="row center-2">
						<p> #de.neiyi</p>
				</div>
			
				<div class="row center-2">
					<img style="margin: 60px 20px;width: 85%" src="img/photo-instagram.jpg">
					
				</div>

				
			</div>
		</div>

	</main>
	<footer>
		
		<?php
		require "include/footer.php";
		?>

	
	</footer>

</body>
</html>

