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
			            <h2 class="colorlib-heading"><?php echo $data['name'];?></h2>
			            <video width="100%" height="500" controls autoplay>
						  <source src="./file/astrology_course/<?php echo $data['video'];?>" type="video/mp4">
						  <?php echo $data['name'];?>
						</video>
			        </div>
			        <div class="form-group">
			        	<div class="panel-group" id="accordion">
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" ><?php echo $data['name'];?></a>
						        </h4>
						      </div>
						      <div id="collapse1" class="panel-collapse collapse in">
						        <div class="panel-body"><?php echo nl2br($data['description']);?></div>
						      </div>
						    </div>
						</div>
			        </div>
			    </div>
		    </div>
		</div>
	</div>
</div>