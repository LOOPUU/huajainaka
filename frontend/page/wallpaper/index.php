<div id="colorlib-main">
	<div class="colorlib-blog">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="colorlib-heading"><b>วอลเปเปอร์ & สติ๊กเกอร์ไลน์</b></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
					<div  class="text-center blog-select">
						<select class="select-style" onchange="location = this.value;">
							<option class="select-style" value="index.php?page=wallpaper" <?php if($_GET['page']=="wallpaper"){ echo "selected";}?>> วอลเปเปอร์มงคล</option>
							<option class="select-style" value="index.php?page=stickerline" <?php if($_GET['page']=="sticker"){ echo "selected";}?>> สติ๊กเกอร์ไลน์ หัวใจนาคา</option>
						</select>
					</div>
				</div>
				<?php $i=1; foreach ($data as $value) {?>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInLeft">
					<div class="blog-entry">
						<a href="index.php?page=wallpaper_detail&id=<?php echo $value['id'];?>" class="blog-img"><img src="./file/wallpaper/<?php echo $value['image'];?>" class="img-responsive" alt="วอลเปเปอร์"></a>
						<div class="desc">
							<a href="index.php?page=wallpaper_detail&id=<?php echo $value['id'];?>">
								<span>
									<?php if($value['pin']!=0){
									echo '<i class="text-danger">
										<image src="https://cdn-icons-png.flaticon.com/512/3722/3722653.png" width="15px";></i>';
								}?>
									<small><?php echo $value['create_date'];?></small> | 
									<small> วอลเปเปอร์ หัวใจนาคา</small> 
								</span>
								
								<h3>
									<?php if(@$value['video']!=""){?>
										<i class="icon-youtube"></i> 
									<?php } ?>
									<?php echo $value['name'];?> </h3>
								<h3 style="color:red;font-weight:bolder;"><?php echo @number_format($value['price']);?> บาท</h3>
								<p><?php if($value['description']!==""){ echo substr($value['description'], 0, 500 ).'...';};?></p>
							</a>
							<button type="button" class="btn btn-warning" onclick="location.href='<?php echo @$data_profile['line'];?>'">สั่งซื้อ</button>
						</div>
					</div>
				</div>
				<?php $i++;} ?>
			</div>
		</div>
	</div>
</div>