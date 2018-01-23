<?php

    $navtitle = "เว็บไซต์จองห้องเรียนออนไลน์";

    @session_start();

    if ($_SESSION['Username'] == "") {
        header('Location: index.php');  
    } else {
        require_once('API/Booking.php');
        require_once('API/Get_Time.php');
        require_once('API/Get_UserInfo.php');
        include_once('View/Content_booking.php');
    }

?>