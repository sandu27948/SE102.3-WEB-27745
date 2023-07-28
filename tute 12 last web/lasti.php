<?php
$conn=mysqli_connect("localhost","root","",university");
$id=$_REQUEST["id"];
$name=$_REQUEST["name"];
    $email=$_REQUEST["email"];
    $password=$_REQUEST["password"]
if(!$conn)
{
    die("Connection faild!");
}
$sql="insert in to student(id,name,email,password)values
if($conn->query($sql)==TRUE
{
  echo"Success!";
}
else{
        echo"error";
}
?>