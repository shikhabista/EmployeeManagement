<?php
include('conntodb.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
<div class="jumbotron ">
    <form action="insert.php" method="POST" class="ml-5 pl-5">
    <div class="form-group ml-5 pl-5">
    <label> Name </label> <br>
    <input type="text" name="name" placeholder="Enter your name" class="form-control"  style="width:50%;">
    </div>
    <div class="form-group ml-5 pl-5">
    <label> Job </label>
    <input type="text" name="job" placeholder="Enter your job" class="form-control" style="width:50%;"> <br> 
    <button type="submit" name="set" class="btn btn-success"> Save </button>
    </div>   
    </div>
    </div>
</body>
</html>