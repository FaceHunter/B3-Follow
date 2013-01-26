<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>B3 Follow-Checker</title>
        <?php
            $version = "0.01";
            $author = "BlackGuard26";
            $initialdate = "25-01-2013";
        ?>
    </head>
    <body>
        <?php
        $server = 'localhost';
        $user = "root";
        $password = "";
		
        $con = mysql_connect($server, $user, $password);
		
        if(!$con){
            die('Could not connect: ' . mysql_error());
        }
        mysql_select_db("follow", $con);
        $result = mysql_query("SELECT * FROM follow");
        
        while ($row = mysql_fetch_array($result)) {
            if($row['client_id']=='5' && $row['admin_id'] == '3'){
                echo "Player ID: Paranoidnl(#".$row['client_id'].") Followed by: BlackGuard26(#".$row['admin_id'].") For Reason: ".$row['reason'];
                echo "<br />[DEBUG]Player ID: @".$row['client_id']." Followed by: @".$row['admin_id']." For Reason: ".$row['reason'];
                echo "<p />";
            }
            if($row['client_id']=='2' && $row['admin_id'] == '3'){
                echo "Player ID: TheMrsBooyah(#".$row['client_id'].") Followed by: BlackGuard26(#".$row['admin_id'].") For Reason: ".$row['reason'];
                echo "<br />[DEBUG]Player ID: @".$row['client_id']." Followed by: @".$row['admin_id']." For Reason: ".$row['reason'];
                echo "<p />";
            }
        }
        mysql_close($con);
        ?>
    </body>
</html>
