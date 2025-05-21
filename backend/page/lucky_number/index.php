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
                            <li class="breadcrumb-item"><a href="backend.php?page=lucky_number">เบอร์เสริมดวง</a></li>
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
                                        <th>ตำแหน่งปักหมุด</th>
                                        <th>รูปภาพ/วิดีโอ</th>
                                        <th>ชื่อ</th>
                                        <th>รายละเอียด</th>
                                        <th class="text-right">สถานะ</th>
                                        <th class="text-right">จัดการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach ($data as $value) {?>
                                    <tr>
                                        <td><?php echo $i;?></td>
                                        <td><?php if($value['pin']!=0){echo '<i class="text-danger"><image src="https://cdn-icons-png.flaticon.com/512/3722/3722653.png" width="30px";>'.$value['pin'];}?></i></td>
                                        <td>
                                        <?php if($value['image']!=""){?>
                                            <img src="./file/lucky_number/<?php echo $value['image'];?>" style="width:300px;">
                                        <?php }else{?>
                                            <a href="<?php echo $value['video'];?>" target="_blank">วิดีโอ = <?php echo $value['video'];?></a>
                                        <?php } ?>
                                        </td>
                                        <td><?php echo $value['name'];?></td>
                                        <td style="text-overflow: ellipsis;"><?php if($value['description']!==""){ echo substr($value['description'], 0, 20 ).'...';};?></td>
                                        
                                        <td class="text-right">
                                            <p><label class="badge badge-light-<?php if($value['status']=="เปิด"){ echo "success";}else{echo "danger";}?>"><?php echo $value['status'];?></label></p>
                                        </td>
                                        <td  class="text-right">
                                            <a href="backend.php?page=lucky_number_edit&id=<?php echo $value['id'];?>" type="button" class="btn btn-dark"><i class="fa fa-edit"></i></a>
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