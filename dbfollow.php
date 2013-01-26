<?php
    $server = 'localhost';
    $user = "root";
    $password = "";
		
    $con1 = mysql_connect($server, $user, $password);
		
    if(!$con1){
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("follow", $con1);
    $result = mysql_query("SELECT * FROM follow");
    
    $row2 = mysql_fetch_array($result);
    //while ($row = mysql_fetch_array($result)) {
        //$client_id = $row['client_id'];
        //$admin_id = $row['admin_id'];
        //$reason = $row['reason'];
    //}
    mysql_close($con1);
?>