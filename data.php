<?php
include 'con.php';
$tbl = "data";

$user = "zahra";
$pass = "jalilian";

//echo $_GET["user"] . " " . $_GET["pass"] ;
if ($_GET["user"] == $user and $_GET["pass"] == $pass) {
    
    
    if($_GET["temperature"] != "") {
    
        $my_query = "INSERT INTO ".$tbl." (temperature) VALUES (".$_GET["temperature"]." )" ;
        //echo $my_query;
        $result = @mysqli_query ($con, $my_query);
        if ($result == true ) {
            echo "true";
        } else {
            echo "false";
        }
    
    } else {
        echo "temp is emputy";
    }
    
    
    
} else {
    echo "pass faild";
}

if ($_GET[""]) {
echo "pls enter";
}
?>
