<?php

    require_once('Config.php');

	$Building = $_REQUEST['Building'];
	date_default_timezone_set('Asia/Bangkok');
	$Date = date("Y-m-d");

    $SQL = "SELECT * FROM `DB_Classroom` WHERE `Class_Building` = '$Building'";
    $RESULT = mysql_query($SQL);

	if (mysql_num_rows($RESULT) > 0) {
		while($ROW = mysql_fetch_assoc($RESULT)) {
			$Class_No = $ROW["Class_No"];
			$SQL2 = "SELECT * FROM `DB_Booking` WHERE (`Booking_Building` = '$Building') AND (`Booking_Classroom` = '$Class_No') AND `Booking_Date` = '$Date'";
			$RESULT2 = mysql_query($SQL2);

			if (mysql_num_rows($RESULT2) > 0) {
				
				$Time1 = "0";
				$Time2 = "0";
				$Time3 = "0";
				$Time4 = "0";

				while($ROW2 = mysql_fetch_assoc($RESULT2)) {
					if ($ROW2["Booking_TimeID"] == 1) {
						$Time1 = "1";
					} else if ($ROW2["Booking_TimeID"] == 2) {
						$Time2 = "1";
					} else if ($ROW2["Booking_TimeID"] == 3) {
						$Time3 = "1";
					} else if ($ROW2["Booking_TimeID"] == 4) {
						$Time4 = "1";
					} else {
						$response = "406";
					}
				}

				$temp[] = array('Class_Building' => $ROW['Class_Building'],
                                'Class_No' => $ROW['Class_No'],
                                'Class_Type' => $ROW['Class_Type'],
                                'Time1' => $Time1,
                                'Time2' => $Time2,
                                'Time3' => $Time3,
                                'Time4' => $Time4);
			} else {
				$Time1 = "0";
				$Time2 = "0";
				$Time3 = "0";
				$Time4 = "0";

				$temp[] = array('Class_Building' => $ROW['Class_Building'],
                                'Class_No' => $ROW['Class_No'],
                                'Class_Type' => $ROW['Class_Type'],
                                'Time1' => $Time1,
                                'Time2' => $Time2,
                                'Time3' => $Time3,
                                'Time4' => $Time4);
			}
		}
	}

	mysql_close($connect);

?>