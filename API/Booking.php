<?php

    require_once('Config.php');

    if(isset($_POST["submit"])) {

        $Name = $_REQUEST["Name"];
        $Username = $_REQUEST["Username"];
        $Email = $_REQUEST["Email"];
        $Class_No = $_REQUEST["Class_No"];
        $Building = $_REQUEST["Building"];
        $TimeID = $_REQUEST["Time"];
        $STime = $_REQUEST["STime"];
        $ETime = $_REQUEST["ETime"];
        $Details = $_REQUEST["Details"];
        $Date = $_REQUEST["dateList"];
        $Course = $_REQUEST["Course"];

        // SQL INSERT
        $Booking = "INSERT INTO `DB_Booking` (`Booking_ID`, `Booking_Username`, `Booking_Building`, `Booking_Classroom`, `Booking_Date`, `Booking_TimeID` , `Booking_Course` , `Booking_Details`, `Booking_Status`, `Booking_TimeStamp`) VALUES (NULL, '$Username', '$Building', '$Class_No', '$Date', '$TimeID', '$Course', '$Details', '1', CURRENT_TIMESTAMP)";

        if(mysql_query($Booking) === TRUE){
            // Message Success
            header("Location: classroom.php?Building=$Building");
            exit();
        }else{
            //Message Error Database 
            $response = "406";
        }
        // Confirm E-mail
    
        $strTo = $Email;
        $strSubject = "ยืนยันการจองห้องเรียน";
        $strHeader = "From:UCLASS ระบบจองห้องเรียนออนไลน์ no-reply@devth.me";
        $strMessage = "เรียน คุณ $Name \nผลการจองห้องเรียน $Building-$Class_No เวลา $STime - $ETime\nอยู่ในระหว่างการตรวจสอบกรุณารอการยืนยันจากฝ่ายวิชาการ\n\nUCLASS ระบบจองห้องเรียนออนไลน์";
        $flgSend = @mail($strTo,$strSubject,$strMessage,$strHeader);  // @ = No Show Error //

    }

?>