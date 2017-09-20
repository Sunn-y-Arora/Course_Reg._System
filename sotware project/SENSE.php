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
    <th><input type="radio" name="course" value="39"></th>
    <th>ECE1001</th>
    <th>SENSORS</th>
    <th>4</th>
	<th>E1+TE1</th>
	<th>K ANURAG</th>
  </tr>
  <tr name='2'>
  <th><input type="radio" name="course" value="40"></th>
    <th>ECE1001</th>
    <th>SENSORS</th>
    <th>4</th>
	<th>E2+TE2</th>
	<th>K. RAMAKRISHANAN</th>
  </tr>
  <tr name='3'>
  <th><input type="radio" name="course" value="41"></th>
	<th>ECE1001</th>
    <th>SENSORS</th>
    <th>4</th>
	<th>E2+TE2</th>
	<th>KURAM ASHISH</th>
  </tr>
  <tr name='4'>
  <th><input type="radio" name="course" value="42"></th>
    <th>ECE1005</th>
    <th>COUMMUNICATION THEORY</th>
    <th>4</th>
	<th>C1+TC1</th>
	<th>S. SUDHIR</th>
	</tr>
  <tr  name='5'>
  <th><input type="radio" name="course" value="43"></th>
    <th>ECE1005</th>
    <th>COUMMUNICATION THEORY</th>
    <th>4</th>
	<th>C1+TC1</th>
	<th>K.H. RAO</th>
  </tr>
  <tr name='6'>
  <th><input type="radio" name="course" value="44"></th>
    <th>ECE1005</th>
    <th>COUMMUNICATION THEORY</th>
    <th>4</th>
	<th>C2+TC2</th>
	<th>KURVA LKAXMAN</th>
  </tr>
  <tr name='7'>
  <th><input type="radio" name="course" value="45"></th>
    <th>ECE1008</th>
    <th>SENSORS AND ADVANCED CIRCUITS</th>
    <th>3</th>
	<th>D1</th>
	<th>G. ARJUNA</th>
  </tr>
   <tr name='8'>
   <th><input type="radio" name="course" value="46"></th>
    <th>ECE1008</th>
    <th>SENSORS AND ADVANCED CIRCUITS</th>
    <th>3</th>
	<th>D2</th>
	<th>A. KUMAR</th>
  </tr>
   <tr name='9'>
   <th><input type="radio" name="course" value="47"></th>
    <th>ECE1008</th>
    <th>SENSORS AND ADVANCED CIRCUITS</th>
    <th>3</th>
	<th>D1</th>
	<th>KALINDI K.</th>
  </tr>

</table>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;	
  <input type='submit' value="Register"></input>
  <button type='reset' onclick='location.reload()'>Clear</button>
</form>
</body>
</html>
