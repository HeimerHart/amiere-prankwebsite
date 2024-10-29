<?php
$fname = $_POST['fname'];
$fage = $_POST['fage'];
$lname = $_POST['lname'];
$lage = $_POST['lage'];

$conn = new mysqli('localhost','root','1234','test');
if ($conn->connect_error){
    die ('Connection Failed: '.$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into regestration(My Name, F_Age,Other Name, L_Age)
    values(?,?,?,?)"); 
$stmt->bind_param("sisi",$fname,$fage,$lname,$lage);
$stmt->execute();
echo "Regestration Success! ";
$smtm->close();
$conn->close();
}

?>