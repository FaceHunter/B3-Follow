<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include("dbfollow.php");
        include("dbb3.php");
        
        /*if($connection1 == "ok"){
            echo "Connected to the b3 database.";
        }else{
            echo "ERROR: Not connected to the b3 database.";
        }*/
        while ($row = mysql_fetch_array($result)) {
            echo "<br />[DEBUG]Player ID: @".$row['client_id']." Followed by: @".$row['admin_id']." For Reason: ".$row['reason'];
            echo "<p />";
            while ($row1 = mysql_fetch_array($result1)){
                echo "<br />Player ID: ".$row1['name']." Followed by: @".$row['admin_id']." For Reason: ".$row['reason'];
                echo "<p />";
            }
        }
        ?>
    </body>
</html>
