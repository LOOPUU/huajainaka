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
		            <form action="index.php?page=member_upload_slip&id=<?php echo $_GET['id'];?>&action=save" method="post" enctype="multipart/form-data" target="" id="form" >

		            	<input type="hidden" name="course_id" value="<?php echo $data['id'];?>">

			        	<h2 class="colorlib-heading">อัพโหลดสลิป - <?php echo $data['name'];?></h2>
			        	<div class="row">
			        		<div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
			        			<br>
					            <div class="form-group">
					                <center><label for="email" style="text-decoration: underline;" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">อัพโหลดสลิป</label></center><br><br>
					                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					                	<p class="text-danger">*** กรุณาอัพโหลดสลิปการชำระเงิน เมื่อทำการโอนเรียบร้อยแล้ว<br>*** (รองรับไฟล์ .png .jpg เท่านั้น)</p>
					                   	<input type="file" class="form-control" accept="image/*"  name="slip_payment" placeholder="อัพโหลดสลิป" required/>
					                </div>
					            </div>
					            <div class="bt-center">
					               	<input onclick="check_validattion()" type="submit" class="btn btn-naka-green" value="ยืนยันสลิป" style="margin-top:20px;">
					               	
					            </div>
					        </div>
					        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
					        	<br>
					        	<div class="form-group">
					                <center><label for="email" style="text-decoration: underline;" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">โอนชำระผ่านช่องทางดังต่อไปนี้</label></center><br><br>
					            </div>
					            <?php if($data_profile['bank_num1']!="" && $data_profile['bank_name1']!=""){?>
					        		<p><img width="50px;" src="https://i.pinimg.com/originals/a0/3c/f5/a03cf5e37b4b1d0b376ad04a6b39e0b3.png">&nbsp;  <?php echo $data_profile['bank_num1'];?> : <?php echo $data_profile['bank_name1'];?> </p>
					        	<?php } ?>

					        	<?php if($data_profile['bank_num2']!="" && $data_profile['bank_name2']!=""){?>
					        		<p><img width="50px;" src="https://merchant-tungngern.krungthai.com/assets/logo/logo-lg-krungthai.png">&nbsp;  <?php echo $data_profile['bank_num2'];?>  : <?php echo $data_profile['bank_name2'];?></p>
					        	<?php }?>

					        	<?php if($data_profile['bank_num3']!="" && $data_profile['bank_name3']!=""){?>
					        		<p><img width="50px;" src="https://i.pinimg.com/originals/a9/ca/0a/a9ca0a4ede2a98c5509350cb9b0ba2c9.png">&nbsp;  <?php echo $data_profile['bank_num3'];?>  : <?php echo $data_profile['bank_name3'];?></p>
					        	<?php } ?>

					        	<?php if($data_profile['bank_num4']!="" && $data_profile['bank_name4']!=""){?>
					        	
					        		<p><img width="50px;" src="data:image/png;base64,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">&nbsp;  <?php echo $data_profile['bank_num4'];?>  : <?php echo $data_profile['bank_name4'];?>
					        		</p>
					        	<?php } ?>
					        </div>
					        <div  class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					        	<br><hr style="border-top: 5px solid #e2bc65;"><br>
					            <div class="form-group">
					                <center><label for="email" style="text-decoration: underline;" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">คอร์สเรียนที่สั่งซื้อ</label></center>
					                <br><br>
					                <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5">
					                	<img src="./file/astrology_course/<?php echo $data['image'];?>" class="img-responsive" alt="คอร์สโหราศาสตร์ออนไลน์">
					                </div>
					                <div class="col-sm-12 col-md-12 col-lg-7 col-xl-7">
					                	<p><h3 class="text-danger">รวมยอดชำระ : <?php echo number_format($data['price']);?> บาท</h3></p>
					                	<br>
					                	<p class="text-decoration" style="text-decoration:underline;"><?php echo $data['name'];?></p>

					                	<p><?php echo nl2br($data['description']);?></p>
					                </div>
					            </div>
					        </div>
				        </div>
			        </form>
			    </div>
		    </div>
		</div>
	</div>
</div>