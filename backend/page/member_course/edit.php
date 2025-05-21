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
                            <li class="breadcrumb-item"><a href="backend.php?page=member_course">ผู้สมัครเรียนโหราศาสตร์ออนไลน์</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <form method="post" action="backend.php?page=member_course_edit&id=<?php echo $data['id'];?>&action=save" enctype="multipart/form-data" target="" id="form">
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>แก้ไขข้อมูล</h5>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group" id="refresh_div">
                                        <?php if($data['slip_payment']!=""){?>
                                            <label for="name">สลิปชำระเงิน</label><br>
                                            <p class="box-image">
                                                <a href="./file/member_course/<?php echo $data['slip_payment'];?>" target="_blank"><img src="./file/member_course/<?php echo $data['slip_payment'];?>" style="width:300px;"></a>
                                                <button id="check_del" data-url="backend.php?page=member_course_delete_image&id=<?php echo $data['id'];?>&image=<?php echo $data['slip_payment'];?>" onclick="delete_confirm()" style="width: 100%;" type="button" class="btn btn-danger"> <i class="fa fa-trash"></i> ลบ</button>
                                            </p>
                                        <?php }else{ ?>
                                            <label for="name">รูปภาพ</label>
                                            <input type="file" name="image" class="form-control" id="image"  placeholder="รูปภาพ">
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="user_id">ผู้สมัคร</label>
                                        <select  class="form-control" name="user_id" id="user_id" required>
                                            <?php $i=1; foreach ($register as $value) {?>
                                            <option value="<?php echo $value['id'];?>" <?php if($data['user_id']==$value['id']){echo "selected";}?>><?php echo $value['id'];?> - <?php echo $value['name'];?> - <?php echo $value['email'];?>- <?php echo $value['phone'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="course_id">คอร์สเรียน</label>
                                        <select  class="form-control" name="course_id" id="course_id" required>
                                            <?php $i=1; foreach ($course as $value) {?>
                                            <option value="<?php echo $value['id'];?>" <?php if($data['course_id']==$value['id']){echo "selected";}?>><?php echo $value['id'];?> - <?php echo $value['name'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="status">สถานะ</label>
                                        <select class="form-control" name="status" id="status" required>
                                            <option value="" <?php if($data['status']==""){echo "selected";}?>>-- เลือก --</option>
                                            <option value="รอชำระเงิน" <?php if($data['status']=="รอชำระเงิน"){echo "selected";}?>>รอชำระเงิน</option>
                                            <option value="รอตรวจสอบ" <?php if($data['status']=="รอตรวจสอบ"){echo "selected";}?>>รอตรวจสอบ</option>
                                            <option value="ชำระสำเร็จ" <?php if($data['status']=="ชำระสำเร็จ"){echo "selected";}?>>ชำระสำเร็จ</option>
                                            <option value="ชำระไม่สำเร็จ" <?php if($data['status']=="ชำระไม่สำเร็จ"){echo "selected";}?>>ชำระไม่สำเร็จ</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                     <div class="form-group">
                                        <label for="comment">สาเหตุ</label>
                                        <textarea name="comment" class="form-control" id="comment"  style="height:500px;"  placeholder="สาเหตุ" ><?php echo $data['comment'];?></textarea>
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