<?php 
    include '../core/function.php';

    $id=$_GET['id'];
    $sql="DELETE FROM booking WHERE id=$id";
    if(mysqli_query(conn(),$sql)){
        redirect('bookingList.php');
    }


?>