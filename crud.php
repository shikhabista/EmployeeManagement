<?php

include('conntodb.php');

$name="";
$job="";
if(isset($_POST['set'])){
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name=mysqli_real_escape_string($conn,$_POST['name']);
        $job=mysqli_real_escape_string($conn,$_POST['job']);
        $errors=array();

        if(empty($name)){
            array_push($errors,"Name is empty");
        }
        if(empty($job))
        {
            array_push($errors,"Job field is empty");
        }
        if(count($errors) > 0){
        foreach($errors as $error)
        {
             echo $error;
        }
        }
        else
        {
        $sql="INSERT INTO crud(name, job) values('$name', '$job')";
        $res=mysqli_query($conn,$sql);
        header("LOCATION: index.php?success");
        
        }
        
    }

}
?>

