<div id="colorlib-main">
	<div class="colorlib-blog">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="colorlib-heading"><b>เบอร์เสริมดวง</b></h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 animate-box" data-animate-effect="fadeInLeft">
					<div class="blog-entry">
					<?php if($data['video']!=""){?>
						<a href="index.php?page=lucky_number" class="blog-img">
							<iframe width="100%"  height="600px;" src="<?php echo $data['video'];?>"></iframe>
						</a> 
					<?php }else{?>
						<a href="index.php?page=lucky_number" class="blog-img">
							<img src="./file/lucky_number/<?php echo $data['image'];?>" class="img-responsive" alt="หัวใจนาคา">
						</a>
					<?php } ?>
						<div class="desc">
							<b><h3><< <a  style="text-decoration: underline;" href="index.php?page=lucky_number">เบอร์เสริมดวง </a></h3> </b>
						<a>
							<span>
								<small><?php echo $data['create_date'];?></small> | 
								<small> หัวใจนาคา </small> 
							</span>
							<h3>
								<?php if($data['video']!=""){?>
									<i class="icon-youtube"></i> 
								<?php } ?>
								<?php echo $data['name'];?>
							</h3>
							<p><?php echo @$data['description'];?></p>
						</a>
						</div>
					</div>
					<div class="tab-content">
						<p class="nav nav-tabs">
							<p class="active"><a >แสดงความคิดเห็น</a></p>
						</p>
							<form action="index.php?page=lucky_number_detail&id=<?php echo $_GET['id'];?>&action=save" method="post" enctype="multipart/form-data" target="" id="form2" >
							  	<div class="form-group">
					            	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-comment">
					                	<input type="text" class="form-control" name="name" placeholder="ชื่อ" required/>
					            	</div>
					        	</div>
					        	<div class="form-group">
					            	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 pt-comment">
					                	<textarea  class="form-control comment" name="comment" placeholder="แสดงความคิดเห็น" required /></textarea>
					            	</div>
					        	</div>
					        	<div class="bt-center">
				                	<input type="submit" class="btn btn-naka-green" value="แสดงความคิดเห็น" style="margin-top:20px;" onclick="check_validattion2()">
				                </div>
				            </form>
				        <?php if (!empty($data_comment)){ ?>
				            <br><br>
							<div class="form-group scroll-comment" id="comment">
								<?php foreach ($data_comment as $val) { ?>
				            	<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 box-comment">
									<p><span class="glyphicon glyphicon-comment"></span> <?php echo $val['comment'];?></p>
									<hr class="hr-comment">
									<div class="box-span">
										<b  style="float: left;" class="pt-user"><span class="glyphicon glyphicon-time"></span> <?php echo $val['create_date'];?></b>
										<b style="float: right;" class="pt-user"><span class="glyphicon glyphicon-user"></span> <?php echo $val['name'];?></b>
									</div>
								</div>
								<?php } ?>
							</div>
						<?php }else{
							
						} ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>