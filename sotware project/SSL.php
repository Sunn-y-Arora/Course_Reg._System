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
    <th><input type="radio" name="course" value="75"></th>
    <th>ENG1001</th>
    <th>ENGLISH FOR ENGINEERS</th>
    <th>2</th>
	<th>E1+TE1</th>
	<th>SUNITA BHATT</th>
  </tr>
  <tr name='2'>
  <th><input type="radio" name="course" value="76"></th>
    <th>ENG1001</th>
    <th>ENGLISH FOR ENGINEERS</th>
    <th>2</th>
	<th>E2+TE2</th>
	<th>K.RAJAT GUPTA</th>
  </tr>
  <tr name='3'>
  <th><input type="radio" name="course" value="77"></th>
	<th>ENG1001</th>
    <th>ENGLISH FOR ENGINEERS</th>
    <th>2</th>
	<th>E2</th>
	<th>H.CHRISTOPHER</th>
  </tr>
  <tr name='4'>
  <th><input type="radio" name="course" value="78"></th>
    <th>ENG1002</th>
    <th>ENGLISH VOCABULARY</th>
    <th>2</th>
	<th>C1</th>
	<th>S. SUDHIR</th>
	</tr>
  <tr  name='5'>
  <th><input type="radio" name="course" value="79"></th>
    <th>ENG1002</th>
    <th>ENGLISH VOCABULARY</th>
    <th>2</th>
	<th>C1</th>
	<th>K.H. RAO</th>
  </tr>
  <tr name='6'>
  <th><input type="radio" name="course" value="80"></th>
    <th>ENG1002</th>
    <th>ENGLISH VOCABULARY</th>
    <th>2</th>
	<th>C2</th>
	<th>KURVA LKAXMAN</th>
  </tr>
  <tr name='7'>
  <th><input type="radio" name="course" value="81"></th>
    <th>ESP1001</th>
    <th>BASIC SPANISH</th>
    <th>2</th>
	<th>D1</th>
	<th>G. MADHAAN</th>
  </tr>
   <tr name='8'>
   <th><input type="radio" name="course" value="82"></th>
    <th>ESP1001</th>
    <th>BASIC SPANISH</th>
    <th>2</th>
	<th>D2</th>
	<th>A.KHAN</th>
  </tr>
   <tr name='9'>
   <th><input type="radio" name="course" value="83"></th>
    <th>ESP1001</th>
    <th>BASIC SPANISH</th>
    <th>2</th>
	<th>D1</th>
	<th>HEMA K.</th>
  </tr>
  <tr name='10'>
  <th><input type="radio" name="course" value="84"></th>
    <th>GER1002</th>
    <th>BASIC GERMAN  </th>
    <th>2</th>
	<th>A1</th>
	<th>A.K. SINGH</th>
  </tr>
   <tr name='11'>
   <th><input type="radio" name="course" value="85"></th>
    <th>GER1002</th>
    <th>BASIC GERMAN  </th>
    <th>2</th>
	<th>A2</th>
	<th>JYOTI BINDRA</th>
  </tr>
    <tr name='12'>
	<th><input type="radio" name="course" value="86"></th>
    <th>GER1002</th>
    <th>BASIC GERMAN </th>
    <th>2</th>
	<th>A1</th>
	<th>K. KAMLESH KUMAR</th>
    <tr name='13'>
	<th><input type="radio" name="course" value="87"></th>
    <th>FRE1002</th>
    <th>BASIC FRENCH</th>
    <th>2</th>
	<th>G1</th>
	<th>D.K CHRISTOPHER</th>
  </tr>
      <tr name='14'>
	<th><input type="radio" name="course" value="88"></th>
    <th>FRE1002</th>
    <th>BASIC FRENCH</th>
    <th>2</th>
	<th>G2</th>
	<th>D.K CHRISTOPHER</th>
  </tr>
      <tr name='15'>
	<th><input type="radio" name="course" value="89"></th>
    <th>FRE1002</th>
    <th>BASIC FRENCH</th>
    <th>2</th>
	<th>G1</th>
	<th>HENRY FORD S.</th>
  </tr>

</table>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;	
  <input type='submit' value="Register"></input>
  <button type='reset' onclick='location.reload()'>Clear</button>
</form>
</body>
</html>
