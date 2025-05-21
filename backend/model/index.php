<?php 
/*-------------------[ setting ]-------------------------*/

function get_setting(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_admin WHERE id =1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        return $row;
      }
    }
  }

function update_setting($post){
    global $conn;
    $sql = 'UPDATE  tb_admin 
            SET     password        = "'.md5($post['password']).'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ profile ]----------------------*/

  function get_profile(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_profile";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        return $row;
      }
    }
  }

  function get_profile_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_profile
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_profile_image($id){
    global $conn;
    $sql = 'UPDATE  tb_profile 
            SET     logo = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_profile($post){
    global $conn;
    $sql = 'UPDATE  tb_profile 
            SET     name        = "'.$post['name'].'",
                    logo        = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    keywords    = "'.$post['keywords'].'",
                    line        = "'.$post['line'].'",
                    phone       = "'.$post['phone'].'",
                    facebook    = "'.$post['facebook'].'",
                    twitter     = "'.$post['twitter'].'",
                    instagram   = "'.$post['instagram'].'",
                    youtube     = "'.$post['youtube'].'",

                    bank_num1     = "'.$post['bank_num1'].'",
                    bank_num2     = "'.$post['bank_num2'].'",
                    bank_num3     = "'.$post['bank_num3'].'",
                    bank_num4     = "'.$post['bank_num4'].'",

                    bank_name1     = "'.$post['bank_name1'].'",
                    bank_name2     = "'.$post['bank_name2'].'",
                    bank_name3     = "'.$post['bank_name3'].'",
                    bank_name4     = "'.$post['bank_name4'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ menu ]----------------------*/

  function get_menu(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_menu";
    return $conn->query($sql);
  }

  function get_menu_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_menu
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_menu($post){
    global $conn;
    $sql = 'UPDATE  tb_menu 
            SET     name        = "'.$post['name'].'",
                    status      = "'.$post['status'].'"
            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ banner ]----------------------*/

  function get_banner(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_banner
            ORDER BY id DESC";
    return $conn->query($sql);
  }

  function get_banner_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_banner
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_banner_image($id){
    global $conn;
    $sql = 'UPDATE  tb_banner 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_banner($post){
    global $conn;
    $sql = 'UPDATE  tb_banner 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_banner($post){
    global $conn;
    $sql = 'INSERT INTO tb_banner (name, image, description,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ about ]----------------------*/

  function get_about(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_about";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        return $row;
      }
    }
  }

  function get_about_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_about
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_about_image($id){
    global $conn;
    $sql = 'UPDATE  tb_about 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_about($post){
    global $conn;
    $sql = 'UPDATE  tb_about 
            SET     name        = "'.$post['name'].'",
                    name2       = "'.$post['name2'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    description2 = "'.$post['description2'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ horoscope ]----------------------*/

  function get_horoscope(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_horoscope
            ORDER BY  case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_horoscope_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_horoscope
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_horoscope_image($id){
    global $conn;
    $sql = 'UPDATE  tb_horoscope 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_horoscope($post){
    global $conn;
    $sql = 'UPDATE  tb_horoscope 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"
            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_horoscope($post){
    global $conn;
    $sql = 'INSERT INTO tb_horoscope (name, image, description,video,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ reserve_horoscope ]----------------------*/

  function get_reserve_horoscope(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_reserve_horoscope";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        return $row;
      }
    }
  }

  function get_reserve_horoscope_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_reserve_horoscope
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_reserve_horoscope_image($id){
    global $conn;
    $sql = 'UPDATE  tb_reserve_horoscope 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_reserve_horoscope($post){
    global $conn;
    $sql = 'UPDATE  tb_reserve_horoscope 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ astrology_course ]----------------------*/

  function get_astrology_course(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_astrology_course
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_astrology_course_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_astrology_course
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_astrology_course_image($id){
    global $conn;
    $sql = 'UPDATE  tb_astrology_course 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_astrology_course_video($id){
    global $conn;
    $sql = 'UPDATE  tb_astrology_course 
            SET     video = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_astrology_course($post){
    global $conn;
    $sql = 'UPDATE  tb_astrology_course 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    video       = "'.$post['video_name'].'",
                    description = "'.$post['description'].'",
                    price       = "'.$post['price'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_astrology_course($post){
    global $conn;
    $sql = 'INSERT INTO tb_astrology_course (name, image,video, description,price,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['video_name'].'",
            "'.$post['description'].'",
            "'.$post['price'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ holy_object ]----------------------*/

  function get_holy_object(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_holy_object
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_holy_object_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_holy_object
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_holy_object_image($id){
    global $conn;
    $sql = 'UPDATE  tb_holy_object 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_holy_object($post){
    global $conn;
    $sql = 'UPDATE  tb_holy_object 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    price       = "'.$post['price'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_holy_object($post){
    global $conn;
    $sql = 'INSERT INTO tb_holy_object (name, image, description,video,price,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            "'.$post['price'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ diamond_phayanaga ]----------------------*/

  function get_diamond_phayanaga(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_diamond_phayanaga
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_diamond_phayanaga_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_diamond_phayanaga
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_diamond_phayanaga_image($id){
    global $conn;
    $sql = 'UPDATE  tb_diamond_phayanaga 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_diamond_phayanaga($post){
    global $conn;
    $sql = 'UPDATE  tb_diamond_phayanaga 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    price       = "'.$post['price'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_diamond_phayanaga($post){
    global $conn;
    $sql = 'INSERT INTO tb_diamond_phayanaga (name, image, description,video,price,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            "'.$post['price'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ wallpaper ]----------------------*/

  function get_wallpaper(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_wallpaper
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_wallpaper_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_wallpaper
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_wallpaper_image($id){
    global $conn;
    $sql = 'UPDATE  tb_wallpaper 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_wallpaper($post){
    global $conn;
    $sql = 'UPDATE  tb_wallpaper 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    price       = "'.$post['price'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_wallpaper($post){
    global $conn;
    $sql = 'INSERT INTO tb_wallpaper (name, image, description,video,price,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            "'.$post['price'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ stickerline ]----------------------*/

  function get_stickerline(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_stickerline
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_stickerline_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_stickerline
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_stickerline_image($id){
    global $conn;
    $sql = 'UPDATE  tb_stickerline 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_stickerline($post){
    global $conn;
    $sql = 'UPDATE  tb_stickerline 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    price       = "'.$post['price'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_stickerline($post){
    global $conn;
    $sql = 'INSERT INTO tb_stickerline (name, image, description,price,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['price'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  /*----------------------[ lucky_number ]----------------------*/

  function get_lucky_number(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_lucky_number
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_lucky_number_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_lucky_number
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_lucky_number_image($id){
    global $conn;
    $sql = 'UPDATE  tb_lucky_number 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_lucky_number($post){
    global $conn;
    $sql = 'UPDATE  tb_lucky_number 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_lucky_number($post){
    global $conn;
    $sql = 'INSERT INTO tb_lucky_number (name, image, description,video,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }
/*----------------------[ auspicious_registration ]----------------------*/

  function get_auspicious_registration(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_auspicious_registration
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_auspicious_registration_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_auspicious_registration
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_auspicious_registration_image($id){
    global $conn;
    $sql = 'UPDATE  tb_auspicious_registration 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_auspicious_registration($post){
    global $conn;
    $sql = 'UPDATE  tb_auspicious_registration 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_auspicious_registration($post){
    global $conn;
    $sql = 'INSERT INTO tb_auspicious_registration (name, image, description,video,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }
/*----------------------[ color_car ]----------------------*/

  function get_color_car(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_color_car
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_color_car_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_color_car
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_color_car_image($id){
    global $conn;
    $sql = 'UPDATE  tb_color_car 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_color_car($post){
    global $conn;
    $sql = 'UPDATE  tb_color_car 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_color_car($post){
    global $conn;
    $sql = 'INSERT INTO tb_color_car (name, image, description,video,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ good_time ]----------------------*/

  function get_good_time(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_good_time
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_good_time_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_good_time
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_good_time_image($id){
    global $conn;
    $sql = 'UPDATE  tb_good_time 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_good_time($post){
    global $conn;
    $sql = 'UPDATE  tb_good_time 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_good_time($post){
    global $conn;
    $sql = 'INSERT INTO tb_good_time (name, image, description,video,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ enhance_luck ]----------------------*/

  function get_enhance_luck(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_enhance_luck
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_enhance_luck_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_enhance_luck
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_enhance_luck_image($id){
    global $conn;
    $sql = 'UPDATE  tb_enhance_luck 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_enhance_luck($post){
    global $conn;
    $sql = 'UPDATE  tb_enhance_luck 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_enhance_luck($post){
    global $conn;
    $sql = 'INSERT INTO tb_enhance_luck (name, image, description,video,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ story ]----------------------*/

  function get_story(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_story
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_story_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_story
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_story_image($id){
    global $conn;
    $sql = 'UPDATE  tb_story 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_story($post){
    global $conn;
    $sql = 'UPDATE  tb_story 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_story($post){
    global $conn;
    $sql = 'INSERT INTO tb_story (name, image, description,video,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ meditate ]----------------------*/

  function get_meditate(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_meditate
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_meditate_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_meditate
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_meditate_image($id){
    global $conn;
    $sql = 'UPDATE  tb_meditate 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_meditate($post){
    global $conn;
    $sql = 'UPDATE  tb_meditate 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_meditate($post){
    global $conn;
    $sql = 'INSERT INTO tb_meditate (name, image, description,video,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ phrathat ]----------------------*/

  function get_phrathat(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_phrathat
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_phrathat_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_phrathat
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_phrathat_image($id){
    global $conn;
    $sql = 'UPDATE  tb_phrathat 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_phrathat($post){
    global $conn;
    $sql = 'UPDATE  tb_phrathat 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_phrathat($post){
    global $conn;
    $sql = 'INSERT INTO tb_phrathat (name, image, description,video,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ phrathat_year ]----------------------*/

  function get_phrathat_year(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_phrathat_year
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_phrathat_year_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_phrathat_year
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_phrathat_year_image($id){
    global $conn;
    $sql = 'UPDATE  tb_phrathat_year 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_phrathat_year($post){
    global $conn;
    $sql = 'UPDATE  tb_phrathat_year 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_phrathat_year($post){
    global $conn;
    $sql = 'INSERT INTO tb_phrathat_year (name, image, description,video,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ naka_history ]----------------------*/

  function get_naka_history(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_naka_history
            ORDER BY case when pin != 0 then 0 else 1 end, pin ASC,id DESC";
    return $conn->query($sql);
  }

  function get_naka_history_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_naka_history
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function update_naka_history_image($id){
    global $conn;
    $sql = 'UPDATE  tb_naka_history 
            SET     image = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_naka_history($post){
    global $conn;
    $sql = 'UPDATE  tb_naka_history 
            SET     name        = "'.$post['name'].'",
                    image       = "'.$post['file_name'].'",
                    description = "'.$post['description'].'",
                    video       = "'.$post['video'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'",
                    pin         = "'.$post['pin'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function insert_naka_history($post){
    global $conn;
    $sql = 'INSERT INTO tb_naka_history (name, image, description,video,create_date,update_date,status) 
    VALUES ("'.$post['name'].'",
            "'.$post['file_name'].'",
            "'.$post['description'].'",
            "'.$post['video'].'",
            NOW(),
            NOW(),
            "'.$post['status'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ contact ]----------------------*/

  function get_contact(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_contact
            ORDER BY id DESC";
    return $conn->query($sql);
  }

/*----------------------[ register ]----------------------*/

  function get_register(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_register
            ORDER BY id DESC";
    return $conn->query($sql);
  }

  function get_register_open(){
    global $conn;
    $sql = "SELECT * 
            FROM   tb_register
            WHERE status = 'เปิด'
            ORDER BY id DESC";
    return $conn->query($sql);
  }

  function get_register_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_register
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function get_register_dup($email){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_register
            WHERE email="'.$email.'"';
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    return $row;
   
  }

  function insert_register($post){
    global $conn;
    $sql = 'INSERT INTO tb_register (name, sex, birthday,email,phone,status,create_date,update_date,password) 
    VALUES ("'.$post['name'].'",
            "'.$post['sex'].'",
            "'.$post['birthday'].'",
            "'.$post['email'].'",
            "'.$post['phone'].'",
            "'.$post['status'].'",
            NOW(),
            NOW(),
            "'.$post['password'].'")';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_register($post){
    global $conn;
    $sql = 'UPDATE  tb_register 
            SET     name        = "'.$post['name'].'",
                    sex         = "'.$post['sex'].'",
                    birthday    = "'.$post['birthday'].'",
                    email       = "'.$post['email'].'",
                    phone       = "'.$post['phone'].'",
                    update_date = NOW(),
                    status      = "'.$post['status'].'"

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*----------------------[ member_course ]----------------------*/

  function get_member_course_id($id){
    global $conn;
    $sql = 'SELECT * 
            FROM   tb_member_course
            WHERE id="'.$id.'"';
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function get_member_course(){
    global $conn;
    $sql = "SELECT r.name AS name_register,r.sex,r.birthday,r.email,r.phone,r.create_date AS create_date_register,r.update_date AS update_date_register,r.status AS status_register,
            m.id,m.user_id,m.course_id,m.slip_payment,m.status,m.create_date,m.update_date,m.comment,
            a.id AS course_id,a.name AS name_course,a.description AS description_course,a.image AS image_course,a.video AS video_course,a.price AS price_course,a.status AS status_course,a.create_date AS create_date_course,a.update_date AS update_date_course
            FROM   tb_member_course m
            LEFT JOIN tb_register r ON r.id = m.user_id
            LEFT JOIN tb_astrology_course a ON a.id = m.course_id
            ORDER BY m.id DESC";
    return $conn->query($sql);
  }

  function get_member_courses_id($id){
    global $conn;
    $sql = "SELECT r.name AS name_register,r.sex,r.birthday,r.email,r.phone,r.create_date AS create_date_register,r.update_date AS update_date_register,r.status AS status_register,
            m.id,m.user_id,m.course_id,m.slip_payment,m.status,m.create_date,m.update_date,m.comment,
            a.id AS course_id,a.name AS name_course,a.description AS description_course,a.image AS image_course,a.video AS video_course,a.price AS price_course,a.status AS status_course,a.create_date AS create_date_course,a.update_date AS update_date_course
            FROM   tb_member_course m
            LEFT JOIN tb_register r ON r.id = m.user_id
            LEFT JOIN tb_astrology_course a ON a.id = m.course_id
            WHERE m.id = $id";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
      return $row;
    }
  }

  function insert_member_course($post){
    global $conn;
    $sql = 'INSERT INTO tb_member_course (user_id, slip_payment, course_id,status,create_date,update_date,comment) 
    VALUES ("'.$post['user_id'].'",
            "'.$post['file_name'].'",
            "'.$post['course_id'].'",
            "'.$post['status'].'",
            "'.$post['comment'].'",
            NOW(),
            NOW())';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_member_course($post){
    global $conn;
    $sql = 'UPDATE  tb_member_course 
            SET     user_id        = "'.$post['user_id'].'",
                    course_id      = "'.$post['course_id'].'",
                    status         = "'.$post['status'].'",
                    slip_payment   = "'.$post['file_name'].'",
                    comment        = "'.$post['comment'].'",
                    update_date    = NOW()

            WHERE   id="'.$post['id'].'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

  function update_member_course_image($id){
    global $conn;
    $sql = 'UPDATE  tb_member_course 
            SET     slip_payment = ""
            WHERE   id="'.$id.'"';
    if ($conn->query($sql) === TRUE) {
      return true;
    } else {
      return false;
    }
  }

/*-------------comment--------------------*/

  function get_comment(){
    global $conn;
    $sql = 'SELECT c.* ,m.name AS name_menu
            FROM   tb_comment c
            LEFT JOIN tb_menu m ON m.url = c.page
            ORDER BY c.id DESC';
    return $conn->query($sql);
  }

?>