<div id="colorlib-main">
	<div class="colorlib-blog">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="colorlib-heading"><b>ทะเบียนรถมงคล</b></h2>
				</div>
			</div>
			<div class="row">
				<?php $i=1; foreach ($data as $value) {?>
				<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					<div class="blog-entry">
						<a href="index.php?page=auspicious_registration_detail&id=<?php echo $value['id'];?>" class="blog-img"><img src="./file/auspicious_registration/<?php echo $value['image'];?>" class="img-responsive" alt="ทะเบียนรถมงคล หัวใจนาคา"></a>
						<div class="desc">
							<a href="index.php?page=auspicious_registration_detail&id=<?php echo $value['id'];?>">
							<span>
								<?php if($value['pin']!=0){
									echo '<i class="text-danger">
										<image src="https://cdn-icons-png.flaticon.com/512/3722/3722653.png" width="15px";></i>';
								}?>
								<small><?php echo $value['create_date'];?></small> | 
								<small> ทะเบียนรถมงคล หัวใจนาคา </small> 
							</span>
							<h3>
								<?php if($value['video']!=""){?>
									<i class="icon-youtube"></i> 
								<?php } ?>
								<?php echo $value['name'];?>
							</h3>
							<p><?php if($value['description']!==""){ echo substr($value['description'], 0, 300 ).'...';};?>...</p>
						</a>
						</div>
					</div>
				</div>
				<?php $i++;} ?>
			</div>
		</div>
	</div>
</div>