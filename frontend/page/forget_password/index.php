<div id="colorlib-main">
	<div class="colorlib-blog">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="colorlib-heading"><b>ลืมรหัสผ่าน</b></h2>
				</div>
			</div>
			<div class="blog-log">
				<?php if(empty($alert_success)){?>
	            <form action="index.php?page=forget_password&action=save" method="post" enctype="multipart/form-data" target="" id="form">
		            <div class="tab-content tab-naka">
		                <div class="form-group">
			                <label for="email" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">อีเมล</label>
			                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
			                    <input type="email" class="form-control" name="email" placeholder="example@example.com" required/>
			                    <b style="color:red;"><?php echo @$error_email;?></b>
			                </div>
			            </div>
		                <div class="bt-center">
		                	<input type="submit" class="btn btn-naka-green" value="ส่งข้อความ" style="margin-top:20px;" id="submit_form" onclick="check_validattion()">
		                </div>
			        </div>
			    </form>
			<?php }else{?>
				<center>
					<b style="color:green;margin: auto;font-size: 20px;"><?php echo $alert_success;?> <?php echo $_POST['email'];?></b>
					<div class="bt-center">
		               	<a type="submit" class="btn btn-naka-green" href="./" style="margin-top:20px;">ย้อนกลับหน้าแรก</a>
		            </div>
				<center>
			<?php } ?>
		    </div>
		</div>
	</div>
</div>