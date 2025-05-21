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
                            <li class="breadcrumb-item"><a href="backend.php?page=reserve_horoscope"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="backend.php?page=reserve_horoscope">จองคิวดูดวง</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
    <form method="post" action="backend.php?page=reserve_horoscope_edit&id=<?php echo $data['id'];?>" enctype="multipart/form-data" target="" id="form">
        <div class="row">
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>จองคิวดูดวง</h5>
                    </div>
                    <div class="card-body">
                            <div class="row">
                            
                                <div class="col-md-12">
                                    <div class="form-group" id="refresh_div">
                                        <?php if($data['image']!=""){?>
                                            <label for="name">รูปภาพ</label><br>
                                            <p class="box-image">
                                                <a href="./file/reserve_horoscope/<?php echo $data['image'];?>" target="_blank"><img src="./file/reserve_horoscope/<?php echo $data['image'];?>" style="width:300px;"></a>
                                                <button id="check_del" data-url="backend.php?page=reserve_horoscope_delete_image&id=<?php echo $data['id'];?>&image=<?php echo $data['image'];?>" onclick="delete_confirm()" style="width: 100%;" type="button" class="btn btn-danger"> <i class="fa fa-trash"></i> ลบ</button>
                                            </p>
                                        <?php }else{ ?>
                                            <label for="name">รูปภาพ</label>
                                            <input type="file" name="image" class="form-control" id="file_image"  placeholder="รูปภาพ" required>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="name">ชื่อ</label>
                                        <input type="text" name="name" class="form-control" id="name"  value="<?php echo $data['name'];?>" placeholder="ชื่อ" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">คำอธิบาย </label>
                                        <textarea name="description" class="form-control" id="description" style="height:500px;" placeholder="คำอธิบาย" required><?php echo $data['description'];?></textarea>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div  class="col-sm-12" >
                <button type="submit" class="btn btn-success" id="submit_form" style="float: right;" onclick="check_validattion()">บันทึก</button>
            </div>
            <!-- [ form-element ] end -->
        </div>
    </form>
        <!-- [ Main Content ] end -->

    </div>
</section>