<?php

test
$servername='localhost';
$username='root';
$password='';
$database='connection';
$con = mysqli_connect('localhost','root','','connection');
if(isset($_post['submit']))
{
    $fname = $_POST['fname'];
    $fage = $_POST['fage'];
    $lname = $_POST['lname'];
    $lage = $_POST['lage'];
    
    $sql="insert into registration(fName, F_Age,lName, L_Age) values('$fname','$fage','$lname','$lage')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('New Record Added...)</script>";
    }

    else
    {
        echo "Error: ".mysqli_error($con)
    }
    mysql_close($con);
}
?>