<?php
    include ("dbfollow.php");
    //include ("index.php");

    $server = 'localhost';
    $user = "root";
    $password = "";
		
    $con2 = mysql_connect($server, $user, $password);
		
    if(!$con2){
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("nick", $con2);
    $result1 = mysql_query("SELECT * FROM clients WHERE".$row2['client_id']);
        
    /*while ($row = mysql_fetch_array($result1)) {
        //$client_id = $row['client_id'];
        //$admin_id = $row['admin_id'];
        //$reason = $row['reason'];
        $connection1 = "ok";
    }*/
    mysql_close($con2);
?>