<?php
header('Content-Type: application/json');
include ('con.php');


$tbl = "data";
$order_by = "id";

$post = array();


$my_query = "SELECT * FROM ".$tbl." ORDER BY ".$order_by." DESC";
$result = @mysqli_query ($con, $my_query);

 
if ($result) {
    while ( $row = mysqli_fetch_array ($result) ) {
        $post["temperature"] = $row["temperature"];
        
        $flag[] = $post;
        break;
    }
    
    print(json_encode($flag));
}

mysqli_close($con);

?>