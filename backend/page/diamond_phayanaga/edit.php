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
                            <li class="breadcrumb-item"><a href="backend.php?page=diamond_phayanaga">เพชรพญานาค</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <form method="post" action="backend.php?page=diamond_phayanaga_edit&id=<?php echo $data['id'];?>&action=save" enctype="multipart/form-data" target="" id="form">
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
                                        <?php if($data['image']!=""){?>
                                            <label for="name">รูปภาพ</label><br>
                                            <p class="box-image">
                                                <a href="./file/diamond_phayanaga/<?php echo $data['image'];?>" target="_blank"><img src="./file/diamond_phayanaga/<?php echo $data['image'];?>" style="width:300px;"></a>
                                                <button id="check_del" data-url="backend.php?page=diamond_phayanaga_delete_image&id=<?php echo $data['id'];?>&image=<?php echo $data['image'];?>" onclick="delete_confirm()" style="width: 100%;" type="button" class="btn btn-danger"> <i class="fa fa-trash"></i> ลบ</button>
                                            </p>
                                        <?php }else{ ?>
                                            <label for="name">รูปภาพ</label>
                                            <input type="file" name="image" class="form-control" id="image"  placeholder="รูปภาพ">
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="video">youtube</label>
                                        <input type="text" name="video" class="form-control" id="video"  placeholder="youtube"  value="<?php echo $data['video'];?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">ชื่อ</label>
                                        <input type="text" name="name" class="form-control" id="name"  placeholder="ชื่อ" value="<?php echo $data['name'];?>" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="description">รายละเอียด</label>
                                        <textarea name="description" class="form-control" id="description"  placeholder="รายละเอียด" style="height:500px;"  required><?php echo $data['description'];?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="price">ราคา</label>
                                        <input type="text" name="price" class="form-control" id="price"  placeholder="ราคา"  value="<?php echo $data['price'];?>" >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook">สถานะ</label>
                                        <select class="form-control" name="status" id="status">
                                            <option value="เปิด" <?php if($data['status']=="เปิด"){echo "selected";}?>>เปิด</option>
                                            <option value="ปิด" <?php if($data['status']=="ปิด"){echo "selected";}?>>ปิด</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pin">ปักหมุด</label>
                                        <input type="text" name="pin" class="form-control" id="pin"  placeholder="ตำแหน่งปักหมุด"  value="<?php echo $data['pin'];?>">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div  class="col-sm-12" >
                <input type="hidden" name="id" value="<?php echo $data['id'];?>">
                <button type="submit"  class="btn btn-success" id="submit_form" style="float: right;" onclick="check_validattion()">บันทึก</button>
            </div>
            <!-- [ form-element ] end -->
        </div>
    </form>
        <!-- [ Main Content ] end -->
    </div>
</section>