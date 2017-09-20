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
<form action="abcd.php" method="POST">
<table>
  <tr>
    <th>Select</th>
    <th>Course Code</th>
    <th>Course Name</th>
    <th>Credits</th>
	<th>Slot</th>
	<th>Faculty</th>
  </tr>
  <tr name='1'>
    <th><input type="radio" name="course" value="29"></th>
    <th>EEE1011</th>
    <th>BASIC ELECTRIC AND ELECTRICAL ENGINEERING</th>
    <th>4</th>
	<th>E1+TE1</th>
	<th>G MADAHAVAN</th>
  </tr>
  <tr name='2'>
  <th><input type="radio" name="course" value="30"></th>
    <th>EEE1011</th>
    <th>BASIC ELECTRIC AND ELECTRICAL ENGINEERING</th>
    <th>4</th>
	<th>E2+TE2</th>
	<th>K. RAMAKRISHANAN</th>
  </tr>
  <tr name='3'>
  <th><input type="radio" name="course" value="31"></th>
	<th>EEE1011</th>
    <th>BASIC ELECTRIC AND ELECTRICAL ENGINEERING</th>
    <th>4</th>
	<th>E2+TE2</th>
	<th>SANTHA M.</th>
  </tr>
  <tr name='4'>
  <th><input type="radio" name="course" value="32"></th>
    <th>EEE1024</th>
    <th>CIRCUIT THEORY</th>
    <th>4</th>
	<th>C1+TC1</th>
	<th>S. SUDHIR</th>
	</tr>
  <tr  name='5'>
  <th><input type="radio" name="course" value="34"></th>
    <th>EEE1024</th>
    <th>CIRCUIT THEORY</th>
    <th></th>
	<th>C1+TC1</th>
	<th>K.H. RAO</th>
  </tr>
  <tr name='6'>
  <th><input type="radio" name="course" value="35"></th>
    <th>EEE1024</th>
    <th>CIRCUIT THEORY</th>
    <th>4</th>
	<th>C2+TC2</th>
	<th>KURVA LKAXMAN</th>
  </tr>
  <tr name='7'>
  <th><input type="radio" name="course" value="36"></th>
    <th>EEE2011</th>
    <th>ADVANCE ELECTRICAL ENGINEERING</th>
    <th>3</th>
	<th>D1</th>
	<th>G. MADHAAN</th>
  </tr>
   <tr name='8'>
   <th><input type="radio" name="course" value="37"></th>
    <th>EEE2011</th>
    <th>ADVANCE ELECTRICAL ENGINEERING</th>
    <th>3</th>
	<th>D2</th>
	<th>A.KHAN</th>
  </tr>
   <tr name='9'>
   <th><input type="radio" name="course" value="38"></th>
    <th>EEE2011</th>
    <th>ADVANCE ELECTRICAL ENGINEERING</th>
    <th>3</th>
	<th>D1</th>
	<th>HEMA K.</th>
  </tr>

</table>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;	
  <input type='submit' value="Register"></input>
  <button type='reset' onclick='location.reload()'>Clear</button>
</form>
</body>
</html>
