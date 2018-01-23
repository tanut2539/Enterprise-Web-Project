<?php

    require_once('Config.php');

    @session_start();

    $Username = $_SESSION['Username'];

    $SQL = "SELECT * FROM `DB_Booking` WHERE `Booking_Username` LIKE '%$Username'";
    $QUERY = mysql_query($SQL);

    if(mysql_num_rows($QUERY)){
        while($ROW = mysql_fetch_array($QUERY)){
            if($ROW['Booking_Username'] == ""){
                $response = "406";
            } else {
                $response = "200";
                $temp[] = array('Booking_Classroom' => $ROW['Booking_Classroom'],
                                'Booking_Building' => $ROW['Booking_Building'],
                                'Booking_Date' => $ROW['Booking_Date'],
                                'Booking_TimeStamp' => $ROW['Booking_TimeStamp'],
                                'Booking_Details' => $ROW['Booking_Details'],
                                'Booking_Course' => $ROW['Booking_Course']);
            }
        }
    } else {
        $response = "406";
    }

    mysql_close($connect);

?>