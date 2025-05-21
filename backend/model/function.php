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
?>