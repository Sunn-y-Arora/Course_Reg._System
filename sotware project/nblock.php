<?
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<script>
function myFunc(){
 alert('Registered succesfully');
 }
 </script>
<link rel="stylesheet" href="table.css"></head>
<body>
<form action="messupload.php" method="POST">
<table>
  <tr>
    <th>Select</th>
    <th>CATERER</th>
    <th>MESS TYPE</th>
    <th>FEES</th>
  </tr>
  <tr name='1'>
    <th><input type="radio" name="course" value="1"></th>
    <th>DARLING</th>
    <th>SPECIAL</th>
    <th>52,000</th>
  </tr>
  <tr name='2'>
  <th><input type="radio" name="course" value="2"></th>
    <th>P/R</th>
    <th>NON-VEG</th>
    <th>48,000</th>
  </tr>
  <tr name='3'>
  <th><input type="radio" name="course" value="3"></th>
	<th>P/R</th>
    <th>VEG</th>
    <th>42,000</th>
  </tr>
  <tr name='4'>
  <th><input type="radio" name="course" value="4"></th>
    <th>DARLING</th>
    <th>SOUTH INDIAN NON-VEG</th>
    <th>40,000</th>
	</tr>
  <tr  name='5'>
  <th><input type="radio" name="course" value="5"></th>
    <th>DARLING</th>
    <th>SOUTH INDIAN VEG</th>
    <th>38,000</th>
  </tr>
  <tr name='6'>
  <th><input type="radio" name="course" value="6"></th>
    <th>P/R</th>
    <th>SPECIAL</th>
    <th>50,000</th>
  </tr>
</table>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;	
  <input type='submit' value="Register"></input>
  <button type='reset' onclick='location.reload()'>Clear</button>
</form>
</body>
</html>
