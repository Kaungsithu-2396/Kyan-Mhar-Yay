<?php 
    include '../core/function.php';

    $id=$_GET['id'];
    $sql="DELETE FROM Category WHERE id=$id";
    if(mysqli_query(conn(),$sql)){
        redirect('category_add.php');
    }


?>