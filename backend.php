<?php session_start();

/*-- connect --*/
 include 'config.php';
 include 'backend/model/index.php';
 include 'backend/model/function.php';

/*-- page backend --*/

/*----------------login-----------------*/
    if(empty($_GET['page'])){
        $username = @$_POST['username'];
        $password = @md5($_POST['password']);


        $data = get_setting();

        if($username==$data['username'] || $password==$data['password']){
            $_SESSION['name'] = "administrator";
            header("Location: backend.php?page=profile");
        }else{
            $message = "กรอกชื่อผู้ใช้/รหัสผ่านให้ถูกต้อง";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }
        include 'backend/page/login/index.php';
/*----------------setting-----------------*/
    }elseif($_GET['page']=="setting"){

        $data = get_setting();

        include 'header_backend.php';
        include 'backend/page/setting/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="setting_edit"){

        $_POST['id']    = 1;
        $check = update_setting($_POST);

        if($check==1){

            $msg = "[ รหัสผ่านหลังบ้านถูกเปลี่ยน ]\nusername : huajainaka_admin"."\nรหัสผ่าน : ".$_POST['password']."\n";
                    line_notify($msg);

            unset($_SESSION["name"]); 
            echo
              "<script>
              alert('เปลี่ยนรหัสผ่านสำเร็จ');
              document.location.href = 'backend.php?page=logout';
              </script>
              ";
            exit;
        }else{
            echo ("<script LANGUAGE='JavaScript'>
            window.location.href='backend.php?page=setting&id=".$id."&alert=error';
            </script>");
        }

/*----------------profile-----------------*/
    }elseif($_GET['page']=="profile"){

        $data = get_profile();
        include 'header_backend.php';
        include 'backend/page/profile/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="profile_edit"){

        $id             = $_GET['id'];
        $logo           = isset($_FILES['logo']['name']) ? pathinfo($_FILES['logo']['name']) : '';
        $name           = isset($_POST['name'])          ? $_POST['name']           : '';
        $description    = isset($_POST['description'])   ? $_POST['description']    : '';
        $keywords       = isset($_POST['keywords'])      ? $_POST['keywords']       : '';
        $line           = isset($_POST['line'])          ? $_POST['line']           : '';
        $phone          = isset($_POST['phone'])         ? $_POST['phone']          : '';
        $facebook       = isset($_POST['facebook'])      ? $_POST['facebook']       : '';
        $twitter        = isset($_POST['twitter'])       ? $_POST['twitter']        : '';
        $instagram      = isset($_POST['instagram'])     ? $_POST['instagram']      : '';
        $youtube        = isset($_POST['youtube'])       ? $_POST['youtube']        : '';

        $bank_num1      = isset($_POST['bank_num1'])       ? $_POST['bank_num1']        : '';
        $bank_num2      = isset($_POST['bank_num2'])       ? $_POST['bank_num2']        : '';
        $bank_num3      = isset($_POST['bank_num3'])       ? $_POST['bank_num3']        : '';
        $bank_num4      = isset($_POST['bank_num4'])       ? $_POST['bank_num4']        : '';

        $bank_name1      = isset($_POST['bank_name1'])       ? $_POST['bank_name1']        : '';
        $bank_name2      = isset($_POST['bank_name2'])       ? $_POST['bank_name2']        : '';
        $bank_name3      = isset($_POST['bank_name3'])       ? $_POST['bank_name3']        : '';
        $bank_name4      = isset($_POST['bank_name4'])       ? $_POST['bank_name4']        : '';

        $data     = get_profile_id($id);
        /*=== upload file to folder */
        if($data['logo']==""){
            $file_name          = strtolower($logo['filename']).'-'.(mt_rand(10,9999)).'.'.$logo['extension'];
            $_POST['file_name'] = $file_name;
            $destination_path   = "file/profile/".$file_name;
            move_uploaded_file($_FILES['logo']['tmp_name'], $destination_path);
        }else{
            $_POST['file_name']  = $data['logo'];
        }

        $_POST['id']    = $id;
        $check = update_profile($_POST);

        if($check==1){
            echo ("<script LANGUAGE='JavaScript'>
            window.location.href='backend.php?page=profile&id=".$id."&alert=success';
            </script>");
        }else{
            echo ("<script LANGUAGE='JavaScript'>
            window.location.href='backend.php?page=profile&id=".$id."&alert=error';
            </script>");
        }
        
    }elseif($_GET['page']=="profile_delete_image"){

        @unlink("file/profile/".$_GET['logo']);     

        $check = update_profile_image($_GET['id']);

/*----------------menu-----------------*/
    }elseif($_GET['page']=="menu"){

        $result     = get_menu();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/menu/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="menu_edit"){

        $id   = $_GET['id'];

        if(!empty($_GET['action'])){
            $_POST['id']    = $id;
            $check          = update_menu($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=menu_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=menu_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_menu_id($id);
            include 'header_backend.php';
            include 'backend/page/menu/edit.php';
            include 'footer_backend.php';
        }

/*----------------banner-----------------*/
    }elseif($_GET['page']=="banner"){

        $result     = get_banner();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/banner/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="banner_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
            $_POST['file_name'] = $file_name;
            $destination_path   = "file/banner/".$file_name;
            move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);

            $check          = insert_banner($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=banner&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=banner&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/banner/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="banner_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_banner_id($id);
            if($data['image']==""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/banner/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_banner($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=banner_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=banner_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_banner_id($id);
            include 'header_backend.php';
            include 'backend/page/banner/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="banner_delete_image"){

         @unlink("file/banner/".$_GET['image']);     

        $check = update_banner_image($_GET['id']);

/*----------------register-----------------*/
    }elseif($_GET['page']=="register"){

        $result     = get_register();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header_backend.php';
        include 'backend/page/register/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="register_add"){

        if(!empty($_GET['action'])){
            $mail_check = get_register_dup($_POST['email']);

            if($mail_check['email']==""){
                $error_email_dup = "";
                $password = $_POST['password'];
                $_POST['password'] = md5($password);

                
                $check          = insert_register($_POST);
                if($check==1){

                    $msg = "[ แอดมินเพิ่มสมาชิกใหม่และระบบส่งแจ้งเตือนทางอีเมลให้ลูกค้าแล้ว ]\nชื่อ : ".$_POST['name']."\nอีเมล : ".$_POST['email']."\nเบอร์ : ".$_POST['phone']."\nรหัสผ่าน : ".$password."\n";
                    line_notify($msg);


                    $to = $_POST['email'];
                    $subject = "หัวใจนาคา | สมัครสมาชิก";
                    $message = "<html><body><h1>ยินดีต้อนรับสมาชิกใหม่หัวใจนาคา คุณ ".$_POST['name']."
                            อีเมล ".$_POST['email']."</h1>
                            <h3>แอดมินได้เพิ่มคุณเป็นสมาชิกเรียบร้อยแล้ว <br>username : ".$_POST['email']."
                <br>password : ".$password."  
                            <br>สามารถเข้าสู่ระบบโดยกรอกอีเมลและรหัสผ่าน ได้ที่ระบบหัวใจนาคา <b><a href='https://huajainaka.com/index.php?page=login'>คลิก</a></b></h3></body></html>";
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers .= "From: huajaina@huajainaka.com\r\n";
                        $headers .= "Reply-To: huajaina@huajainaka.com\r\n";
                        $headers .= "X-Mailer: PHP/" . phpversion();

                        mail($to, $subject, $message, $headers);

                    echo ("<script LANGUAGE='JavaScript'>
                        window.location.href='backend.php?page=register&alert=success';
                        </script>");
                }else{
                    echo ("<script LANGUAGE='JavaScript'>
                        window.location.href='backend.php?page=register&alert=error';
                        </script>");
                }
            }else{
                $error_email_dup = "*** อีเมลนี้เคยทำการสมัครสมาชิกแล้ว";

                include 'header_backend.php';
                include 'backend/page/register/add.php';
                include 'footer_backend.php';
            }

        }else{
            include 'header_backend.php';
            include 'backend/page/register/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="register_edit"){

        $id     = $_GET['id'];
        if(!empty($_GET['action'])){

            $mail_check = get_register_dup($_POST['email']);
            $data    = get_register_id($id);

            if($mail_check['email']=="" || $_POST['email']==$data['email']){
                $error_email_dup = "";

                $_POST['id']    = $id;
                $check = update_register($_POST);

                if($check==1){
                    echo ("<script LANGUAGE='JavaScript'>
                    window.location.href='backend.php?page=register&id=".$id."&alert=success';
                    </script>");
                }else{
                    echo ("<script LANGUAGE='JavaScript'>
                    window.location.href='backend.php?page=register&id=".$id."&alert=error';
                    </script>");
                }
            }else{
                $error_email_dup = "*** อีเมลนี้เคยทำการสมัครสมาชิกแล้ว";

                include 'header_backend.php';
                include 'backend/page/register/edit.php';
                include 'footer_backend.php';
            }
        }else{
            $data    = get_register_id($id);
            include 'header_backend.php';
            include 'backend/page/register/edit.php';
            include 'footer_backend.php';
        }

/*----------------member_course-----------------*/
    }elseif($_GET['page']=="member_course"){

        $result     = get_member_course();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/member_course/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="member_course_add"){

        $result_register    = get_register_open();
        $register           = array();
        while($row          = $result_register->fetch_assoc()){
            $register[]     = $row;
        }

        $result_course      = get_astrology_course();
        $course             = array();
        while($row          = $result_course->fetch_assoc()){
            $course[]       = $row;
        }

        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

             /*=== upload file to folder */
            $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
            $_POST['file_name'] = $file_name;
            $destination_path   = "file/member_course/".$file_name;
            move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            
            $check          = insert_member_course($_POST);
            if($check==1){

                echo ("<script LANGUAGE='JavaScript'>
                        window.location.href='backend.php?page=member_course&alert=success';
                        </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                        window.location.href='backend.php?page=member_course&alert=error';
                        </script>");
            }
        }else{
            include 'header_backend.php';
            include 'backend/page/member_course/add.php';
            include 'footer_backend.php';
        }
        

    }elseif($_GET['page']=="member_course_edit"){

        $id     = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_member_course_id($id);

            if($data['slip_payment']==""){

                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/member_course/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['slip_payment'];
            }
            $_POST['id']    = $id;
            $check = update_member_course($_POST);

            if($check==1){

                $data_all = get_member_courses_id($id);

                // print_r($data_all);

                        $to = $data_all['email'];
                        $subject = "หัวใจนาคา | ยืนยันการสั่งซื้อคอร์สเรียน";
                        $message = "<html><body><h1>สมาชิก หัวใจนาคา คุณ ".$data_all['name_register']."</h1>
                        <h3> คอร์สเรียนที่คุณสั่งซื้อคือ :  ".$data_all['name_course']." <br> 
                             ราคา : ".$data_all['price_course']." <br>
                             สถานะ : ".$data_all['status']." <br>
                             สาเหตุ : ".$data_all['comment']." <br>
                        </h3></body></html>";
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers .= "From: huajaina@huajainaka.com\r\n";
                        $headers .= "Reply-To: huajaina@huajainaka.com\r\n";
                        $headers .= "X-Mailer: PHP/" . phpversion();

                        mail($to, $subject, $message, $headers);

                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=member_course&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=member_course&id=".$id."&alert=error';
                </script>");
            }
        }else{
            $data           = get_member_course_id($id);
            $result_register    = get_register_open();
            $register           = array();
            while($row          = $result_register->fetch_assoc()){
                $register[]     = $row;
            }

            $result_course      = get_astrology_course();
            $course             = array();
            while($row          = $result_course->fetch_assoc()){
                $course[]       = $row;
            }
            include 'header_backend.php';
            include 'backend/page/member_course/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="member_course_delete_image"){

         @unlink("file/member_course/".$_GET['image']);     

        $check = update_member_course_image($_GET['id']);

        
/*----------------about-----------------*/
    }elseif($_GET['page']=="about"){

        $data = get_about();
        include 'header_backend.php';
        include 'backend/page/about/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="about_edit"){

        $id       = $_GET['id'];
        $image    = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';
        $data     = get_about_id($id);

        /*=== upload file to folder */
        if($data['image']==""){
            $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
            $_POST['file_name'] = $file_name;
            $destination_path   = "file/about/".$file_name;
            move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
        }else{
            $_POST['file_name']  = $data['image'];
        }

        $_POST['id']    = $id;
        $check = update_about($_POST);

        if($check==1){
            echo ("<script LANGUAGE='JavaScript'>
            window.location.href='backend.php?page=about&id=".$id."&alert=success';
            </script>");
        }else{
            echo ("<script LANGUAGE='JavaScript'>
            window.location.href='backend.php?page=about&id=".$id."&alert=error';
            </script>");
        }
        
    }elseif($_GET['page']=="about_delete_image"){

        @unlink("file/about/".$_GET['image']);     
        $check = update_about_image($_GET['id']);

/*----------------horoscope-----------------*/
    }elseif($_GET['page']=="horoscope"){

        $result     = get_horoscope();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/horoscope/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="horoscope_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/horoscope/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_horoscope($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=horoscope&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=horoscope&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/horoscope/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="horoscope_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_horoscope_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/horoscope/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_horoscope($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=horoscope_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=horoscope_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_horoscope_id($id);
            include 'header_backend.php';
            include 'backend/page/horoscope/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="horoscope_delete_image"){

         @unlink("file/horoscope/".$_GET['image']);     

        $check = update_horoscope_image($_GET['id']);

/*----------------reserve_horoscope-----------------*/
    }elseif($_GET['page']=="reserve_horoscope"){

        $data = get_reserve_horoscope();
        include 'header_backend.php';
        include 'backend/page/reserve_horoscope/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="reserve_horoscope_edit"){

        $id       = $_GET['id'];
        $image    = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';
        $data     = get_reserve_horoscope_id($id);

        /*=== upload file to folder */
        if($data['image']==""){
            $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
            $_POST['file_name'] = $file_name;
            $destination_path   = "file/reserve_horoscope/".$file_name;
            move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
        }else{
            $_POST['file_name']  = $data['image'];
        }

        $_POST['id']    = $id;
        $check = update_reserve_horoscope($_POST);

        if($check==1){
            echo ("<script LANGUAGE='JavaScript'>
            window.location.href='backend.php?page=reserve_horoscope&id=".$id."&alert=success';
            </script>");
        }else{
            echo ("<script LANGUAGE='JavaScript'>
            window.location.href='backend.php?page=reserve_horoscope&id=".$id."&alert=error';
            </script>");
        }
        
    }elseif($_GET['page']=="reserve_horoscope_delete_image"){

        @unlink("file/reserve_horoscope/".$_GET['image']);     
        $check = update_reserve_horoscope_image($_GET['id']);

/*----------------astrology_course-----------------*/
    }elseif($_GET['page']=="astrology_course"){

        $result     = get_astrology_course();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/astrology_course/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="astrology_course_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';
        $video = isset($_FILES['video']['name']) ? pathinfo($_FILES['video']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file image to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/astrology_course/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            /*=== upload file video to folder */
            if($video['filename']!=""){
                $video_name          = strtolower($video['filename']).'-'.(mt_rand(10,9999)).'.'.$video['extension'];
                $_POST['video_name'] = $video_name;
                $destination_path   = "file/astrology_course/".$video_name;
                move_uploaded_file($_FILES['video']['tmp_name'], $destination_path);
            }else{
                $_POST['video_name'] = "";
            }

            $check          = insert_astrology_course($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=astrology_course&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=astrology_course&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/astrology_course/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="astrology_course_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';
        $video = isset($_FILES['video']['name']) ? pathinfo($_FILES['video']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file image to folder */
            $data           = get_astrology_course_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/astrology_course/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }

            /*=== upload file video to folder */
            $data           = get_astrology_course_id($id);
            if($data['video']==""){
                if($video['filename']!=""){
                    $video_name          = strtolower($video['filename']).'-'.(mt_rand(10,9999)).'.'.$video['extension'];
                    $_POST['video_name'] = $video_name;
                    $destination_path   = "file/astrology_course/".$video_name;
                    move_uploaded_file($_FILES['video']['tmp_name'], $destination_path);
                }else{
                     $_POST['video_name']  = '';
                }
            }else{
                $_POST['video_name']  = $data['video'];
            }
            $_POST['id']    = $id;
            $check          = update_astrology_course($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=astrology_course_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=astrology_course_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_astrology_course_id($id);
            include 'header_backend.php';
            include 'backend/page/astrology_course/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="astrology_course_delete_image"){

         @unlink("file/astrology_course/".$_GET['image']);     

        $check = update_astrology_course_image($_GET['id']);

    }elseif($_GET['page']=="astrology_course_delete_video"){

         @unlink("file/astrology_course/".$_GET['video']);     

        $check = update_astrology_course_video($_GET['id']);

/*----------------holy_object-----------------*/
    }elseif($_GET['page']=="holy_object"){

        $result     = get_holy_object();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/holy_object/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="holy_object_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/holy_object/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_holy_object($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=holy_object&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=holy_object&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/holy_object/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="holy_object_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_holy_object_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/holy_object/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_holy_object($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=holy_object_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=holy_object_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_holy_object_id($id);
            include 'header_backend.php';
            include 'backend/page/holy_object/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="holy_object_delete_image"){

         @unlink("file/holy_object/".$_GET['image']);     

        $check = update_holy_object_image($_GET['id']);

/*----------------diamond_phayanaga-----------------*/
    }elseif($_GET['page']=="diamond_phayanaga"){

        $result     = get_diamond_phayanaga();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/diamond_phayanaga/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="diamond_phayanaga_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/diamond_phayanaga/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_diamond_phayanaga($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=diamond_phayanaga&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=diamond_phayanaga&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/diamond_phayanaga/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="diamond_phayanaga_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_diamond_phayanaga_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/diamond_phayanaga/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_diamond_phayanaga($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=diamond_phayanaga_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=diamond_phayanaga_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_diamond_phayanaga_id($id);
            include 'header_backend.php';
            include 'backend/page/diamond_phayanaga/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="diamond_phayanaga_delete_image"){

         @unlink("file/diamond_phayanaga/".$_GET['image']);     

        $check = update_diamond_phayanaga_image($_GET['id']);

/*----------------wallpaper-----------------*/
    }elseif($_GET['page']=="wallpaper"){

        $result     = get_wallpaper();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/wallpaper/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="wallpaper_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/wallpaper/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_wallpaper($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=wallpaper&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=wallpaper&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/wallpaper/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="wallpaper_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_wallpaper_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/wallpaper/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_wallpaper($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=wallpaper_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=wallpaper_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_wallpaper_id($id);
            include 'header_backend.php';
            include 'backend/page/wallpaper/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="wallpaper_delete_image"){

         @unlink("file/wallpaper/".$_GET['image']);     

        $check = update_wallpaper_image($_GET['id']);

/*----------------stickerline-----------------*/
    }elseif($_GET['page']=="stickerline"){

        $result     = get_stickerline();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/stickerline/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="stickerline_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/stickerline/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_stickerline($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=stickerline&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=stickerline&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/stickerline/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="stickerline_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_stickerline_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/stickerline/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_stickerline($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=stickerline_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=stickerline_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_stickerline_id($id);
            include 'header_backend.php';
            include 'backend/page/stickerline/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="stickerline_delete_image"){

         @unlink("file/stickerline/".$_GET['image']);     

        $check = update_stickerline_image($_GET['id']);

/*----------------lucky_number-----------------*/
    }elseif($_GET['page']=="lucky_number"){

        $result     = get_lucky_number();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/lucky_number/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="lucky_number_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/lucky_number/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_lucky_number($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=lucky_number&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=lucky_number&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/lucky_number/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="lucky_number_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_lucky_number_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/lucky_number/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_lucky_number($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=lucky_number_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=lucky_number_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_lucky_number_id($id);
            include 'header_backend.php';
            include 'backend/page/lucky_number/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="lucky_number_delete_image"){

         @unlink("file/lucky_number/".$_GET['image']);     

        $check = update_lucky_number_image($_GET['id']);

/*----------------auspicious_registration-----------------*/
    }elseif($_GET['page']=="auspicious_registration"){

        $result     = get_auspicious_registration();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/auspicious_registration/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="auspicious_registration_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/auspicious_registration/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_auspicious_registration($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=auspicious_registration&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=auspicious_registration&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/auspicious_registration/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="auspicious_registration_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_auspicious_registration_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/auspicious_registration/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_auspicious_registration($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=auspicious_registration_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=auspicious_registration_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_auspicious_registration_id($id);
            include 'header_backend.php';
            include 'backend/page/auspicious_registration/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="auspicious_registration_delete_image"){

         @unlink("file/auspicious_registration/".$_GET['image']);     

        $check = update_auspicious_registration_image($_GET['id']);

/*----------------color_car-----------------*/
    }elseif($_GET['page']=="color_car"){

        $result     = get_color_car();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/color_car/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="color_car_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/color_car/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_color_car($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=color_car&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=color_car&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/color_car/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="color_car_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_color_car_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/color_car/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_color_car($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=color_car_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=color_car_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_color_car_id($id);
            include 'header_backend.php';
            include 'backend/page/color_car/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="color_car_delete_image"){

         @unlink("file/color_car/".$_GET['image']);     

        $check = update_color_car_image($_GET['id']);

/*----------------good_time-----------------*/
    }elseif($_GET['page']=="good_time"){

        $result     = get_good_time();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/good_time/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="good_time_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/good_time/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_good_time($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=good_time&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=good_time&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/good_time/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="good_time_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_good_time_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/good_time/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_good_time($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=good_time_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=good_time_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_good_time_id($id);
            include 'header_backend.php';
            include 'backend/page/good_time/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="good_time_delete_image"){

         @unlink("file/good_time/".$_GET['image']);     

        $check = update_good_time_image($_GET['id']);

/*----------------enhance_luck-----------------*/
    }elseif($_GET['page']=="enhance_luck"){

        $result     = get_enhance_luck();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/enhance_luck/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="enhance_luck_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/enhance_luck/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_enhance_luck($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=enhance_luck&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=enhance_luck&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/enhance_luck/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="enhance_luck_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_enhance_luck_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/enhance_luck/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_enhance_luck($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=enhance_luck_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=enhance_luck_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_enhance_luck_id($id);
            include 'header_backend.php';
            include 'backend/page/enhance_luck/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="enhance_luck_delete_image"){

         @unlink("file/enhance_luck/".$_GET['image']);     

        $check = update_enhance_luck_image($_GET['id']);

/*----------------story-----------------*/
    }elseif($_GET['page']=="story"){

        $result     = get_story();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/story/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="story_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/story/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_story($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=story&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=story&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/story/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="story_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_story_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/story/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_story($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=story_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=story_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_story_id($id);
            include 'header_backend.php';
            include 'backend/page/story/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="story_delete_image"){

         @unlink("file/story/".$_GET['image']);     

        $check = update_story_image($_GET['id']);

/*----------------meditate-----------------*/
    }elseif($_GET['page']=="meditate"){

        $result     = get_meditate();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/meditate/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="meditate_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/meditate/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_meditate($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=meditate&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=meditate&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/meditate/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="meditate_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_meditate_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/meditate/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_meditate($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=meditate_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=meditate_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_meditate_id($id);
            include 'header_backend.php';
            include 'backend/page/meditate/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="meditate_delete_image"){

         @unlink("file/meditate/".$_GET['image']);     

        $check = update_meditate_image($_GET['id']);

/*----------------phrathat-----------------*/
    }elseif($_GET['page']=="phrathat"){

        $result     = get_phrathat();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/phrathat/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="phrathat_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/phrathat/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_phrathat($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=phrathat&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=phrathat&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/phrathat/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="phrathat_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_phrathat_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/phrathat/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_phrathat($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=phrathat_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=phrathat_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_phrathat_id($id);
            include 'header_backend.php';
            include 'backend/page/phrathat/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="phrathat_delete_image"){

         @unlink("file/phrathat/".$_GET['image']);     

        $check = update_phrathat_image($_GET['id']);

/*----------------phrathat_year-----------------*/
    }elseif($_GET['page']=="phrathat_year"){

        $result     = get_phrathat_year();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/phrathat_year/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="phrathat_year_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/phrathat_year/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_phrathat_year($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=phrathat_year&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=phrathat_year&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/phrathat_year/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="phrathat_year_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_phrathat_year_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/phrathat_year/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_phrathat_year($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=phrathat_year_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=phrathat_year_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_phrathat_year_id($id);
            include 'header_backend.php';
            include 'backend/page/phrathat_year/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="phrathat_year_delete_image"){

         @unlink("file/phrathat_year/".$_GET['image']);     

        $check = update_phrathat_year_image($_GET['id']);

/*----------------naka_history-----------------*/
    }elseif($_GET['page']=="naka_history"){

        $result     = get_naka_history();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/naka_history/index.php';
        include 'footer_backend.php';

    }elseif($_GET['page']=="naka_history_add"){
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            if($image['filename']!=""){
                $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                $_POST['file_name'] = $file_name;
                $destination_path   = "file/naka_history/".$file_name;
                move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
            }else{
                $_POST['file_name'] = "";
            }

            $check          = insert_naka_history($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=naka_history&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=naka_history&alert=error';
                </script>");
            }

        }else{

            include 'header_backend.php';
            include 'backend/page/naka_history/add.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="naka_history_edit"){
        $id    = $_GET['id'];
        $image = isset($_FILES['image']['name']) ? pathinfo($_FILES['image']['name']) : '';

        if(!empty($_GET['action'])){

            /*=== upload file to folder */
            $data           = get_naka_history_id($id);
            if($data['image']==""){
                if($image['filename']!=""){
                    $file_name          = strtolower($image['filename']).'-'.(mt_rand(10,9999)).'.'.$image['extension'];
                    $_POST['file_name'] = $file_name;
                    $destination_path   = "file/naka_history/".$file_name;
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination_path);
                }else{
                     $_POST['file_name']  = '';
                }
            }else{
                $_POST['file_name']  = $data['image'];
            }
            $_POST['id']    = $id;
            $check          = update_naka_history($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=naka_history_edit&id=".$id."&alert=success';
                </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='backend.php?page=naka_history_edit&id=".$id."&alert=error';
                </script>");
            }

        }else{

            $data           = get_naka_history_id($id);
            include 'header_backend.php';
            include 'backend/page/naka_history/edit.php';
            include 'footer_backend.php';
        }

    }elseif($_GET['page']=="naka_history_delete_image"){

         @unlink("file/naka_history/".$_GET['image']);     

        $check = update_naka_history_image($_GET['id']);
        
/*----------------contact-----------------*/
    }elseif($_GET['page']=="contact"){

        $result     = get_contact();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/contact/index.php';
        include 'footer_backend.php';
/*----------------comment-----------------*/
    }elseif($_GET['page']=="comment"){

        $result     = get_comment();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header_backend.php';
        include 'backend/page/comment/index.php';
        include 'footer_backend.php';
/*----------------logout-----------------*/
    }elseif($_GET['page']=="logout"){

        unset($_SESSION["name"]); 
        // session_unset(); 
        // session_destroy(); 
        header("Location: backend.php");
        
    }


    function line_notify($msg){
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        date_default_timezone_set("Asia/Bangkok");

        $sToken = "uuUyjXayme2k6R0agwW9er2h1A4GL9KDX2YlFQnkJBw";
        $sMessage = $msg;

                
        $chOne = curl_init(); 
        curl_setopt( $chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify"); 
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYHOST, 0); 
        curl_setopt( $chOne, CURLOPT_SSL_VERIFYPEER, 0); 
        curl_setopt( $chOne, CURLOPT_POST, 1); 
        curl_setopt( $chOne, CURLOPT_POSTFIELDS, "message=".$sMessage); 
        $headers = array( 'Content-type: application/x-www-form-urlencoded', 'Authorization: Bearer '.$sToken.'', );
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers); 
        curl_setopt( $chOne, CURLOPT_RETURNTRANSFER, 1); 
        $result = curl_exec( $chOne ); 

        //Result error 
        if(curl_error($chOne)) 
        { 
            echo 'error:' . curl_error($chOne); 
        } 
        else { 
            $result_ = json_decode($result, true); 
            echo "status : ".$result_['status']; echo "message : ". $result_['message'];
        } 
        curl_close( $chOne );   
    }


?>