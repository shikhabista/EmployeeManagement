<?php
include('conntodb.php');
$sql="SELECT * FROM crud";
$res=mysqli_query($conn,$sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <div class="jumbotron">
  <div class="container">
  <div class="justify-content-center">
  <table class="table">
  <thead>
  <tr>
  <th> Name </th>
  <th> Job </th>
  <th> change </th>
  </tr>
</thead>
<?php
while($row = mysqli_fetch_assoc($res)): ?>
<tr>
<td> <?php echo $row['name']; ?> </td>
<td> <?php echo $row['job']; ?> </td>
<td> <a href="update.php?uid=<?php echo $row['id']; ?>&action=edit" class="btn btn-success">Edit </a><td>
<td> <a href="delete.php?uid=<?php echo $row['id']; ?>&action=delete" class="btn btn-danger">Delete </a><td>
</tr>
<?php endwhile; ?>
  </table>
  
</body>
</html>