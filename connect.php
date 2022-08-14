<?php

$con = new mysqli("localhost","root","", "database");

if(!$con){
    die(mysqli_error($con)); //error
}
 /*else{
    die(mysqli_error($con));
}*/
?>
