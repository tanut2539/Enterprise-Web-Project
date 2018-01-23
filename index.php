<?php

    $navtitle = "เว็บไซต์จองห้องเรียนออนไลน์";

    @session_start();

    if ($_SESSION['Username'] == "") {
        require_once('API/Login.php');
        include_once('View/Content_index.php');  
    } else {
        header('Location: mainweb.php');  
    }

?>