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
                            <li class="breadcrumb-item"><a href="backend.php?page=profile">โปรไฟล์</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
    <form method="post" action="backend.php?page=profile_edit&id=<?php echo $data['id'];?>" enctype="multipart/form-data" target="" id="form">
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>ข้อมูลเว็บไซต์</h5>
                    </div>
                    <div class="card-body">
                            <div class="row">
                            
                                <div class="col-md-12">
                                    <div class="form-group" id="refresh_div">
                                        <?php if($data['logo']!=""){?>
                                            <label for="name">รูปภาพโลโก้</label><br>
                                            <p class="box-image">
                                                <a href="./file/profile/<?php echo $data['logo'];?>" target="_blank"><img src="./file/profile/<?php echo $data['logo'];?>" style="width:300px;"></a>
                                                <button id="check_del" data-url="backend.php?page=profile_delete_image&id=<?php echo $data['id'];?>&logo=<?php echo $data['logo'];?>" onclick="delete_confirm()" style="width: 100%;" type="button" class="btn btn-danger"> <i class="fa fa-trash"></i> ลบ</button>
                                            </p>
                                        <?php }else{ ?>
                                            <label for="name">รูปภาพโลโก้</label>
                                            <input type="file" name="logo" class="form-control" id="file_logo"  placeholder="รูปภาพโลโก้" required>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">ชื่อเว็บไซต์</label>
                                        <input type="text" name="name" class="form-control" id="name"  value="<?php echo $data['name'];?>" placeholder="ชื่อเว็บไซต์" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="description">คำอธิบาย</label>
                                        <textarea name="description" class="form-control" id="description"   style="height:500px;" placeholder="คำอธิบาย" required><?php echo $data['description'];?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="keywords">คีย์เวิร์ด seo</label>
                                        <textarea name="keywords" class="form-control" id="keywords"    style="height:500px;"placeholder="คีย์เวิร์ด seo" required><?php echo $data['keywords'];?></textarea>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>ข้อมูลโซเชียล/การติดต่อ</h5>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">line</label>
                                        <input type="text" name="line" class="form-control" id="line"  value="<?php echo $data['line'];?>" placeholder="line">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">เบอร์โทร</label>
                                        <input type="text" name="phone" class="form-control" id="phone" value="<?php echo $data['phone'];?>" placeholder="เบอร์โทร">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook">facebook</label>
                                        <input type="text" name="facebook" class="form-control" id="facebook" value="<?php echo $data['facebook'];?>" placeholder="facebook">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="twitter">twitter</label>
                                        <input type="text" name="twitter" class="form-control" id="twitter"  value="<?php echo $data['twitter'];?>" placeholder="twitter">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="instagram">instagram</label>
                                        <input type="text" name="instagram" class="form-control" id="instagram" value="<?php echo $data['instagram'];?>" placeholder="instagram">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="youtube">youtube</label>
                                        <input type="text" name="youtube" class="form-control" id="youtube" value="<?php echo $data['instagram'];?>" placeholder="youtube">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>ข้อมูลธนาคาร</h5>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">ธนาคารกสิกรไทย -- หมายเลขบัญชี</label>
                                        <input type="text" name="bank_num1" class="form-control" id="bank_num1"  value="<?php echo $data['bank_num1'];?>" placeholder="หมายเลขบัญชี">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">ธนาคารกสิกรไทย -- ชื่อบัญชี</label>
                                        <input type="text" name="bank_name1" class="form-control" id="bank_name1"  value="<?php echo $data['bank_name1'];?>" placeholder="ชื่อบัญชี">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">ธนาคารกรุงไทย -- หมายเลขบัญชี</label>
                                        <input type="text" name="bank_num2" class="form-control" id="bank_num2"  value="<?php echo $data['bank_num2'];?>" placeholder="หมายเลขบัญชี">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">ธนาคารกรุงไทย -- ชื่อบัญชี</label>
                                        <input type="text" name="bank_name2" class="form-control" id="bank_name2"  value="<?php echo $data['bank_name2'];?>" placeholder="ชื่อบัญชี">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">ธนาคารออมสิน -- หมายเลขบัญชี</label>
                                        <input type="text" name="bank_num3" class="form-control" id="bank_num3"  value="<?php echo $data['bank_num3'];?>" placeholder="หมายเลขบัญชี">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">ธนาคารออมสิน -- ชื่อบัญชี</label>
                                        <input type="text" name="bank_name3" class="form-control" id="bank_name3"  value="<?php echo $data['bank_name3'];?>" placeholder="ชื่อบัญชี">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">ธนาคารกรุงเทพ -- หมายเลขบัญชี</label>
                                        <input type="text" name="bank_num4" class="form-control" id="bank_num4"  value="<?php echo $data['bank_num4'];?>" placeholder="หมายเลขบัญชี">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">ธนาคารกรุงเทพ -- ชื่อบัญชี</label>
                                        <input type="text" name="bank_name4" class="form-control" id="bank_name4"  value="<?php echo $data['bank_name4'];?>" placeholder="ชื่อบัญชี">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div  class="col-sm-12" >
                <button type="submit" name="submit" class="btn btn-success" id="submit_form" style="float: right;" onclick="check_validattion()">บันทึก</button>
            </div>
            <!-- [ form-element ] end -->
        </div>
    </form>
        <!-- [ Main Content ] end -->

    </div>
</section>