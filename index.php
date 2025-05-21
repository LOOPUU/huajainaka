<?php session_start();

/*-- connect --*/
 include 'config.php';
 include 'frontend/model/index.php';
 include 'frontend/model/function.php';

 

/*-- page frontend --*/

    $data_profile = get_profile();

    $result     = get_menu();
    $data_menu  = array();
    while($row  = $result->fetch_assoc()){
        $data_menu[] = $row;
    }

    if(empty($_GET['page'])){

        $result_banner  = get_banner();
        $data_banner    = array();
        while($row  = $result_banner->fetch_assoc()){
            $data_banner[] = $row;
        }

        $data_about = get_about_id(1);


        if($_SESSION['id_frontend'] !=""){
                $result1     = get_member_course_list($_SESSION['id_frontend']);
                $data_course1    = array();
                $i=0;while($row  = $result1->fetch_assoc()){
                    $data_course1[] = $row['course_id'];
                $i++;}

                $comma_separated = implode(",", $data_course1);

                if(!empty($comma_separated)){

                    $result_course     = get_astrology_course_limit_comma($comma_separated);
                    $data_course       = array();
                    while($row  = $result_course->fetch_assoc()){
                        $data_course[] = $row;
                    }

                }else{
                    $result_course     = get_astrology_course_limit();
                    $data_course       = array();
                    while($row  = $result_course->fetch_assoc()){
                        $data_course[] = $row;
                    }
                }

        }else{

            $result_course     = get_astrology_course_limit();
            $data_course       = array();
            while($row  = $result_course->fetch_assoc()){
                $data_course[] = $row;
            }

        }
        

        $result_object     = get_holy_object_limit();
        $data_object       = array();
        while($row  = $result_object->fetch_assoc()){
            $data_object[] = $row;
        }

        $result_horoscope   = get_horoscope_limit();
        $data_horoscope     = array();
        while($row  = $result_horoscope->fetch_assoc()){
            $data_horoscope[] = $row;
        }

        include 'header.php';
        include 'frontend/page/home/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="index"){

        $result_banner  = get_banner();
        $data_banner    = array();
        while($row  = $result_banner->fetch_assoc()){
            $data_banner[] = $row;
        }

        $data_about = get_about_id(1);

        if($_SESSION['id_frontend'] !=""){
            $result1     = get_member_course_list($_SESSION['id_frontend']);
                $data_course1    = array();
                $i=0;while($row  = $result1->fetch_assoc()){
                    $data_course1[] = $row['course_id'];
                $i++;}

                $comma_separated = implode(",", $data_course1);

                if(!empty($comma_separated)){

                    $result_course     = get_astrology_course_limit_comma($comma_separated);
                    $data_course       = array();
                    while($row  = $result_course->fetch_assoc()){
                        $data_course[] = $row;
                    }
                }else{
                    $result_course     = get_astrology_course_limit();
                    $data_course       = array();
                    while($row  = $result_course->fetch_assoc()){
                        $data_course[] = $row;
                    }
                }
        }else{
            $result_course     = get_astrology_course_limit();
            $data_course       = array();
            while($row  = $result_course->fetch_assoc()){
                $data_course[] = $row;
            }
        }
        

        $result_object     = get_holy_object_limit();
        $data_object       = array();
        while($row  = $result_object->fetch_assoc()){
            $data_object[] = $row;
        }

        $result_horoscope   = get_horoscope_limit();
        $data_horoscope     = array();
        while($row  = $result_horoscope->fetch_assoc()){
            $data_horoscope[] = $row;
        }

        include 'header.php';
        include 'frontend/page/home/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="about"){
        $data_about = get_about_id(1);
        include 'header.php';
        include 'frontend/page/about/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="horoscope"){
        $result     = get_horoscope();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/horoscope/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="horoscope_detail"){
        $id    = $_GET['id'];
        $data  = get_horoscope_id($id);
    
        $data_comment = get_comment("horoscope",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "horoscope";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=horoscope_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=horoscope_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }

        include 'header.php';
        include 'frontend/page/horoscope/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="reserve_horoscope"){

        $data     = get_reserve_horoscope_id(1);
        include 'header.php';
        include 'frontend/page/reserve_horoscope/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="reserve_horoscope_detail"){
        include 'header.php';
        include 'frontend/page/reserve_horoscope/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="astrology_course"){

            $result     = get_astrology_course();
                $data       = array();
                while($row  = $result->fetch_assoc()){
                    $data[] = $row;
                }

                if($_SESSION['id_frontend'] !=""){
                   // echo "มี".$_SESSION['id_frontend'];

                    $result     = get_member_course_list($_SESSION['id_frontend']);
                    $data_course    = array();
                    $i=0;while($row  = $result->fetch_assoc()){
                        $data_course[] = $row['course_id'];
                    $i++;}

                    $comma_separated = implode(",", $data_course);

                    if(!empty($comma_separated)){
                        $result     = get_astrology_course_comma($comma_separated);
                        $data       = array();
                        while($row  = $result->fetch_assoc()){
                            $data[] = $row;
                        }
                    }else{
                        $result     = get_astrology_course();
                        $data       = array();
                        while($row  = $result->fetch_assoc()){
                            $data[] = $row;
                        }
                    }

                }else{
                    $result     = get_astrology_course();
                    $data       = array();
                    while($row  = $result->fetch_assoc()){
                        $data[] = $row;
                    }
                }

        include 'header.php';
        include 'frontend/page/astrology_course/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="astrology_course_detail"){
        $id    = $_GET['id'];
        $data  = get_astrology_course_id($id);
        include 'header.php';
        include 'frontend/page/astrology_course/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="register_course"){
        include 'header.php';
        include 'frontend/page/register/register_course.php';
        include 'footer.php';

    }elseif($_GET['page']=="register_payment"){
        include 'header.php';
        include 'frontend/page/register/register_payment.php';
        include 'footer.php';

    }elseif($_GET['page']=="register_payment_submit"){
        include 'header.php';
        include 'frontend/page/register/submit.php';
        include 'footer.php';

    }elseif($_GET['page']=="holy_object"){
        $result     = get_holy_object();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/holy_object/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="holy_object_detail"){
        $id    = $_GET['id'];
        $data           = get_holy_object_id($id);

        $data_comment = get_comment("holy_object",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "holy_object";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=holy_object_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=holy_object_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }


        $msg = "[ มีคนแอบมาส่องวัตถุมงคล ]
        \nชื่อสินค้า : ".$data['name']."";

        line_notify($msg);

        include 'header.php';
        include 'frontend/page/holy_object/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="diamond_phayanaga"){
        $result     = get_diamond_phayanaga();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/diamond_phayanaga/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="diamond_phayanaga_detail"){
        $id    = $_GET['id'];
        $data           = get_diamond_phayanaga_id($id);

        $data_comment = get_comment("diamond_phayanaga",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "diamond_phayanaga";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น เพชรพญานาค หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=diamond_phayanaga_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=diamond_phayanaga_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }
        include 'header.php';
        include 'frontend/page/diamond_phayanaga/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="wallpaper"){
        $result     = get_wallpaper();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/wallpaper/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="wallpaper_detail"){
        $id    = $_GET['id'];
        $data           = get_wallpaper_id($id);

        $data_comment = get_comment("wallpaper",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "wallpaper";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น วอลเปเอร์ หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=wallpaper_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=wallpaper_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }
        include 'header.php';
        include 'frontend/page/wallpaper/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="stickerline"){
        $result     = get_stickerline();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/stickerline/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="stickerline_detail"){
        $id    = $_GET['id'];
        $data           = get_stickerline_id($id);

        $data_comment = get_comment("stickerline",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "stickerline";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น สติ๊กเกอร์ไลน์ หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=stickerline_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=stickerline_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }
        include 'header.php';
        include 'frontend/page/stickerline/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="lucky_number"){

        $result     = get_lucky_number();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }

        include 'header.php';
        include 'frontend/page/lucky_number/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="lucky_number_detail"){

        $id    = $_GET['id'];
        $data           = get_lucky_number_id($id);

        $data_comment = get_comment("lucky_number",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "lucky_number";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น เบอร์เสริมดวง หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=lucky_number_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=lucky_number_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }

        include 'header.php';
        include 'frontend/page/lucky_number/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="auspicious_registration"){

        $result     = get_auspicious_registration();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/auspicious_registration/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="auspicious_registration_detail"){

        $id    = $_GET['id'];
        $data  = get_auspicious_registration_id($id);

        $data_comment = get_comment("auspicious_registration",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "auspicious_registration";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น ทะเบียนรถมงคล หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=auspicious_registration_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=auspicious_registration_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }

        include 'header.php';
        include 'frontend/page/auspicious_registration/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="color_car"){
        $result     = get_color_car();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/color_car/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="color_car_detail"){
        $id    = $_GET['id'];
        $data  = get_color_car_id($id);

        $data_comment = get_comment("color_car",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "color_car";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น สีรถถูกโฉลก หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=color_car_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=color_car_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }
        include 'header.php';
        include 'frontend/page/color_car/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="good_time"){
        $result     = get_good_time();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/good_time/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="good_time_detail"){
        $id    = $_GET['id'];
        $data  = get_good_time_id($id);

        $data_comment = get_comment("good_time",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "good_time";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น ฤกษ์งามยามดี หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=good_time_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=good_time_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }
        include 'header.php';
        include 'frontend/page/good_time/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="enhance_luck"){
        $result     = get_enhance_luck();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/enhance_luck/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="enhance_luck_detail"){
        $id    = $_GET['id'];
        $data  = get_enhance_luck_id($id);

        $data_comment = get_comment("enhance_luck",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "enhance_luck";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น เสริมดวงตามราศี หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=enhance_luck_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=enhance_luck_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }
        include 'header.php';
        include 'frontend/page/enhance_luck/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="story"){
        $result     = get_story();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/story/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="story_detail"){
        $id    = $_GET['id'];
        $data  = get_story_id($id);

        $data_comment = get_comment("story",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "story";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น เรื่องเล่าพระอริยเจ้า หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=story_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=story_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }
        include 'header.php';
        include 'frontend/page/story/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="meditate"){
        $result     = get_meditate();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/meditate/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="meditate_detail"){
        $id    = $_GET['id'];
        $data  = get_meditate_id($id);

        $data_comment = get_comment("meditate",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "meditate";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น การปฏิบัติสมาธิ กรรมฐาน หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=meditate_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=meditate_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }
        include 'header.php';
        include 'frontend/page/meditate/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="phrathat"){
        $result     = get_phrathat();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/phrathat/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="phrathat_detail"){
        $id    = $_GET['id'];
        $data  = get_phrathat_id($id);

        $data_comment = get_comment("phrathat",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "phrathat";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น พระธาตุประจำวันเกิด หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=phrathat_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=phrathat_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }
        include 'header.php';
        include 'frontend/page/phrathat/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="phrathat_year"){
        $result     = get_phrathat_year();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/phrathat_year/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="phrathat_year_detail"){
        $id    = $_GET['id'];
        $data  = get_phrathat_year_id($id);

        $data_comment = get_comment("phrathat_year",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "phrathat_year";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น พระธาตุประจำปีเกิด หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=phrathat_year_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=phrathat_year_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }
        include 'header.php';
        include 'frontend/page/phrathat_year/detail.php';
        include 'footer.php';

    }elseif($_GET['page']=="naka_history"){
        $result     = get_naka_history();
        $data       = array();
        while($row  = $result->fetch_assoc()){
            $data[] = $row;
        }
        include 'header.php';
        include 'frontend/page/naka_history/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="naka_history_detail"){
        $id    = $_GET['id'];
        $data  = get_naka_history_id($id);

        $data_comment = get_comment("naka_history",$id);
        if($_GET['action']          =="save"){
            $_POST['page']          = "naka_history";
            $_POST['id_comment']    = $id;
            $check            = insert_comment($_POST);
            if($check==1){

                $msg = "[ มีคนแสดงความคิดเห็น ประวัติพญานาค หัวข้อ ".$data['name']."]
                \nชื่อ : ".$_POST['name']."
                \nคอมเม้นต์ : ".$_POST['comment']."";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=naka_history_detail&id=".$id."&alert=success#comment';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=naka_history_detail&id=".$id."&alert=error#comment';
                            </script>");
            }  
        }
        include 'header.php';
        include 'frontend/page/naka_history/detail.php';
        include 'footer.php';


    }elseif($_GET['page']=="contact"){
        if(@$_GET['action']     =="save"){
            $check            = insert_contact($_POST);
            if($check==1){

                $msg = "[ ติดต่อเรา ]\nชื่อ : ".$_POST['name']."\nอีเมล : ".$_POST['email']."\nหัวข้อ : ".$_POST['topic']."\nรายละเอียด : ".$_POST['description']."\n";

                line_notify($msg);

                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=contact&alert=success';
                            </script>");
            }else{
                echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=contact&alert=error';
                            </script>");
            }  
        }
        include 'header.php';
        include 'frontend/page/contact/index.php';
        include 'footer.php';

    }elseif($_GET['page']=="register"){

        if(!empty($_GET['action'])){

            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            if($password != $confirm_password){
                $error_password = "*** ยืนยันรหัสผ่านไม่ตรงกับรหัสผ่าน";
            }elseif($_POST['email']!=""){
                $email_dup = get_register_email_duplicate($_POST['email']);
                
                if($email_dup!=0){
                    $error_email_dup = "*** อีเมลนี้เคยทำการสมัครสมาชิกแล้ว"; 
                }else{
                    $_POST['birthday'] = $_POST['year_birthday'].'-'.$_POST['month_birthday'].'-'.$_POST['day_birthday'];
                    $_POST['password'] = md5($_POST['password']);
                    $check          = insert_register($_POST);  
                    if($check==1){

                        $msg = "[ สมัครสมาชิกใหม่ ]\nชื่อ : ".$_POST['name']."\nอีเมล : ".$_POST['email']."\nเบอร์โทร : ".$_POST['phone'];

                        line_notify($msg);

                        $to = $_POST['email'];
                        $subject = "หัวใจนาคา | สมัครสมาชิก";
                        $message = "<html><body><h1>ยินดีต้อนรับสมาชิกใหม่หัวใจนาคา คุณ ".$_POST['name']."</h1><h3>คุณได้ทำการสมัครเป็นสมาชิกกับทางระบบเรียบร้อยแล้ว <br> สามารถเข้าสู่ระบบโดยกรอกอีเมลและรหัสผ่าน ได้ที่ระบบหัวใจนาคา <b><a href='https://huajainaka.com/index.php?page=login'>คลิก</a></b></h3></body></html>";
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers .= "From: huajaina@huajainaka.com\r\n";
                        $headers .= "Reply-To: huajaina@huajainaka.com\r\n";
                        $headers .= "X-Mailer: PHP/" . phpversion();

                        mail($to, $subject, $message, $headers);

                        echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=register&alert=success';
                            </script>");
                    }else{
                        echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=register&alert=error';
                            </script>");
                    }  
                }
            }

            include 'header.php';
            include 'frontend/page/register/index.php';
            include 'footer.php';

        }else{

            include 'header.php';
            include 'frontend/page/register/index.php';
            include 'footer.php';

        }

    }elseif($_GET['page']=="login"){
        if(!empty($_GET['action'])){

            if($_POST['email']!=""){
                $data = get_register_email($_POST['email']);
                $email_dup = get_register_email_duplicate($_POST['email']);

                if(!empty($data['email'])){
                    $password_db    = $data['password'];
                    $password_post  = md5($_POST['password']);

                    if($email_dup==0){

                        $message_email = "*** อีเมลนี้ไม่พบในระบบกรุณาทำการสมัครสมาชิก";

                    }elseif($password_db!=$password_post){

                        $message_password = "*** กรอกรหัสผ่านไม่ถูกต้อง";

                    }else{

                        $_SESSION['id_frontend']     = $data['id'];
                        $_SESSION['name_frontend']   = $data['name'];
                        $_SESSION['email_frontend']  = $data['email'];

                        echo ("<script LANGUAGE='JavaScript'>
                                window.location.href='index.php?page=member';
                                </script>");

                    }
                }else{
                    echo
                      "<script>
                      alert('ไม่สามารถเข้าสู่ระบบได้ เนื่องจากไม่มีอีเมลนี้สมัครอยู่');
                      document.location.href = 'index.php?page=login';
                      </script>
                      ";
                    exit;
                }
            }

            include 'header.php';
            include 'frontend/page/login/index.php';
            include 'footer.php';

        }else{

            include 'header.php';
            include 'frontend/page/login/index.php';
            include 'footer.php';

        }
       
    }elseif($_GET['page']=="forget_password"){
        if(!empty($_GET['action'])){

            if($_POST['email']!=""){      
                $email_dup = get_register_email_duplicate($_POST['email']);          
                if($email_dup!=0){
                    $to = $_POST['email'];
                        $subject = "หัวใจนาคา | เปลี่ยนรหัสผ่าน";
                        $message = "<html><body><h1>ยินดีต้อนรับสู่หัวใจนาคา คุณ ".$_POST['name']."</h1><h3>สามารถเปลี่ยนรหัสผ่านได้ที่นี่ <b><a href='https://huajainaka.com/index.php?page=change_password&email=".$_POST['email']."'>คลิก</a></b></h3></body></html>";
                        $headers = "MIME-Version: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        $headers .= "From: huajaina@huajainaka.com\r\n";
                        $headers .= "Reply-To: huajaina@huajainaka.com\r\n";
                        $headers .= "X-Mailer: PHP/" . phpversion();

                        $retval = mail($to, $subject, $message, $headers);

                        if( $retval == true ) {
                           $alert_success = "คุณสามารถเปลี่ยนรหัสผ่านของคุณได้แล้ว<br> กรุณาตรวจสอบข้อความในอีเมล.";
                        }else {
                           echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=forget_password&alert=error';
                            </script>");
                        }
                    
                }else{
                        $error_email = "*** อีเมลนี้ไม่พบในระบบ กรุณาตรวจสอบ"; 
                }
            }

            include 'header.php';
            include 'frontend/page/forget_password/index.php';
            include 'footer.php';

        }else{

            include 'header.php';
            include 'frontend/page/forget_password/index.php';
            include 'footer.php';

        }
    }elseif($_GET['page']=="change_password"){
        if(!empty($_GET['action'])){

            $password = $_POST['password'];
            $confirm_password = $_POST['confirm_password'];

            if($password != $confirm_password){
                $error_password = "*** ยืนยันรหัสผ่านไม่ตรงกับรหัสผ่านใหม่";
            }else{
                $_POST['email'] = $_GET['email'];
                $_POST['password'] = md5($_POST['password']);
                    $check          = update_password($_POST);  
                    if($check==1){
                        echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=change_password&alert=success';
                            </script>");
                    }else{
                        echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=change_password&email=".$_GET['email']."&alert=error';
                            </script>");
                    }  
            }

            include 'header.php';
            include 'frontend/page/forget_password/change_password.php';
            include 'footer.php';

        }else{

            include 'header.php';
            include 'frontend/page/forget_password/change_password.php';
            include 'footer.php';

        }

    }elseif($_GET['page']=="member"){

        if(!empty($_SESSION["name_frontend"])){

            $data = get_register_email($_SESSION['email_frontend']);

            $date = date_create($data['birthday']);
            $year_birthday  = date_format($date,"Y");
            $month_birthday = date_format($date,"m");
            $day_birthday   = date_format($date,"d");
 
            if(@$_GET['action']=="save_profile"){

                $_POST['birthday']  = $_POST['year_birthday'].'-'.$_POST['month_birthday'].'-'.$_POST['day_birthday'];
                $_POST['status']    = "เปิด";

                $check          = update_register_member($_POST);  
                if($check==1){
                    echo ("<script LANGUAGE='JavaScript'>
                        window.location.href='index.php?page=member&alert=success';
                        </script>");
                }else{
                    echo ("<script LANGUAGE='JavaScript'>
                        window.location.href='index.php?page=member&alert=error';
                        </script>");
                }  
                    

                include 'header.php';
                include 'frontend/page/member/index.php';
                include 'footer.php';

            }elseif(@$_GET['action']=="save_password"){

                $_POST['email'] = $_SESSION['email_frontend'];
                $password = $_POST['password'];
                $confirm_password = $_POST['confirm_password'];

                if($password != $confirm_password){
                    $error_password = "*** ยืนยันรหัสผ่านไม่ตรงกับรหัสผ่าน";

                }elseif($_POST['email']!=""){

                        $_POST['password'] = md5($_POST['password']);
                        $check          = update_password($_POST);  
                        if($check==1){

                            echo ("<script LANGUAGE='JavaScript'>
                                window.location.href='index.php?page=member&alert=success2';
                                </script>");
                        }else{
                            echo ("<script LANGUAGE='JavaScript'>
                                window.location.href='index.php?page=member&alert=error';
                                </script>");
                        }  
                }

                include 'header.php';
                include 'frontend/page/member/index.php';
                include 'footer.php';

            }else{

                include 'header.php';
                include 'frontend/page/member/index.php';
                include 'footer.php';
            }

        }else{
            echo
              "<script>
              alert('กรุณาเข้าสู่ระบบก่อนทุกครั้ง');
              document.location.href = 'index.php?page=login';
              </script>
              ";
            exit;
        }

    }elseif($_GET['page']=="member_course"){

        if(!empty($_SESSION["name_frontend"])){

            $result_course  = get_member_course_list($_SESSION['id_frontend']);
            $data_course    = array();
            while($row  = $result_course->fetch_assoc()){
                $data_course[] = $row;
            }
            include 'header.php';
            include 'frontend/page/member/course.php';
            include 'footer.php';

        }else{
            echo
              "<script>
              alert('กรุณาเข้าสู่ระบบก่อนทุกครั้ง');
              document.location.href = 'index.php?page=login';
              </script>
              ";
            exit;
        }

    }elseif($_GET['page']=="member_learn"){
        if(!empty($_SESSION["name_frontend"])){

            $id    = $_GET['id'];
            $data  = get_astrology_course_id($id);

            include 'header.php';
            include 'frontend/page/member/learn.php';
            include 'footer.php';
        }else{
            echo
              "<script>
              alert('กรุณาเข้าสู่ระบบก่อนทุกครั้ง');
              document.location.href = 'index.php?page=login';
              </script>
              ";
            exit;
        }

    }elseif($_GET['page']=="member_upload_slip"){
        if(!empty($_SESSION["name_frontend"])){

            $id    = $_GET['id'];
            $data  = get_astrology_course_id($id);
            $data_profile  = get_profile();
            $data_member = get_register_email($_SESSION['email_frontend']);
            
        $check_c = get_member_course_id_user_ids($id,$_SESSION['id_frontend']);   


            

                if(@$_GET['action']=="save"){

                    $slip_payment       = isset($_FILES['slip_payment']['name']) ? pathinfo($_FILES['slip_payment']['name']) : '';
                    $file_name          = strtolower($slip_payment['filename']).'-'.(mt_rand(10,9999)).'.'.$slip_payment['extension'];

                    $course_id              = $_POST['course_id'];

                    $_POST['course_id']     = $_POST['course_id'];
                    $_POST['user_id']       = $_SESSION['id_frontend'];
                    $_POST['status']        = "รอชำระเงิน";
                    $_POST['file_name']     = $file_name;
                    $_POST['comment']       = '';
                    $destination_path       = "file/member_course/".$file_name;
                    move_uploaded_file($_FILES['slip_payment']['tmp_name'], $destination_path);


                    $check_data_course_member = get_member_course_id_user_id($course_id,$_SESSION['id_frontend']);
                    //echo "<pre>";
                    // print_r($check_data_course_member);
                    // echo "</pre>";

                    if(empty($check_data_course_member)){
                        $check          = insert_member_course($_POST);  
                        if($check==1){

                            $_POST['status']        = "รอตรวจสอบ";
                            $check_up               = update_member_course_slip($_POST); 
                            if($check_up==1){
                                $name_front     = $_SESSION['name_frontend'];
                                $email_front    = $_SESSION['email_frontend'];
                                $status_front   = "รอตรวจสอบ";
                                $course_front   = $data['name'];
                                $price_front    = $data['price'];
                                $slip_front     = "https://huajainaka.com/file/member_course/".$file_name;
                                $msg = "[ มีคนสมัครเรียนมาใหม่ โอนเงินแล้วจ้า เช็คหลังบ้านด่วน ]\nชื่อ : ".$name_front."\nอีเมล : ".$email_front."\nคอร์สเรียน : ".$course_front."\nราคา : ".$price_front."\nสลิปชำระเงิน : ".$slip_front."\nสถานะ : ".$status_front."\n";

                                line_notify($msg);

                                echo ("<script LANGUAGE='JavaScript'>
                                    window.location.href='index.php?page=member_course&alert3=success';
                                    </script>");
                            }else{
                                echo
                                  "<script>
                                  alert('อัพโหลดไม่สำเร็จ');
                                  document.location.href = 'index.php?page=member_upload_slip&id=".$course_id."';
                                  </script>
                                  ";
                                exit;
                            }
                        }else{
                            echo
                                  "<script>
                                  alert('อัพโหลดไม่สำเร็จ');
                                  document.location.href = 'index.php?page=member_upload_slip&id=".$course_id."';
                                  </script>
                                  ";
                                exit;
                        }  
                    }else{  
                            $_POST['status']        = "รอตรวจสอบ";
                            $check_up               = update_member_course_slip($_POST); 
                            if($check_up==1){

                                $name_front     = $_SESSION['name_frontend'];
                                $email_front    = $_SESSION['email_frontend'];
                                $status_front   = "รอตรวจสอบ";
                                $course_front   = $data['name'];
                                $price_front    = $data['price'];
                                $slip_front     = "https://huajainaka.com/file/member_course/".$file_name;
                                $msg = "[ มีคนสมัครเรียนมาใหม่ โอนเงินแล้วจ้า เช็คหลังบ้านด่วน ]\nชื่อ : ".$name_front."\nอีเมล : ".$email_front."\nคอร์สเรียน : ".$course_front."\nราคา : ".$price_front."\nสลิปชำระเงิน : ".$slip_front."\nสถานะ : ".$status_front."\n";

                                line_notify($msg);

                                echo ("<script LANGUAGE='JavaScript'>
                                    window.location.href='index.php?page=member_course&alert3=success';
                                    </script>");
                            }else{
                                echo
                                  "<script>
                                  alert('อัพโหลดไม่สำเร็จ');
                                  document.location.href = 'index.php?page=member_upload_slip&id=".$course_id."';
                                  </script>
                                  ";
                                exit;
                            }
                    }


                    
                }else{
                    
                    include 'header.php';
                    include 'frontend/page/member/upload_slip.php';
                    include 'footer.php';
                 

                }
            
            
        }else{
            echo
              "<script>
              alert('กรุณาเข้าสู่ระบบก่อนทุกครั้ง');
              document.location.href = 'index.php?page=login';
              </script>
              ";
            exit;
        }

    }elseif($_GET['page']=="member_upload_slip_error"){
        if(!empty($_SESSION["name_frontend"])){
            include 'header.php';
            include 'frontend/page/member/upload_slip_error.php';
            include 'footer.php';
        }else{
            echo
              "<script>
              alert('กรุณาเข้าสู่ระบบก่อนทุกครั้ง');
              document.location.href = 'index.php?page=login';
              </script>
              ";
            exit;
        }

    }elseif($_GET['page']=="member_slip"){
        if(!empty($_SESSION["name_frontend"])){
            include 'header.php';
            include 'frontend/page/member/slip.php';
            include 'footer.php';      
        }else{
            echo
              "<script>
              alert('กรุณาเข้าสู่ระบบก่อนทุกครั้ง');
              document.location.href = 'index.php?page=login';
              </script>
              ";
            exit;
        }  

    }elseif($_GET['page']=="logout"){

        unset($_SESSION["id_frontend"]); 
        unset($_SESSION["name_frontend"]); 
        unset($_SESSION["email_frontend"]); 
        
        echo ("<script LANGUAGE='JavaScript'>
                            window.location.href='index.php?page=login';
                            </script>");
    }

    // elseif($_GET['page']=="check"){
    //     if($_POST['random']=="tarn1234"){
    //         $_SESSION['random'] = "tarn1234";
    //         header("Location: index.php?page=index");
    //     }else{
    //         $error = 'กรอกรหัสผ่านไม่ถูกต้อง';
    //         session_unset(); 
    //         session_destroy(); 
    //         include 'frontend/page/home/comingsoon.php';
    //     }
    // }

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