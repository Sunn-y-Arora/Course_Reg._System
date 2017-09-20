<?php
	include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="table.css"></head>
<body>
<form action="abcd.php" method="POST">
<br>
<table>
  <tr>
    <th>Select</th>
    <td>Course Code</th>
    <th>Course Name</th>
    <th>Credits</th>
	<th>Slot</th>
	<th>Faculty</th>
  </tr>
  <tr name='1'>
    <td><input type="radio" name="course" value="1"></input></td>
    <td>MAT1001</td>
    <td>CALCULUS FOR ENGINEERS</td>
    <td>4</td>
	<td>C1+TC1</td>
	<td>ANURADHA D.</td>
  </tr>
  <tr name='2'>
  <td><input type="radio" name="course" value="3"></input></td>
    <td>MAT1001</td>
    <td>CALCULUS FOR ENGINEERS</td>
    <td>4</td>
	<td>C2+TC2</td>
	<td>FELIX A.</td>
  </tr>
  <tr name='3'>
  <td><input type="radio" name="course" value="4"></input></td>
	<td>MAT1001</td>
    <td>CALCULUS FOR ENGINEERS</td>
    <td>4</td>
	<td>C2+TC2</td>
	<td>ANURADHA D.</td>
  </tr>
  <tr name='4'>
  <td><input type="radio" name="course" value="2"></input></td>
    <td>PHY1001</td>
    <td>ENGINEERING PHYSICS</td>
    <td>5</td>
	<td>A1+TA1</td>
	<td>S. RAO</td>
	</tr>
  <tr  name='5'>
  <td><input type="radio" name="course" value="5"></input></td>
    <td>PHY1001</td>
    <td>ENGINEERING PHYSICS</td>
    <td>5</td>
	<td>A2+TA2</td>
	<td>S. SARAVAPALLI RAO</td>
  </tr>
  <tr name='6'>
  <td><input type="radio" name="course" value="6"></input></td>
    <td>PHY1001</td>
    <td>ENGINEERING PHYSICS</td>
    <td>5</td>
	<td>D1+TD1</td>
	<td>K. RAM KUMAR</td>
  </tr>
  <tr name='7'>
  <td><input type="radio" name="course" value="7"></input></td>
    <td>PHY1001</td>
    <td>ENGINEERING PHYSICS</td>
    <td>5</td>
	<td>D2+TD2</td>
	<td>K. RAM KUMAR</td>
  </tr>
   <tr name='8'>
   <td><input type="radio" name="course" value="8"></input></td>
    <td>PHY1001</td>
    <td>ENGINEERING PHYSICS</td>
    <td>5</td>
	<td>D2+TD2</td>
	<td>ASHA JERLI</td>
  </tr>
   <tr name='9'>
   <td><input type="radio" name="course" value="9"></input></td>
    <td>PHY1001</td>
    <td>ENGINEERING PHYSICS</td>
    <td>5</td>
	<td>D1+TD1</td>
	<td>Prabhavathy P.</td>
  </tr>
  <tr name='10'>
  <td><input type="radio" name="course" value="10"></input></td>
    <td>CHY1001</td>
    <td>ENGINEERING CHEMISTRY</td>
    <td>5</td>
	<td>E1+TE1</td>
	<td>Sasikumar S</td>
  </tr>
   <tr name='11'>
   <td><input type="radio" name="course" value="11"></input></td>
    <td>CHY1001</td>
    <td>ENGINEERING CHEMISTRY</td>
    <td>5</td>
	<td>E2+TE2</td>
	<td>Sasikumar S</td>
  </tr>
    <tr name='12'>
	<td><input type="radio" name="course" value="12"></input></td>
    <td>CHY1001</td>
    <td>ENGINEERING CHEMISTRY</td>
    <td>5</td>
	<td>E1+TE1</td>
	<td>S.V. MOHANA ROOPAN</td>
  </tr>
    <tr name='13'>
	<td><input type="radio" name="course" value="13"></input></td>
    <td>CHY1001</td>
    <td>ENGINEERING CHEMISTRY</td>
    <td>5</td>
	<td>G1+TG11</td>
	<td>SANTA KUMAR</td>
  </tr>
</table>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;	
  <input type='submit' value="Register"></input>
  <button type='reset' onclick='location.reload()'>Clear</button>
</form>
</body>
</html>
