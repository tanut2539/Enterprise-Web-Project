<?php

    require_once('Config.php');

    $Time = $_REQUEST["Time"];

    $SQL = "SELECT * FROM `DB_Time` WHERE `Time_ID` = '$Time'";
    $QUERY = mysql_query($SQL);

    if(mysql_num_rows($QUERY)){
        while($ROW = mysql_fetch_array($QUERY)){
            if($ROW['Time_ID'] == ""){
                $response = "406";
            } else {
                $response = "200";
                $time[] = array('Time_ID' => $ROW['Time_ID'],
                                'STime' => $ROW['STime'],
                                'ETime' => $ROW['ETime']);
            }
        }
    } else {
        $response = "406";
    }

?>