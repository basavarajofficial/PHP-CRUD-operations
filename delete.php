<?php

include "partials/connect.php";

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `crud` WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if (!$result) {
        echo "something went wrong ". mysqli_error($conn);
    }

    else { 
        header('location:display.php');
       // echo "<script type='text/javascript'>alert('User Deleted successfully!')</script>";
        }    
}
?>
