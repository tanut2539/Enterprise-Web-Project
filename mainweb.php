<?php

    $navtitle = "เว็บไซต์จองห้องเรียนออนไลน์";

    @session_start();

    if ($_SESSION['Username'] == "") {
        header('Location: index.php');  
    } else {
        require_once('API/Get_BuildingList.php');
        include_once('View/Content_mainweb.php');
    }

?>