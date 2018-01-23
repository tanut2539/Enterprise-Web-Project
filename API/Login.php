<?php

    require_once('Config.php');

    $Username = $_REQUEST['Username'];
    $Password = hash('sha256', (get_magic_quotes_gpc() ? stripslashes($_REQUEST['Password']) : $_REQUEST['Password']));

    if (isset($_REQUEST['submit'])) {
        if ($Username == "") {
            $response = "401";
        } else {
            if ($Password == "") {
                $response = "402";
            } else {
                // SQL CHECK
                $SQL = "SELECT *FROM `DB_Login` WHERE ((`Username` LIKE '%$Username') AND  (`Password` = '$Password'))";
                $QUERY = mysql_query($SQL);
                if (mysql_num_rows($QUERY) > 0) {
                    $response = "200";
                    date_default_timezone_set('Asia/Bangkok');
                    $TimeStamp = date("Y-m-d H:i:s");
                    $UPDATE = "UPDATE `DB_Login` SET `TimeStamp` = '$TimeStamp' WHERE `Username` LIKE '$Username'";
                    mysql_query($UPDATE);
                    @session_start();
                    $_SESSION['Username'] = $Username;
                    header('Location: mainweb.php'); 
                } else {
                    $SQL = "SELECT *FROM `DB_Login` WHERE (`Username` LIKE '%$Username')";
                    $QUERY = mysql_query($SQL);
                    if (mysql_num_rows($QUERY) == "") {
                        //$response[] = array('response' => '401');
                        $response = "201";
                    } else {
                        $SQL = "SELECT *FROM `DB_Login` WHERE (`Password` LIKE '%$Password')";
                        $QUERY = mysql_query($SQL);
                        if (mysql_num_rows($QUERY) == "") {
                            //$response[] = array('response' => '402');
                            $response = "202";
                        }
                    }
                }
            }
        }
    }

    mysql_close($connect);

?>