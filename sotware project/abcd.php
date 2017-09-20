<?php
	include('session.php');
	$course=$_POST['course'];
	$conn=mysqli_connect("localhost","root","abcdefgh","profile");
	$sql1="SELECT slot from ssub where cid='$course'";
	$res1=mysqli_query($conn,$sql1);
	$row=mysqli_fetch_array($res1);
	$slot=$row['slot'];
	$sql="INSERT into studreg(reg,cid,slot) VALUES('$login_session','$course','$slot')";
	$res=mysqli_query($conn,$sql);
	if($res){
		echo("Course registered");
	}
	else{
		echo "Duplicate subject or Slot not Allowed!!,Cannot Submit!!";
	}
?>