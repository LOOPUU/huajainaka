<div id="colorlib-main">
	<div class="colorlib-blog">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="colorlib-heading"><b>คอร์สโหราศาสตร์ออนไลน์</b></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
					<div class="blog-entry">

						<a href="index.php?page=astrology_course" class="blog-img">
							<img src="./file/astrology_course/<?php echo $data['image'];?>" class="img-responsive" alt="หัวใจนาคา">
						</a>
						<div class="desc">
							<b><h3><< <a  style="text-decoration: underline;" href="index.php?page=astrology_course">คอร์สโหราศาสตร์ออนไลน์ </a></h3> </b>
						<a>
							<span>
								<small><?php echo $data['create_date'];?></small> | 
								<small> หัวใจนาคา </small> 
							</span>
							<h3>
								<img src="template/images/video.png" class="icon-video">
								<?php echo $data['name'];?> </h3>
							<h3 style="color:red;font-weight:bolder;"><?php echo @number_format($data['price']);?> บาท</h3>
							<p><?php echo @$data['description'];?></p>
						</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>