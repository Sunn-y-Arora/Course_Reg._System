<?php
	include('session.php');
	$course=$_POST['course'];
	$conn=mysqli_connect("localhost","root","abcdefgh","mess");
	$sql="INSERT into mreg(reg,mid) VALUES('$login_session','$course')";
	$res=mysqli_query($conn,$sql);
	if($res){
		echo("Mess registered");
	}
	else{
		echo "More than one mess not Allowed!!,Cannot Submit!!";
	}
?>