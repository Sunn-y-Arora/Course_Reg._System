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
    <th>FEE</th>
  </tr>
  <tr name='1'>
    <th><input type="radio" name="course" value="20"></th>
    <th>RR</th>
    <th>SPECIAL</th>
    <th>53,000</th>
  </tr>
  <tr name='2'>
  <th><input type="radio" name="course" value="21"></th>
    <th>RR</th>
    <th>NORTH INDIAN NON-VEG</th>
    <th>50,000</th>
  </tr>
  <tr name='3'>
  <th><input type="radio" name="course" value="22"></th>
	<th>RR</th>
    <th>NORTH INDIAN VEG</th>
    <th>48,000</th>
  </tr>
  <tr name='4'>
  <th><input type="radio" name="course" value="23"></th>
    <th>RR</th>
    <th>PAID MESS</th>
    <th>51,000</th>
	</tr>
  <tr  name='5'>
  <th><input type="radio" name="course" value="24"></th>
    <th>FOOD MALL</th>
    <th>PAID MESS</th>
    <th>50,000</th>
  </tr>
  <tr name='6'>
  <th><input type="radio" name="course" value="25"></th>
    <th>RR</th>
    <th>SOUTH INDIAN NON-VEG</th>
    <th>45,000</th>
  </tr>
  <tr name='7'>
  <th><input type="radio" name="course" value="26"></th>
    <th>RR</th>
    <th>SOUTH INDIAN VEG</th>
    <th>40,000</th>
  </tr>
</table>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;	
  <input type='submit' value="Register"></input>
  <button type='reset' onclick='location.reload()'>Clear</button>
</form>
</body>
</html>
