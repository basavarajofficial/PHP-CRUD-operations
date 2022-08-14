<?php
include 'partials/connect.php';
include 'header.php';

$id=$_GET['updateid']; // link id from database to form
$sql = "SELECT * FROM `crud` WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name =  $row['name'];
$email =  $row['email'];
$mobile_no= $row['mobile_no'];
$password = $row['password'];



// if post is set to submit then only i can enter data and store the same.
if(isset($_POST['submit'])){

    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $mobile_no= $_POST['mobile_no'];
    $password = $_POST['password'];

    $sql = "UPDATE `crud` 
      SET id=$id, name='$name',email='$email',mobile_no='$mobile_no',password='$password' 
      WHERE id=$id ";

    $result = mysqli_query($con,$sql);// to store data in database
    if($result){
        //echo "Data Upadated Successfully"; // after submit msg should show
       // echo "<script type='text/javascript'> alert('User Updated Successfully..!')</script>";
    header('location:display.php');

    } 
    else{
        die(mysqli_error($con));
    }
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud_op</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link type="stylesheet" rel="style.css">

</head>

<body>
    <div class="container my-5" >
        <form method="post">
            <div class="mb-3">
                <label>Name :</label>
                <input type="text " class="form-control" name="name" placeholder="Enter Your Name"  autocomplete="off" required
                value=<?php echo $name;?>>
            </div>

            <div class="mb-3">
                <label>Email :</label>
                <input type="text " class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off" required
                value=<?php echo $email;?> >
            </div>

            <div class="mb-3">
                <label>Mobile No :</label>
                <input type="number" class="form-control" name="mobile_no" placeholder="Enter Your Number" autocomplete="off" required
                value=<?php echo $mobile_no;?>>
            </div>

            <div class="mb-3">
                <label>Password :</label>
                <input type="text" class="form-control" name="password" placeholder="Enter Your Password" autocomplete="off" required
                value=<?php echo $password;?>>
            </div>

            



            <button name="submit" type="submit" class="btn btn-primary">Update</button>
            <button name="submit" type="submit" class="btn btn-secondary "> <a class="text-light" href="display.php"> Back </a></button>
            
        </form>

    </div>




    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> --->
</body>

</html>

<?php include "footer.php"?>
