<?php
include "partials/connect.php";

include 'header.php';

// if post is set to submit then only i can enter data and store the same.
if(isset($_POST['submit'])){

    $name =  $_POST['name'];
    $email =  $_POST['email'];
    $mobile_no= $_POST['mobile_no'];
    $password = $_POST['password'];

    $sql = "INSERT INTO crud(name,email,mobile_no,password) VALUES('$name','$email','$mobile_no','$password') ";
    $result = mysqli_query($con,$sql);// to store data in database
    if (!$result) {
        echo "something went wrong ". mysqli_error($con);
    }
    else {
        header('location:display.php');
     echo "<script type='text/javascript'>alert('User added successfully!')</script>";
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
                <input type="text " class="form-control" name="name" placeholder="Enter Your Name"  autocomplete="off" required>
            </div>

            <div class="mb-3">
                <label>Email :</label>
                <input type="text " class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off" required>
            </div>

            <div class="mb-3">
                <label>Mobile No :</label>
                <input type="number" class="form-control" name="mobile_no" placeholder="Enter Your Number" autocomplete="off" required>
            </div>

            <div class="mb-3">
                <label>Password :</label>
                <input type="password" class="form-control" name="password" placeholder="Enter Your Password" autocomplete="off" required>
            </div>

        <br><br>
            <button name="submit" type="submit" class="btn btn-primary"> Submit</button>
            <button name="view" type="view" class="btn btn-secondary"><a href="display.php" class="text-light" >View Data</a> </button>

        </form>

    </div>



    <script ></script>

    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> --->
</body>

</html>

<!---footer---->
<?php include "footer.php"?>