<?php
include('session.php');
?>
<html>
<head>
<script>
function myFunction2(){document.getElementsByTagName("iframe")[0].setAttribute("src",'');
					
				}
function func(){
var x=document.getElementById('school');
var z=x.value;
 document.getElementsByTagName("iframe")[0].setAttribute("src",z);
 }
</script>
<title>Course Registration</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
</head>
<body onload="location.reset()">
<div id="sitename">
			<div class="width">
				<h1>ONLINE COURSE REGISTRATION SYSTEM</h1>

				<nav>
					<ul>
        					<li class="start selected"><a href="index.html">Home</a></li>
        	    				<li class=""><a href="loginpage.html">Log Out</a></li>
        				</ul>
				</nav>
	
				<div class="clear"></div>
			</div>
		</div>
		<header>
			<img src="billingimage2.jpg" alt="Patient"height='200px' width="100%">
		</header>
		<section id="body" class="width clear">
			<aside id="sidebar" class="column-left">
				<ul>
                	<li>
						<h4>Go TO</h4>
                        <ul class="blocklist">
                            <li class="selected-item"><a href="home.html">Home</a></li>
							<li><a href="newstaff.html">New Staff Entry</a></li>
							<li><a href="doctor.html">Doctor</a></li>
                            <li><a href="patient.html">Patient</a></li>
							<li><a href="roomallotment.html">Receptionist</a></li>
							<li><a href="billing.html">Cashier</a></li>
                        </ul>

					</li>	
				</ul>
			</aside>
			<section id="content" class="column-right">
<form action="" method="POST" name='abc' onload="document.reset()">
<div id="form1" onload="document.abc.reset()">
		<label for="school">HOSTEL</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select name="school"id='school'>
		<option selected disabled>-Select-</option>						
		<option value="mblock.php">M Block</option>
		<option value="nblock.php">N Block</option>
		<option value="kblock.php">K Block</option>
		<option value="lblock.php">L Block</option>
		<option value="dblock.php">D Block</option>
		</select>
		<button type='button' onclick="func()">GO</button>
		<button type='reset' onclick='myFunction2()'>RESET</button>
		<br><br>
		<iframe src="" height="50%" width="120%"></iframe> 
</div>
</form>
</body>
<html>