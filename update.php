<?php
include("conntodb.php");
$id = $_GET['uid'];

$sql = "SELECT * FROM crud WHERE id='$id'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);

if(isset($_POST['save']))
{
$name = $_POST['name'];
$job = $_POST['job'];
 

$sql = "UPDATE crud set name='$name' , job='$job' WHERE id='$id'";
$res = mysqli_query($conn,$sql);
if($res)
{
    header("LOCATION: operation.php");
}
else{
    echo mysqli_error($conn);
}

}

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
    <form method="POST" class="ml-5 pl-5">
    <div class="form-group ml-5 pl-5">
    <label> Name </label> <br>
    <input type="text" name="name" class="form-control"  style="width:50%;" value="<?php echo $row['name']; ?>">
    </div>
    <div class="form-group ml-5 pl-5">
    <label> Job </label>
    <input type="text" name="job"  class="form-control" style="width:50%;" value="<?php echo $row['job']; ?>">  <br> 
    <button type="submit" name="save" class="btn btn-success"> Update </button>
    </div>   
    </div>
    </div>
</body>
</html>