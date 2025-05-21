<?php session_start();

/*-- connect --*/
 include 'config.php';

/*-- page backend --*/

    if($_GET['page']=="dashboard"){
        include 'header_backend.php';
        include 'backend/page/login/index.php';
        include 'footer_backend.php';
    }


?>