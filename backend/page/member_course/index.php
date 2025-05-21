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
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-xl-12 col-md-12">
                <div class="card table-card">
                    <div class="card-header">
                        <h5>รายการ</h5>
                        <div class="card-header-right">
                            <div class="btn-group card-option">
                                <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="feather icon-more-horizontal"></i>
                                </button>
                                <ul class="list-unstyled card-option dropdown-menu dropdown-menu-right">
                                    <li class="dropdown-item full-card"><a href="#!"><span><i class="feather icon-maximize"></i> maximize</span><span style="display:none"><i class="feather icon-minimize"></i> Restore</span></a></li>
                                    <li class="dropdown-item minimize-card"><a href="#!"><span><i class="feather icon-minus"></i> collapse</span><span style="display:none"><i class="feather icon-plus"></i> expand</span></a></li>
                                    <li class="dropdown-item reload-card"><a href="#!"><i class="feather icon-refresh-cw"></i> reload</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th>
                                        <th>ชื่อ - นามสกุล</th>
                                        <th>คอร์สเรียน</th>
                                        <th>จำนวนเงิน</th>
<!--                                         <th>คลิปเรียน</th> -->
                                        <th class="text-right">สถานะ</th>
                                        <th class="text-right">จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($data as $value) {?>
                                     <tr>
                                        <td><?php echo $i;?></td>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <div class="d-inline-block">
                                                    <h6><?php echo $value['name_register'];?></h6>
                                                    <p class="text-muted m-b-0">เบอร์ : <?php echo $value['phone'];?></p>
                                                    <p class="text-muted m-b-0">อีเมล : <?php echo $value['email'];?></p>
                                                    <p class="text-muted m-b-0">วันเกิด : <?php echo $value['birthday'];?></p>
                                                    <p class="text-muted m-b-0">อายุ : <?php echo @cal_age($value['birthday']); ?></p>
                                                    <p class="text-muted m-b-0">เพศ : <?php echo $value['sex'];?></p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $value['name_course'];?>
                                            <p class="text-muted m-b-0"><a href="backend.php?page=astrology_course_edit&id=<?php echo $value['course_id'];?>" target="_blank">รายละเอียดคอร์สเรียน</a></p>
                                        </td>
                                        <td><?php echo @number_format($value['price_course']);?></td>
                                        <!-- <td><p class="text-muted m-b-0"><a class="btn btn-primary" href="./file/astrology_course/<?php echo $value['video_course'];?>" target="_blank">คลิปเรียน</a></p></td> -->
                                        <td class="text-right">
                                            <?php if($value['status']=="ชำระสำเร็จ"){?>
                                                <p>
                                                    <label class="badge badge-light-success"><?php echo $value['status'];?></label>
                                                    <a href="./file/member_course/<?php echo $value['slip_payment'];?>" target="_blank">ดูสลิป</a>
                                                </p>
                                            <?php }elseif($value['status']=="รอชำระเงิน"){?>
                                                <p>
                                                    <label class="badge badge-light-warning"><?php echo $value['status'];?></label>
                                                </p>
                                            <?php }elseif($value['status']=="รอตรวจสอบ"){?>
                                                <p>
                                                    <label class="badge badge-light-dark"><?php echo $value['status'];?></label>
                                                    <a href="./file/member_course/<?php echo $value['slip_payment'];?>" target="_blank">ดูสลิป</a>
                                                </p>
                                            <?php }elseif($value['status']=="ชำระไม่สำเร็จ"){?>
                                                <p>
                                                    <label class="badge badge-light-danger"><?php echo $value['status'];?></label>
                                                </p>
                                            <?php } ?>
                                        </td>
                                        <td  class="text-right">
                                            <a href="backend.php?page=member_course_edit&id=<?php echo $value['id'];?>" type="button" class="btn btn-dark"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    <?php $i++;} ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>
</section>