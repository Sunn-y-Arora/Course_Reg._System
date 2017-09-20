<?php

// create a variable
$uname=$_POST['uname'];
$id=$_POST['id'];
$pass=$_POST['pass'];
//Execute the query
$conn = mysqli_connect("localhost","root","abcdefgh","user");

$sql = "INSERT INTO user (uname,id,pass) VALUES ('$uname','$id','$pass')";
mysqli_query($conn,$sql);
if ($conn) {
    echo "New record created successfully";
} else {
    echo "Error: ";
}

$conn->close();
?>