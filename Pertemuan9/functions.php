<?php 
 //koneksi kedata base
 $conn =mysqli_connect ("localhost", "root", "", "db_20241013");
 
 //query
function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows =[];
    while($row = mysqli_fetch_assoc($result)){
        $rows[]= $row;
    }
    return $rows;
}
 ?>