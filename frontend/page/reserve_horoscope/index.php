<div id="colorlib-main">

			<div class="colorlib-about">
				<div class="colorlib-narrow-content">
					<div class="row row-bottom-padded-md">
						<div class="col-md-6">
							<div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(./file/reserve_horoscope/<?php echo $data['image'];?>);">
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="about-desc">
								<span class="heading-meta">ยินดีต้อนรับสู่ หัวใจนาคา</span>
								<h2 class="colorlib-heading"><?php echo $data['name'];?></h2>
								<p><?php echo @$data['description'];?></p>
							</div>
							<div class="row">
								<div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
									<h2 class="colorlib-heading">สนใจติดต่อ</h2>
									<div class="row" style="font-weight:bolder; font-size: 20px;">
										<div class="col-md-12 desc">
											<a href="tel:+<?php echo @$data_profile['phone'];?>" target="_blank"><img src="template/images/OIP.jfif" style="width:100px;"> &nbsp;&nbsp;&nbsp;   <?php echo @$data_profile['phone'];?> </a>
										</div>
										<div class="col-md-12 desc">
											<a href="<?php echo @$data_profile['line'];?>" target="_blank"><img src="template/images/line-icon.webp" style="width:90px; margin-left:5px;">&nbsp; &nbsp;&nbsp; &nbsp;   <?php echo str_replace("https://line.me/ti/p/", "", @$data_profile['line']);?> </a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			
			<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(template/images/THAI-873.jpeg);" data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="colorlib-narrow-content">
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
				</div>
			</div>
		</div>