<?php

    require_once('Config.php');

    $SQL = "SELECT * FROM `DB_Building`";
    $QUERY = mysql_query($SQL);

    if(mysql_num_rows($QUERY)){

        $Per_Page = 6; 

        $Page = $_REQUEST["page"];
		if(!$_REQUEST["page"])
		{
			$Page=1;
        }
        
        $Prev_Page = $Page-1;
        $Next_Page = $Page+1;
        
        $Page_Start = (($Per_Page*$Page)-$Per_Page);
		if($Num_Rows<=$Per_Page)
		{
			$Num_Pages =1;
		}
		else if(($Num_Rows % $Per_Page)==0)
		{
			$Num_Pages =($Num_Rows/$Per_Page) ;
		}
		else
		{
			$Num_Pages =($Num_Rows/$Per_Page)+1;
			$Num_Pages = (int)$Num_Pages;
        }

        $SQL .= "ORDER BY `Building_ID` ASC LIMIT $Page_Start , $Per_Page";
        $QUERY = mysql_query($SQL);

        while($ROW = mysql_fetch_array($QUERY)){
            if($ROW['Building_ID'] == ""){
                $response = "406";
            } else {
                $response = "200";
                $temp[] = array('Building_ID' => $ROW['Building_ID'],
                                'Building_Name' => $ROW['Building_Name'],
                                'Building_Picture' => $ROW['Building_Picture']);
            }
        }
    } else {
        $response = "406";
    }

    mysql_close($connect);

?>