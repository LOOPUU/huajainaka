

		 <div id="colorlib-main">
			<aside id="colorlib-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
					<?php $i=1; foreach ($data_banner as $value) {?>
					<li style="background-image: url(./file/banner/<?php echo $value['image'];?>);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-6 col-md-offset-3 col-md-push-3 col-sm-12 col-xs-12 js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<div class="desc">
						   					<h1><?php echo @$value['name'];?></h1>
						   					<h2><?php echo @$value['description'];?></h2>
										</div>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<?php $i++;} ?>
				  	</ul>
			  	</div>

			</aside>

			<div class="colorlib-narrow-content">
					<div class="row row-bottom-padded-md">
						
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<h2 class="colorlib-heading"><?php echo $data_about['name'];?></h2>
								<p><?php echo @$data_about['description'];?>)... <button type="button" style="background-color: #203014;border: 1px solid #203014;color: #fff;" class="btn btn-warning" onclick="location.href='index.php?page=about'"> อ่านเพิ่มเติม >></button>
								</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(./file/about/<?php echo $data_about['image'];?>);">
							</div>
						</div>
					</div>
					
				</div>

			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(template/images/THAI-873.jpeg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<!-- <div class="colorlib-narrow-content">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-skyline"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="1539" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">คอร์สเรียนโหราศาสตร์</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-engineer"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="3653" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">จำนวนผู้เรียน</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-architect-with-helmet"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="5987" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">จำนวนผู้เยี่ยมชม/วัน</span>
						</div>
						<div class="col-md-3 text-center animate-box">
							<span class="icon"><i class="flaticon-worker"></i></span>
							<span class="colorlib-counter js-counter" data-from="0" data-to="3999" data-speed="5000" data-refresh-interval="50"></span>
							<span class="colorlib-counter-label">จำนวนผู้เยี่ยมชม/เดือน</span>
						</div>
					</div>
				</div> -->
			</div> 

		<?php if(is_array($data_course) && count($data_course) > 0){?>
			<div class="colorlib-narrow-content">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
						<h2 class="colorlib-heading"><b>คอร์สโหราศาสตร์ออนไลน์</b></h2>
					</div>
				</div>
				<div class="row">
					<?php $i=1; foreach ($data_course as $value) {?>
					<div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<div class="row">
								<div class="col-md-4">
									<a href="index.php?page=astrology_course_detail&id=<?php echo $value['id'];?>" class="blog-img"><img src="./file/astrology_course/<?php echo $value['image'];?>" class="img-responsive" alt="คอร์สโหราศาสตร์ออนไลน์"></a>
								</div>
								<div class="col-md-8 desc">
									<a href="index.php?page=astrology_course_detail&id=<?php echo $value['id'];?>">
									<span>
										<?php if($value['pin']!=0){
											echo '<i class="text-danger">
												<image src="https://cdn-icons-png.flaticon.com/512/3722/3722653.png" width="15px";></i>';
										}?>
										<small><?php echo $value['create_date'];?></small> | 
										<small>คอร์สโหราศาสตร์ออนไลน์ หัวใจนาคา </small> 
									</span>
									<h3>
										<img src="template/images/video.png" class="icon-video">
										<?php echo $value['name'];?>
									</h3>
									<h3 style="color:red;font-weight:bolder;"><?php echo @number_format($value['price']);?> บาท</h3>
									<p class="text-style"><?php if($value['description']!==""){ echo substr($value['description'], 0, 500 ).'...';};?> <b>อ่านเพิ่มเติม</b></p>
									</a>
									<button type="button" class="btn btn-warning" onclick="location.href='index.php?page=member_upload_slip&id=<?php echo $value['id'];?>'">สมัครเรียนออนไลน์</button>
									<!-- <button type="button" class="btn btn-warning" onclick="location.href='index.php?page=login'">สมัครเรียนออนไลน์</button> -->
								</div>
							</div>
							<hr class="hr-style">
						</div>
					</div>
					<?php $i++;} ?>
				<div class="text-right" style="margin-bottom: 80px;"><button type="button" style="background-color: #203014;border: 1px solid #203014;color: #fff;" class="btn btn-warning" onclick="location.href='index.php?page=astrology_course'">ดูคอร์สเรียนเพิ่มเติม >></button></div>
				</div>
			</div>
		<?php } ?>

		<?php if(is_array($data_object) && count($data_object) > 0){?>
			<div class="colorlib-narrow-content">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
						<h2 class="colorlib-heading"><b>บูชาวัตถุมงคล</b></h2>
					</div>
				</div>
				<div class="row">
					<?php $i=1; foreach ($data_object as $value) {?>
					<div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<div class="row">
								<div class="col-md-4">
									<a href="index.php?page=holy_object_detail&id=<?php echo $value['id'];?>" class="blog-img"><img src="./file/holy_object/<?php echo $value['image'];?>" class="img-responsive" alt="วัตถุมงคลเสริมดวง"></a>
								</div>
								<div class="col-md-8 desc">
									<a href="index.php?page=holy_object_detail&id=<?php echo $value['id'];?>">
									<span>
										<?php if($value['pin']!=0){
											echo '<i class="text-danger">
												<image src="https://cdn-icons-png.flaticon.com/512/3722/3722653.png" width="15px";></i>';
										}?>
										<small><?php echo $value['create_date'];?></small> | 
										<small>วัตถุมงคลเสริมดวง หัวใจนาคา </small> 
									</span>
									<h3>
										<?php if($value['video']!=""){?>
											<i class="icon-youtube"></i> 
										<?php } ?>
										<?php echo $value['name'];?>
									</h3>
									<p class="text-style"><?php if($value['description']!==""){ echo substr($value['description'], 0, 500 ).'...';};?> <b>อ่านเพิ่มเติม</b></p>
									</a>
									<button type="button" class="btn btn-warning" onclick="location.href='https://line.me/ti/p/@bank164'">สั่งซื้อ/บูชา</button>
								</div>
							</div>
							<hr class="hr-style">
						</div>
					</div>
					<?php $i++;} ?>
				<div class="text-right" style="margin-bottom: 80px;"><button type="button" style="background-color: #203014;border: 1px solid #203014;color: #fff;" class="btn btn-warning" onclick="location.href='index.php?page=holy_object'">ดูวัตถุมงคลเพิ่มเติม >></button></div>
				</div>
			</div>
		<?php } ?>

		<?php if(is_array($data_horoscope) && count($data_horoscope) > 0){?>
			<div class="colorlib-narrow-content">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
						<h2 class="colorlib-heading"><b>พยากรณ์ดวงชะตา</b></h2>
					</div>
				</div>
				<div class="row">
					<?php $i=1; foreach ($data_horoscope as $value) {?>
					<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="index.php?page=horoscope_detail&id=<?php echo $value['id'];?>" class="blog-img"><img src="./file/horoscope/<?php echo $value['image'];?>" class="img-responsive" alt="พยากรณ์ดวงชะตา"></a>
							<div class="desc">
								<a href="index.php?page=horoscope_detail&id=<?php echo $value['id'];?>">
								<span>
									<?php if($value['pin']!=0){
											echo '<i class="text-danger">
												<image src="https://cdn-icons-png.flaticon.com/512/3722/3722653.png" width="15px";></i>';
										}?>
									<small><?php echo $value['create_date'];?></small> | 
									<small> พยากรณ์ดวงชะตา หัวใจนาคา </small> 
								</span>
								<h3>
										<?php if($value['video']!=""){?>
											<i class="icon-youtube"></i> 
										<?php } ?>
										<?php echo $value['name'];?>
								</h3>
								<p class="text-style"><?php if($value['description']!==""){ echo substr($value['description'], 0, 500 ).'...';};?> <b>อ่านเพิ่มเติม</b></p>
								
							</a>
							</div>
						</div>
					</div>
					<?php $i++;} ?>
				<div class="text-right" style="margin-bottom: 80px;"><button type="button" style="background-color: #203014;border: 1px solid #203014;color: #fff;" class="btn btn-warning" onclick="location.href='index.php?page=horoscope'">ดูคลิปเพิ่มเติม >></button></div>
			</div>
		<?php } ?>
		</div> 


