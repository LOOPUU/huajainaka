<div id="colorlib-main">
	<div class="colorlib-blog">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="colorlib-heading"><b>เข้าสู่ระบบ</b></h2>
				</div>
			</div>
			<div class="blog-log">
				<ul class="nav nav-tabs nav-naka">
	                <li class="<?php if($_GET['page']=="login"){echo "active-naka";}?>"><a href="index.php?page=login"><span class="glyphicon glyphicon-log-in"></span>  &nbsp; เข้าสู่ระบบ</a></li>
	                <li class="<?php if($_GET['page']=="register"){echo "active-naka";}?>"><a href="index.php?page=register"><span class="glyphicon glyphicon-user"></span>  &nbsp; สมัครสมาชิก</a></li>
	            </ul>
	            <form action="index.php?page=login&action=save" method="post" enctype="multipart/form-data" target="" id="form">
		            <div class="tab-content tab-naka">
		            	<center><b style="color:red;"><?php echo @$message_password;?></b></center>
		            	<center><b style="color:red;"><?php echo @$message_email;?></b></center>
		                <div class="form-group">
			                <label for="name" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">อีเมล</label>
			                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
			                    <input type="email" class="form-control" name="email" placeholder="example@example.com" value="<?php echo @$_POST['email'];?>" required/>
			                </div>
			            </div>
			             <div class="form-group">
		                    <label for="email" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">รหัสผ่าน</label>
		                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
		                        <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required/>
		                    </div>
		                </div>
		                <div class="bt-center">
		                	<i id="check_url" data-url="index.php?page=login"></i>
		                	<input type="submit" class="btn btn-naka-green" id="submit_form" value="เข้าสู่ระบบ" style="margin-top:20px;" onclick="check_validattion()">
		                </div>
		                <p class="bt-center bt-password"><a  href="index.php?page=forget_password">ลืมรหัสผ่าน</a></p>
			        </div>
			    </form>
		    </div>
		</div>
	</div>
</div>