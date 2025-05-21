<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><h5 class="m-b-10">ข้อมูลหลัก</h5></h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="backend.php?page=profile"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="backend.php?page=register">สมาชิก</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <form method="post" action="backend.php?page=register_add&action=save" enctype="multipart/form-data" target="" id="form">
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>เพิ่มข้อมูล</h5>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">ชื่อ - นามสกุล</label>
                                        <input type="text" name="name" class="form-control" id="name"  placeholder="ชื่อ - นามสกุล" value="<?php echo @$_POST['name'];?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sex">เพศ</label>
                                        <select class="form-control" name="sex" id="sex">
                                            <option value="ชาย" <?php if($_POST['sex']=="ชาย"){ echo "selected"; }?>>ชาย</option>
                                            <option value="หญิง" <?php if($_POST['sex']=="หญิง"){ echo "selected"; }?>>หญิง</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="birthday">วันเดือนปีเกิด</label>
                                        <input type="date" name="birthday" class="form-control" id="birthday"  placeholder="วันเดือนปีเกิด" value="<?php echo @$_POST['birthday'];?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">อีเมล</label>
                                        <input type="email" name="email" class="form-control" id="email"  placeholder="อีเมล" value="<?php echo @$_POST['email'];?>"  required>
                                        <b style="color:red;"><?php echo $error_email_dup;?></b>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">เบอร์โทร</label>
                                        <input type="text" name="phone" class="form-control" id="phone"  placeholder="เบอร์โทร" value="<?php echo @$_POST['phone'];?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook">สถานะ</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="เปิด" <?php if($_POST['status']=="เปิด"){ echo "selected"; }?>>เปิด</option>
                                            <option value="ปิด" <?php if($_POST['status']=="ปิด"){ echo "selected"; }?>>ปิด</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>ตั้งค่ารหัสผ่าน</h5>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="password">รหัสผ่าน</label>
                                        <input type="password" name="password" class="form-control" id="password"  placeholder="รหัสผ่าน"  required>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div  class="col-sm-12" >
                <button type="submit"  class="btn btn-success" id="submit_form" style="float: right;" onclick="check_validattion()">บันทึก</button>
            </div>
            <!-- [ form-element ] end -->
        </div>
    </form>
        <!-- [ Main Content ] end -->
    </div>
</section>