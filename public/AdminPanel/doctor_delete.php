<?php 
    include '../core/function.php';

    $id=$_GET['id'];
    $sql="DELETE FROM doctors WHERE id=$id";
    if(mysqli_query(conn(),$sql)){
        redirect('doctor_list.php');
    }


?>