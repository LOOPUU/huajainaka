<div id="colorlib-main">
	<div class="colorlib-blog">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="colorlib-heading"><b>ระบบสมาชิก ... คุณ <?php echo $_SESSION['name_frontend'];?></b></h2>
				</div>
			</div>
			<div class="blog-log-member-learn">
				<ul class="nav nav-tabs nav-naka">
	                <li class="<?php if($_GET['page']=="member"){echo "active-naka";}?>"><a href="index.php?page=member"><span class="glyphicon glyphicon-log-in"></span>  &nbsp; ข้อมูลส่วนตัว</a></li>
	                <li class="<?php if($_GET['page']=="member_course" || $_GET['page']=="member_learn" || $_GET['page']=="member_upload_slip" || $_GET['page']=="member_upload_slip_error"  || $_GET['page']=="member_slip"){echo "active-naka";}?>"><a href="index.php?page=member_course"><span class="glyphicon glyphicon-film"></span>  &nbsp; คอร์สเรียนของคุณ </a></li>
	            </ul>
		        <div class="tab-content tab-naka-member">
		            <div class="form-group">
		            	<h2 class="colorlib-heading">คอร์สเรียนที่สั่งซื้อ</h2>
		            	<div class="panel-group" id="accordion">
						    <div class="panel panel-default">
						    <?php $i=1;foreach ($data_course as $val) {?>
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a  data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i;?>">คอร์สเรียนโหราศาสตร์ <?php echo @$val['create_date'];?></a>
						        </h4>
						      </div>
						      <div id="collapse<?php echo $i;?>" class="panel-collapse collapse in">
						        <div class="panel-body">
						        	<ul class="list-group">
									  <li class="list-group-item">
									  	<p>
									  		<b style="float: left;">วันสมัคร</b> 
									  		<b style="float: right;"><?php echo @$val['create_date'];?></b>
									  	</p>
									  </li>
									  <li class="list-group-item">
									  	<p>
									  		<b style="float: left;">คอร์สเรียน</b> 
									  		<b style="float: right;"><a style="cursor:pointer;text-decoration: underline;color: #000;" href="index.php?page=astrology_course_detail&id=<?php echo @$val['course_id'];?>"><span class="glyphicon glyphicon-list-alt"></span>  <?php echo @$val['name_course'];?></a></b>
									  	</p>
									  </li>
									  <li class="list-group-item">
									  	<p>
									  		<b style="float: left;">จำนวนเงิน</b> 
									  		<b style="float: right;"><?php echo @number_format($val['price_course']);?> บาท</b>
									  	</p>
									  </li>
									  <li class="list-group-item">
									  	<p>
									  		<b style="float: left;">สถานะ</b> 
									  		<b style="float: right;">
									  			<?php if(@$val['status']=="ชำระสำเร็จ"){ $color ="green";}?>
									  			<?php if(@$val['status']=="รอชำระเงิน"){ $color ="orange";}?>
									  			<?php if(@$val['status']=="รอตรวจสอบ"){ $color ="blue";}?>
									  			<?php if(@$val['status']=="ชำระไม่สำเร็จ"){ $color ="red";}?>

									  			<i style="color:<?php echo $color;?>;"><?php echo @$val['status'];?></i>
									  			<?php if(@$val['status']=="ชำระสำเร็จ"){?>
									  				<i ><a style="cursor:pointer;text-decoration: underline;color: #000;" target="_blank" href="file/member_course/<?php echo @$val['slip_payment'];?>">ดูสลิป</a></i>
									  			<?php }?>

									  			<?php if(@$val['status']=="รอชำระเงิน"){ ?>
									  				<i ><a style="cursor:pointer;text-decoration: underline;color: #000;" href="index.php?page=member_upload_slip&id=<?php echo @$val['course_id'];?>">อัพโหลดสลิป</a></i> 
							                		<?php if($val['comment']!=""){?>
									  				<br><i class="text-danger">***<?php echo @$val['comment'];?></i>
									  				<?php } ?>
									  			<?php }?>

									  			<?php if(@$val['status']=="รอตรวจสอบ"){ ?>
									  				<i ><a style="cursor:pointer;text-decoration: underline;color: #000;" target="_blank" href="file/member_course/<?php echo @$val['slip_payment'];?>">ดูสลิป</a></i>
							                		<?php if($val['comment']!=""){?>
									  				<br><i class="text-danger">***<?php echo @$val['comment'];?></i>
									  				<?php } ?>
									  			<?php }?>

									  			<?php if(@$val['status']=="ชำระไม่สำเร็จ"){ ?> 
									  				<i ><a style="cursor:pointer;text-decoration: underline;color: #000;" href="index.php?page=member_upload_slip&id=<?php echo @$val['course_id'];?>">อัพโหลดสลิป</a></i> 
									  				<?php if($val['comment']!=""){?>
									  				<br><i class="text-danger">***<?php echo @$val['comment'];?></i>
									  				<?php } ?>
									  			<?php }?>
									  		</b>
									  	</p>
									  </li>
									  <li class="list-group-item">
									  	<p>
									  		<b style="float: left;">เข้าเรียน</b> 
									  		<b style="float: right;">
									  		<?php if(@$val['status']=="ชำระสำเร็จ"){?>
									  			<button class="btn btn-naka-login" onclick="location.href='index.php?page=member_learn&id=<?php echo @$val['course_id'];?>'"><span class="glyphicon glyphicon-film"></span> คลิปเรียน </button>
									  		<?php }else{
									  			echo "-";
									  		}?>
									  		</b>
									  	</p>
									  </li>
									</ul>
						        </div>
						      </div>
						    <?php $i++;}?>

						    </div>
						</div>
			        </div>
			    </div>
		    </div>
		</div>
	</div>
</div>