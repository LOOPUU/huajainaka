<div id="colorlib-main">
	<div class="colorlib-blog">
		<div class="colorlib-narrow-content">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
					<h2 class="colorlib-heading"><b>สมัครสมาชิก</b></h2>
				</div>
			</div>
			<div class="blog-log">
				<ul class="nav nav-tabs nav-naka">
	                <li class="<?php if($_GET['page']=="login"){echo "active-naka";}?>"><a href="index.php?page=login"><span class="glyphicon glyphicon-log-in"></span>  &nbsp; เข้าสู่ระบบ</a></li>
	                <li class="<?php if($_GET['page']=="register"){echo "active-naka";}?>"><a href="index.php?page=register"><span class="glyphicon glyphicon-user"></span>  &nbsp; สมัครสมาชิก</a></li>
	            </ul>

	            <form action="index.php?page=register&action=save" method="post" enctype="multipart/form-data" target="" id="form">
		            <div class="tab-content tab-naka">
		                <div class="form-group">
			                <label for="name" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">ชื่อ - นามสกุล</label>
			                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
			                    <input type="text" class="form-control" name="name" placeholder="ชื่อ - นามสกุล" value="<?php echo @$_POST['name'];?>" required/>
			                </div>
			            </div>
			             <div class="form-group">
		                    <label for="email" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">อีเมล</label>
		                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
		                        <input type="email" class="form-control" name="email" placeholder="example@example.com" value="<?php echo @$_POST['email'];?>"  required/>
		                        <b style="color:red;"><?php echo @$error_email_dup;?></b>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label for="phone" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">เบอร์โทร</label>
		                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
		                        <input type="text" class="form-control" name="phone" placeholder="เบอร์โทร" value="<?php echo @$_POST['phone'];?>" required/>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label for="sex" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">เพศ</label>
		                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
		                        <select class="form-control" name="sex" id="sex" required>
		                        	<option value="" <?php if(@$_POST['sex']==""){ echo "selected"; }?>>-- เลือกเพศ --</option>
                                    <option value="ชาย" <?php if(@$_POST['sex']=="ชาย"){ echo "selected"; }?>>ชาย</option>
                                    <option value="หญิง" <?php if(@$_POST['sex']=="หญิง"){ echo "selected"; }?>>หญิง</option>
                                </select>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label for="birthday" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">วัน/เดือน/ปีเกิด</label>
		                    <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
		                    	 <select class="form-control" name="day_birthday" id="day_birthday" required>
		                        	<option value="" <?php if(@$_POST['day_birthday']==""){ echo "selected"; }?>>-- วัน --</option>
                                    <option value="01" <?php if(@$_POST['day_birthday']=="01"){ echo "selected"; }?>>01</option>
                                    <option value="02" <?php if(@$_POST['day_birthday']=="02"){ echo "selected"; }?>>02</option>
                                    <option value="03" <?php if(@$_POST['day_birthday']=="03"){ echo "selected"; }?>>03</option>
                                    <option value="04" <?php if(@$_POST['day_birthday']=="04"){ echo "selected"; }?>>04</option>
                                    <option value="05" <?php if(@$_POST['day_birthday']=="05"){ echo "selected"; }?>>05</option>
                                    <option value="06" <?php if(@$_POST['day_birthday']=="06"){ echo "selected"; }?>>06</option>
                                    <option value="07" <?php if(@$_POST['day_birthday']=="07"){ echo "selected"; }?>>07</option>
                                    <option value="08" <?php if(@$_POST['day_birthday']=="08"){ echo "selected"; }?>>08</option>
                                    <option value="09" <?php if(@$_POST['day_birthday']=="09"){ echo "selected"; }?>>09</option>
                                    <option value="10" <?php if(@$_POST['day_birthday']=="10"){ echo "selected"; }?>>10</option>
                                    <option value="11" <?php if(@$_POST['day_birthday']=="11"){ echo "selected"; }?>>11</option>
                                    <option value="12" <?php if(@$_POST['day_birthday']=="12"){ echo "selected"; }?>>12</option>
                                    <option value="13" <?php if(@$_POST['day_birthday']=="13"){ echo "selected"; }?>>13</option>
                                    <option value="14" <?php if(@$_POST['day_birthday']=="14"){ echo "selected"; }?>>14</option>
                                    <option value="15" <?php if(@$_POST['day_birthday']=="15"){ echo "selected"; }?>>15</option>
                                    <option value="16" <?php if(@$_POST['day_birthday']=="16"){ echo "selected"; }?>>16</option>
                                    <option value="17" <?php if(@$_POST['day_birthday']=="17"){ echo "selected"; }?>>17</option>
                                    <option value="18" <?php if(@$_POST['day_birthday']=="18"){ echo "selected"; }?>>18</option>
                                    <option value="19" <?php if(@$_POST['day_birthday']=="19"){ echo "selected"; }?>>19</option>
                                    <option value="20" <?php if(@$_POST['day_birthday']=="20"){ echo "selected"; }?>>20</option>
                                    <option value="21" <?php if(@$_POST['day_birthday']=="21"){ echo "selected"; }?>>21</option>
                                    <option value="22" <?php if(@$_POST['day_birthday']=="22"){ echo "selected"; }?>>22</option>
                                    <option value="23" <?php if(@$_POST['day_birthday']=="23"){ echo "selected"; }?>>23</option>
                                    <option value="24" <?php if(@$_POST['day_birthday']=="24"){ echo "selected"; }?>>24</option>
                                    <option value="25" <?php if(@$_POST['day_birthday']=="25"){ echo "selected"; }?>>25</option>
                                    <option value="26" <?php if(@$_POST['day_birthday']=="26"){ echo "selected"; }?>>26</option>
                                    <option value="27" <?php if(@$_POST['day_birthday']=="27"){ echo "selected"; }?>>27</option>
                                    <option value="28" <?php if(@$_POST['day_birthday']=="28"){ echo "selected"; }?>>28</option>
                                    <option value="29" <?php if(@$_POST['day_birthday']=="29"){ echo "selected"; }?>>29</option>
                                    <option value="30" <?php if(@$_POST['day_birthday']=="30"){ echo "selected"; }?>>30</option>
                                    <option value="31" <?php if(@$_POST['day_birthday']=="31"){ echo "selected"; }?>>31</option>
                                </select>
                            </div>
                           	<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <select class="form-control" name="month_birthday" id="month_birthday" required>
		                        	<option value="" <?php if(@$_POST['month_birthday']==""){ echo "selected"; }?>>-- เดือน --</option>
                                    <option value="01" <?php if(@$_POST['month_birthday']=="01"){ echo "selected"; }?>>มกราคม</option>
                                    <option value="02" <?php if(@$_POST['month_birthday']=="02"){ echo "selected"; }?>>กุมพาพันธ์</option>
                                    <option value="03" <?php if(@$_POST['month_birthday']=="03"){ echo "selected"; }?>>มีนาคม</option>
                                    <option value="04" <?php if(@$_POST['month_birthday']=="04"){ echo "selected"; }?>>เมษายน</option>
                                    <option value="05" <?php if(@$_POST['month_birthday']=="05"){ echo "selected"; }?>>พฤษภาคม</option>
                                    <option value="06" <?php if(@$_POST['month_birthday']=="06"){ echo "selected"; }?>>มิถุนายน</option>
                                    <option value="07" <?php if(@$_POST['month_birthday']=="07"){ echo "selected"; }?>>กรกฎาคม</option>
                                    <option value="08" <?php if(@$_POST['month_birthday']=="08"){ echo "selected"; }?>>สิงหาคม</option>
                                    <option value="09" <?php if(@$_POST['month_birthday']=="09"){ echo "selected"; }?>>กันยายน</option>
                                    <option value="10" <?php if(@$_POST['month_birthday']=="10"){ echo "selected"; }?>>ตุลาคม</option>
                                    <option value="11" <?php if(@$_POST['month_birthday']=="11"){ echo "selected"; }?>>พฤศจิกายน</option>
                                    <option value="12" <?php if(@$_POST['month_birthday']=="12"){ echo "selected"; }?>>ธันวาคม</option>
                                </select>
                            </div>
                            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                <select class="form-control" name="year_birthday" id="year_birthday" required>
		                        	<option value="" <?php if(@$_POST['year_birthday']==""){ echo "selected"; }?>>-- ปี --</option>
		                        	<?php for($i=1900;$i<=2023;$i++){?>
                                    <option value="<?php echo $i;?>" <?php if(@$_POST['year_birthday']==$i){ echo "selected"; }?>><?php echo $i+543;?></option>
                                	<?php } ?>
                                </select>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label for="password" class="col-sm-12 col-md-12 col-lg-12 col-xl-12 control-label">รหัสผ่าน</label>
		                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
		                        <input type="password" class="form-control" name="password" placeholder="รหัสผ่าน" required/>
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
		                	<input type="submit" class="btn btn-naka-green" id="submit_form" value="สมัคร" style="margin-top:20px;" onclick="check_validattion()">
		                </div>
			        </div>
			    </form> 
		    </div>
		</div>
	</div>
</div>