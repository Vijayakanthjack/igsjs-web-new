<?php
include 'db_conn.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "delete from `exhibitor` where id=$id";
    $result=mysqli_query($conn,$sql);    
    if($result){    
        //echo "Deleted successfully";
        header('location:exhibitors-page.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
