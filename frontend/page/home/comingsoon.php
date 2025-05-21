<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@400&display=swap" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="template/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="template/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="template/css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="template/css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="template/fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="template/css/owl.carousel.min.css">
	<link rel="stylesheet" href="template/css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="template/css/style.css">
	<link rel="stylesheet" href="template/css/stylesheet.css">

	<!-- bootstrap  -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

	<!-- Modernizr JS -->
	<script src="template/js/modernizr-2.6.2.min.js"></script>

<center style="margin-top:150px;">
	<p style="font-size:30px;">พบกันเร็วๆนี้ รอติดตาม <br>เว็บไซต์ หัวใจนาคา</p>
	<br>
	<form action="index.php?page=check" method="post">
		<input type="text" name="random" value="">
		<?php if(!empty($error)){
			echo "<p style='color:red;'>".$error."</p>";
		}?>
		
		<input type="submit" name="submit" class="btn btn-success" value="ยืนยัน">
	</form>
</center>
