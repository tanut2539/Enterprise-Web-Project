<?php

    require_once('Config.php');

    @session_start();

    $Username = $_SESSION['Username'];

    $SQL = "SELECT * FROM `DB_Users` WHERE `Username` LIKE '%$Username'";
    $QUERY = mysql_query($SQL);

    if(mysql_num_rows($QUERY)){
        while($ROW = mysql_fetch_array($QUERY)){
            if($ROW['Username'] == ""){
                $response = "406";
            } else {
                $response = "200";
                $temp[] = array('Username' => $ROW['Username'],
                                'Firstname' => $ROW['Firstname'],
                                'Lastname' => $ROW['Lastname'],
                                'Phone' => $ROW['Phone'],
                                'Email' => $ROW['Email'],
                                'Quota' => $ROW['Quota'],
                                'Permission' => $ROW['Permission']);
            }
        }
    } else {
        $response = "406";
    }

    mysql_close($connect);

?>