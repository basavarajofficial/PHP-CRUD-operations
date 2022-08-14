
<!-- Header -->
<?php 
include "partials/connect.php";

include "header.php" 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud-Opn</title>

    <link type="stylesheet" rel="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body>
<div class="container mt-5">
    <h1 class="text-center"> Welcome, Lets Create a PHP CRUD Application!</h1>
        <p class="text-center">
            We are going to use PHP and MySQL to create a CRUD (Create, Read, Update, Delete) Application.
        </p>
        <div class="container">
  <form action="user.php" method="get" >
        <button name="submit" type="submit" class="btn btn-primary" connection_status>Let's Do It!</button>
        </form>
        </div>
</div>
    
</body>
</html>


<!-- Footer -->
<?php include "footer.php"?>