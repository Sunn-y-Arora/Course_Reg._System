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
    <th><input type="radio" name="course" value="63"></th>
    <th>MEE1002</th>
    <th>FLUID MECHANICS</th>
    <th>4</th>
	<th>E1+TE1</th>
	<th>A.K. MISHRA</th>
  </tr>
  <tr name='2'>
  <th><input type="radio" name="course" value="64"></th>
    <th>MEE1002</th>
    <th>FLUID MECHANICS</th>
    <th>4</th>
	<th>E2+TE2</th>
	<th>KRISHNA S.L.</th>
  </tr>
  <tr name='3'>
  <th><input type="radio" name="course" value="65"></th>
	<th>MEE1002</th>
    <th>FLUID MECHANICS</th>
    <th>4</th>
	<th>E2+TE2</th>
	<th>SHBHAKARAN M.</th>
  </tr>
  <tr name='4'>
  <th><input type="radio" name="course" value="66"></th>
    <th>MEE1004</th>
    <th>ROTATIONAL MOTION AND ITS APPLICATION</th>
    <th>4</th>
	<th>C1+TC1</th>
	<th>MAHIMA SUNDARI</th>
	</tr>
  <tr  name='5'>
  <th><input type="radio" name="course" value="67"></th>
    <th>MEE1004</th>
    <th>ROTATIONAL MOTION AND ITS APPLICATION</th>
    <th>4</th>
	<th>C1+TC1</th>
	<th>K VISWANATH.</th>
  </tr>
  <tr name='6'>
  <th><input type="radio" name="course" value="68"></th>
    <th>MEE1004</th>
    <th>ROTATIONAL MOTION AND ITS APPLICATION</th>
    <th>4</th>
	<th>C2+TC2</th>
	<th>A.K.LAXMAN</th>
  </tr>
  <tr name='7'>
  <th><input type="radio" name="course" value="69"></th>
    <th>MEE2005</th>
    <th>ENGINEERING DRAWING</th>
    <th>3</th>
	<th>D1</th>
	<th>KAPIL KUMAR</th>
  </tr>
   <tr name='8'>
   <th><input type="radio" name="course" value="8"></th>
    <th>MEE2005</th>
    <th>ENGINEERING DRAWING</th>
    <th>3</th>
	<th>D2</th>
	<th>BHARAT KUMAR</th>
  </tr>
   <tr name='9'>
   <th><input type="radio" name="course" value="9"></th>
    <th>MEE2005</th>
    <th>ENGINEERING DRAWING</th>
    <th>3</th>
	<th>D1</th>
	<th>HARISH K.</th>
  </tr>
  <tr name='10'>
  <th><input type="radio" name="course" value="10"></th>
    <th>MEE1007</th>
    <th>MANUFACTURING ENGINEERING  </th>
    <th>4</th>
	<th>A1</th>
	<th>A.K. SINGH</th>
  </tr>
   <tr name='11'>
   <th><input type="radio" name="course" value="11"></th>
    <th>MEE1007</th>
    <th>MANUFACTURING ENGINEERING  </th>
    <th>4</th>
	<th>A2</th>
	<th>JYOTI BINDRA</th>
  </tr>
    <tr name='12'>
	<th><input type="radio" name="course" value="12"></th>
    <th>MEE1007</th>
    <th>MANUFACTURING ENGINEERING  </th>
    <th>4</th>
	<th>A1</th>
	<th>K. KAMLESH KUMAR</th>

</table>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;	
  <input type='submit' value="Register"></input>
  <button type='reset' onclick='location.reload()'>Clear</button>
</form>
</body>
</html>
