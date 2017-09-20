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
    <th><input type="radio" name="course" value="14"></th>
    <th>CSE1001</th>
    <th>DIGITAL LOGIC AND DESIGN</th>
    <th>4</th>
	<th>E1+TE1</th>
	<th>SWARNA PRIYA</th>
  </tr>
  <tr name='2'>
  <th><input type="radio" name="course" value="15"></th>
    <th>CSE1001</th>
    <th>DIGITAL LOGIC AND DESIGN</th>
    <th>4</th>
	<th>E2+TE2</th>
	<th>AARTHY S.L.</th>
  </tr>
  <tr name='3'>
  <th><input type="radio" name="course" value="16"></th>
	<th>CSE1001</th>
    <th>DIGITAL LOGIC AND DESIGN</th>
    <th>4</th>
	<th>E2+TE2</th>
	<th>SHUBHA S.</th>
  </tr>
  <tr name='4'>
  <th><input type="radio" name="course" value="17"></th>
    <th>CSE1004</th>
    <th>DATA STRUCTURES AND ALGORITHIMS</th>
    <th>4</th>
	<th>C1+TC1</th>
	<th>MANOOV R.</th>
	</tr>
  <tr  name='5'>
  <th><input type="radio" name="course" value="18"></th>
    <th>CSE1004</th>
    <th>DATA STRUCTURES AND ALGORITHIMS</th>
    <th></th>
	<th>C1+TC1</th>
	<th>MYTHILI S.</th>
  </tr>
  <tr name='6'>
  <th><input type="radio" name="course" value="19"></th>
    <th>CSE1004</th>
    <th>DATA STRUCTURES AND ALGORITHIMS</th>
    <th>4</th>
	<th>C2+TC2</th>
	<th>KURVA LAKSHAMANA</th>
  </tr>
  <tr name='7'>
  <th><input type="radio" name="course" value="20"></th>
    <th>CSE1002</th>
    <th>WEB TECHNOLOGIES</th>
    <th>3</th>
	<th>D1</th>
	<th>BRINDA K</th>
  </tr>
   <tr name='8'>
   <th><input type="radio" name="course" value="21"></th>
    <th>CSE1002</th>
    <th>WEB TECHNOLOGIES</th>
    <th>3</th>
	<th>D2</th>
	<th>BHARAT</th>
  </tr>
   <tr name='9'>
   <th><input type="radio" name="course" value="22"></th>
    <th>CSE1002</th>
    <th>WEB TECHNOLOGIES</th>
    <th>3</th>
	<th>D1</th>
	<th>HEMA K.</th>
  </tr>
  <tr name='10'>
  <th><input type="radio" name="course" value="23"></th>
    <th>CSE1003</th>
    <th>DATA BASE MANAGEMENT SYSTEMS</th>
    <th>4</th>
	<th>A1</th>
	<th>NANCY VICTOR</th>
  </tr>
   <tr name='11'>
   <th><input type="radio" name="course" value="24"></th>
    <th>CSE1003</th>
    <th>DATA BASE MANAGEMENT SYSTEMS</th>
    <th>4</th>
	<th>A2</th>
	<th>JYOTI LAKSMI</th>
  </tr>
    <tr name='12'>
	<th><input type="radio" name="course" value="25"></th>
    <th>CSE1003</th>
    <th>DATA BASE MANAGEMENT SYSTEMS</th>
    <th>4</th>
	<th>A1</th>
	<th>RAM KUMAR T.</th>
  </tr>
    <tr name='13'>
	<th><input type="radio" name="course" value="26"></th>
    <th>CSE1005</th>
    <th>SOFTWARE ENGINEERING PRINCIPLES AND PRACTICES</th>
    <th>3</th>
	<th>G1</th>
	<th>AJIT KUMAR SANTRA</th>
  </tr>
      <tr name='14'>
	<th><input type="radio" name="course" value="27"></th>
    <th>CSE1005</th>
    <th>SOFTWARE ENGINEERING PRINCIPLES AND PRACTICES</th>
    <th>3</th>
	<th>G2</th>
	<th>AJIT KUMAR SANTRA</th>
  </tr>
      <tr name='15'>
	<th><input type="radio" name="course" value="28"></th>
    <th>CSE1005</th>
    <th>SOFTWARE ENGINEERING PRINCIPLES AND PRACTICES</th>
    <th>3</th>
	<th>G1</th>
	<th>MANIVANAN S.</th>
  </tr>
</table>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;	
  <input type='submit' value="Register"></input>
  <button type='reset' onclick='location.reload()'>Clear</button>
</form>
</body>
</html>
