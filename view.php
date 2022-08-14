<?php

include 'partials/connect.php';
include 'header.php';
$id = $_GET['viewid'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud Opn</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<style>
    *{
        box-sizing: border-box;
    }
    .conatiner{
        margin: 15px 20px 0 15px;
        padding: 20px;
    }
    
    
    button a{
        text-decoration: none;
    }
</style>
</head>
<body>

    <div class="conatiner">
    

        <table class="table table-success table-striped table-hover table-bordered">
        <thead class="table-dark">
    <tr>
      <th scope="col">SL_NO</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">MOBILE_NO</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  
    <tbody class="table-group-divider">

  <?php


$sql = "SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($con,$sql);
if($result){
   /* $row=mysqli_fetch_assoc($result);
    echo $row['name']; */ //we cannot write this many records.. so
  while($row=mysqli_fetch_assoc($result)){
    $id = $row['id'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile_no = $row['mobile_no'];
    $password = $row['password'];

    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$email.'</td>
    <td>'.$mobile_no.'</td>
    <td>'.$password.'</td>

    <td>
        <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light"> Update </a></button>
    </td>

  </tr>'; 

  }
}

  ?>

 
  </thead>

</tbody>
</table>
</div>
<center>
<button name="submit" type="submit" class="btn btn-secondary "> <a class="text-light" href="display.php"> Back </a></button>
</center>
    
</body>
</html>


<?php include "footer.php"?>
