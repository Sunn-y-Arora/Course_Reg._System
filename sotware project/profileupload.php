<?php

// create a variable
$reg=$_POST['reg'];
$name=$_POST['stud'];
$fname=$_POST['id'];
$foccup=$_POST['occ'];
$mname=$_POST['name'];
$moccup=$_POST['occ2'];
$fmob=$_POST['mob'];
$pin=$_POST['cgpa'];
$fno=$_POST['da2'];
$area=$_POST['da3'];
$country=$_POST['country'];
$state=$_POST['state'];
$city=$_POST['city'];
$c=mysqli_connect("localhost","root","abcdefgh","profile");
$sql="INSERT INTO details(reg,name,fname,foccup,mname,moccup,fmob,pin,fno,area,country,state,city,sem,year) VALUES('$reg','$name','$fname','$foccup','$mname','$moccup','$fmob','$pin','$fno','$area','$country','$state','$city','3','2016')";
$ins=mysqli_query($c,$sql);
if($ins)
{
    echo "New Record Inserted";
}
?>