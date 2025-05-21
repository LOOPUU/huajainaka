<?php if(!isset($_SESSION['name'])){?>
	<script type="text/javascript">
	alert("กรุณาเข้าสู่ระบบก่อนทุกครั้ง");
	location="backend.php?page=logout";
	</script>
<?php } ?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>หัวใจนาคา | Huajainaka</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="หัวใจนาคา | Huajainaka" />
	<meta name="keywords" content="หัวใจนาคา | Huajainaka" />
	<meta name="author" content="หัวใจนาคา | Huajainaka" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
    <!-- Favicon icon -->
	<link rel="shortcut icon" href="template/images/logo.ico">

    <!-- vendor css -->
    <link rel="stylesheet" href="template_backend/css/style.css">

    <!-- sweetalert2 -->
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">


</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar  ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img style="width:40px;" src="template/images/logo.png" alt="User-Profile-Image">
						<div class="user-details">
							<span><?=$_SESSION['name'];?></span>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-unstyled">
							<li class="list-group-item"><a href="backend.php?page=setting"><i class='far fa-address-card'></i>ตั้งค่า</a></li>
							<li class="list-group-item"><a href="backend.php?page=logout"><i class="feather icon-log-out m-r-5"></i>ออกจากระบบ</a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					<li class="nav-item pcoded-menu-caption">
						<label>ข้อมูลหลัก</label>
					</li>
					<li class="nav-item <?php if($_GET['page']=="profile"){echo "active";}?>">
					    <a href="backend.php?page=profile" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">โปรไฟล์</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="menu" || $_GET['page']=="menu_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fas fa-align-left'></i></span><span class="pcoded-mtext">เมนู</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=menu">รายการ</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="banner" || $_GET['page']=="banner_add" || $_GET['page']=="banner_edit"){echo "active";}?>">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class='fas fa-square-full'></i></span><span class="pcoded-mtext">แบนเนอร์สไลด์</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=banner">รายการ</a></li>
							<li><a href="backend.php?page=banner_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="register" || $_GET['page']=="register_add" || $_GET['page']=="register_edit"){echo "active";}?>">
						<a href="#!" class="nav-link"><span class="pcoded-micon"><i class='fas fa-address-card'></i></span><span class="pcoded-mtext">สมาชิก</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=register">รายการ</a></li>
							<li><a href="backend.php?page=register_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="member_course" || $_GET['page']=="member_course_add" || $_GET['page']=="member_course_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fas fa-address-card'></i></span><span class="pcoded-mtext">ผู้สมัครเรียนโหราศาสตร์</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=member_course">รายการ</a></li>
							<li><a href="backend.php?page=member_course_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="comment"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fas fa-address-card'></i></span><span class="pcoded-mtext">กระทู้ความคิดเห็น</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=comment">รายการ</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-menu-caption">
						<label>เมนู</label>
					</li>
					<li class="nav-item <?php if($_GET['page']=="about" || $_GET['page']=="about_add" || $_GET['page']=="about_edit"){echo "active";}?>">
					    <a href="backend.php?page=about" class="nav-link "><span class="pcoded-micon"><i class='fas fa-store'></i></span><span class="pcoded-mtext">เกี่ยวกับเรา</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="horoscope" || $_GET['page']=="horoscope_add" || $_GET['page']=="horoscope_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fas fa-splotch'></i></span><span class="pcoded-mtext">พยากรณ์ดวงชะตา</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=horoscope">รายการ</a></li>
							<li><a href="backend.php?page=horoscope_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item <?php if($_GET['page']=="reserve_horoscope" || $_GET['page']=="reserve_horoscope_add" || $_GET['page']=="reserve_horoscope_edit"){echo "active";}?>">
					    <a href="backend.php?page=reserve_horoscope" class="nav-link "><span class="pcoded-micon"><i class='fas fa-th'></i></span><span class="pcoded-mtext">จองคิวดูดวง</span></a>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="astrology_course" || $_GET['page']=="astrology_course_add" || $_GET['page']=="astrology_course_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fab fa-think-peaks'></i></span><span class="pcoded-mtext">คอร์สโหราศาสตร์ออนไลน์</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=astrology_course">รายการ</a></li>
							<li><a href="backend.php?page=astrology_course_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="holy_object" || $_GET['page']=="holy_object_add" || $_GET['page']=="holy_object_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class="fa fa-asterisk"></i></span><span class="pcoded-mtext">วัตถุมงคลเสริมดวง</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=holy_object">รายการ</a></li>
							<li><a href="backend.php?page=holy_object_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="diamond_phayanaga" || $_GET['page']=="diamond_phayanaga_add" || $_GET['page']=="diamond_phayanaga_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fab fa-vaadin'></i></span><span class="pcoded-mtext">เพชรพญานาค</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=diamond_phayanaga">รายการ</a></li>
							<li><a href="backend.php?page=diamond_phayanaga_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="wallpaper" || $_GET['page']=="wallpaper_add" || $_GET['page']=="wallpaper_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fab fa-vaadin'></i></span><span class="pcoded-mtext">วอลเปเปอร์</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=wallpaper">รายการ</a></li>
							<li><a href="backend.php?page=wallpaper_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="stickerline" || $_GET['page']=="stickerline_add" || $_GET['page']=="stickerline_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fas fa-vector-square'></i></span><span class="pcoded-mtext">สติ๊กเกอร์ไลน์</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=stickerline">รายการ</a></li>
							<li><a href="backend.php?page=stickerline_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="lucky_number" || $_GET['page']=="lucky_number_add" || $_GET['page']=="lucky_number_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fab fa-shirtsinbulk'></i>></span><span class="pcoded-mtext">เบอร์เสริมดวง</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=lucky_number">รายการ</a></li>
							<li><a href="backend.php?page=lucky_number_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="auspicious_registration" || $_GET['page']=="auspicious_registration_add" || $_GET['page']=="auspicious_registration_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fas fa-wallet'></i></span><span class="pcoded-mtext">ทะเบียนรถมงคล</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=auspicious_registration">รายการ</a></li>
							<li><a href="backend.php?page=auspicious_registration_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="color_car" || $_GET['page']=="color_car_add" || $_GET['page']=="color_car_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fas fa-shipping-fast'></i></span><span class="pcoded-mtext">สีรถถูกโฉลก</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=color_car">รายการ</a></li>
							<li><a href="backend.php?page=color_car_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="good_time" || $_GET['page']=="good_time_add" || $_GET['page']=="good_time_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fab fa-sith'></i></span><span class="pcoded-mtext">ฤกษ์งามยามดี</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=good_time">รายการ</a></li>
							<li><a href="backend.php?page=good_time_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="enhance_luck" || $_GET['page']=="enhance_luck_add" || $_GET['page']=="enhance_luck_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fab fa-skyatlas'></i></span><span class="pcoded-mtext">เสริมดวงตามราศี</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=enhance_luck">รายการ</a></li>
							<li><a href="backend.php?page=enhance_luck_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="story" || $_GET['page']=="story_add" || $_GET['page']=="story_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fas fa-pen-nib'></i></span><span class="pcoded-mtext">เรื่องเล่าพระอริยเจ้า</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=story">รายการ</a></li>
							<li><a href="backend.php?page=story_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="meditate" || $_GET['page']=="meditate_add" || $_GET['page']=="meditate_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fab fa-phabricator'></i></span><span class="pcoded-mtext">การปฎิบัติสมาธิ กรรมฐาน</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=meditate">รายการ</a></li>
							<li><a href="backend.php?page=meditate_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="phrathat" || $_GET['page']=="phrathat_add" || $_GET['page']=="phrathat_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fab fa-phabricator'></i></span><span class="pcoded-mtext">พระธาตุประจำวันเกิด</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=phrathat">รายการ</a></li>
							<li><a href="backend.php?page=phrathat_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="phrathat_year" || $_GET['page']=="phrathat_year_add" || $_GET['page']=="phrathat_year_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fab fa-pied-piper-hat'></i></span><span class="pcoded-mtext">พระธาตุประจำปีเกิด</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=phrathat_year">รายการ</a></li>
							<li><a href="backend.php?page=phrathat_year_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item pcoded-hasmenu <?php if($_GET['page']=="naka_history" || $_GET['page']=="naka_history_add" || $_GET['page']=="naka_history_edit"){echo "active";}?>">
						<a href="#!" class="nav-link  "><span class="pcoded-micon"><i class='fab fa-playstation'></i></span><span class="pcoded-mtext">ประวัติองค์พญานาคาฯ</span></a>
						<ul class="pcoded-submenu">
							<li><a href="backend.php?page=naka_history">รายการ</a></li>
							<li><a href="backend.php?page=naka_history_add">เพิ่มข้อมูล</a></li>
						</ul>
					</li>
					<li class="nav-item <?php if($_GET['page']=="contact" || $_GET['page']=="contact_add" || $_GET['page']=="contact_edit"){echo "active";}?>">
					    <a href="backend.php?page=contact" class="nav-link "><span class="pcoded-micon"><i class='fas fa-podcast'></i></span><span class="pcoded-mtext">ติดต่อเรา</span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-dark">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!">
						<!-- ========   change your logo hear   ============ -->
						<p style="color:#fff !important;font-size: 20px;margin-top: 20px;">หัวใจนาคา</p>
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown drp-user">
								<a href="backend.php?page=setting">
									<i class='far fa-address-card'></i> ตั้งค่า</a>
								</a>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="backend.php?page=logout">
									<i class="feather icon-log-out"> ออกจากระบบ</i>
								</a>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	