<?php 

function cal_age($date){
	//Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
    $dateOfBirth = $date; //วันเกิด รูปแบบ ปี เดือน วัน
    $currentDate  = date('Y-m-d'); //วันที่ปัจจุบัน
    $diff = abs(strtotime($currentDate) - strtotime($dateOfBirth));
                                                 
    $years = floor($diff / (365*60*60*24));
    $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
    $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
    
    $val = $years .' ปี '.$months .' เดือน '.$days .' วัน';               	                           
    return $val;
}

function send_mail($email){
    /***
     Server SMTP/POP : mail.thaicreate.com
     Email Account : webmaster@thaicreate.com
     Password : 123456
     */

     $mail = new PHPMailer();
     $mail->IsHTML(true);
     $mail->IsSMTP();
     $mail->SMTPAuth = true; // enable SMTP authentication
     $mail->SMTPSecure = ""; // sets the prefix to the servier
     $mail->Host = "mail.huajainaka.com"; // sets GMAIL as the SMTP server
     $mail->Port = 2121; // set the SMTP port for the GMAIL server
     $mail->Username = "huajaina"; // GMAIL username
     $mail->Password = "123456"; // GMAIL password
     $mail->From = "kalamangying@gmail.com"; // "name@yourdomain.com";
     //$mail->AddReplyTo = "support@thaicreate.com"; // Reply
     $mail->FromName = "ying";  // set from Name
     $mail->Subject = "Test sending mail."; 
     $mail->Body = "My Body & <b>My Description</b>";

     $mail->AddAddress("kalamangying@gmail.com", "yingyong"); // to Address

     $mail->Send();
}
?>