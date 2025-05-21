<div id="colorlib-main">
	<div class="colorlib-blog">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="colorlib-heading"><b>เปลี่ยนรหัสผ่าน</b></h2>
				</div>
			</div>
			<div class="blog-log">
	            <form action="index.php?page=change_password&action=save&email=<?php echo $_GET['email'];?>" method="post" enctype="multipart/form-data" target="" id="form">
		            <div class="tab-content tab-naka">
		                <div class="form-group">
			                <label for="email" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">อีเมล</label>
			                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
			                    <input type="email" class="form-control" name="email" placeholder="example@example.com" value="<?php echo $_GET['email'];?>" readonly />
			                </div>
			            </div>
			            <div class="form-group">
		                    <label for="password" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">รหัสผ่านใหม่</label>
		                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
		                        <input type="password" class="form-control" name="password" placeholder="รหัสผ่านใหม่" required/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label for="confirm_password" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">ยืนยันรหัสผ่าน</label>
		                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
		                        <input type="password" class="form-control" name="confirm_password" placeholder="ยืนยันรหัสผ่าน" required/>
		                        <b style="color:red;"><?php echo @$error_password;?></b>
		                    </div>
		                </div>
		                <div class="bt-center">
		                	<i id="check_url" data-url="index.php?page=login"></i>
		                	<input type="submit" class="btn btn-naka-green" id="submit_form" value="เปลี่ยนรหัสผ่าน" style="margin-top:20px;" onclick="check_validattion()">
		                </div>
			        </div>
			    </form>
		    </div>
		</div>
	</div>
</div>