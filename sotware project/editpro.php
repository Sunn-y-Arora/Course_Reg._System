<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>OutPatient Billing</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<link rel="stylesheet" href="billdate1.css">
  <script src="billdate1.js"></script>
  <script src="billdate2.js"></script>
  <script src="main.js"></script>
  <script src="city.js"></script>
  <script type="text/javascript">
	function printDiv(divName) {

	 var printContents = document.getElementById(divName).innerHTML;
	 w=window.open();
	 w.document.write(printContents);
	 w.print();
	 w.close();
	}
</script>
<script>
$( function() {
    $( "#da1" ).datepicker();
	  } );
				function myFunction2(){
					location.reload();
				}
				function regValidation(s,msg){
					var pattern=/^[0-9]{2}[A-Z]{3}[0-9]{4}$/;
					if(s.value.match(pattern)){document.getElementById('p1').innerText="valid";return true;}
					else{
						document.getElementById('p1').innerText=msg;
						s.focus();
						return false;
					}
				}
				function idValidation(s,msg){
					var pattern=/^[A-Z]{1}[a-z]+\s[A-Z]{1}[a-z]+/;
					if(s.value.match(pattern)){document.getElementById('p2').innerText="valid";return true;}
					else{
						document.getElementById('p2').innerText=msg;
						s.focus();
						return false;
					}
				}
				function nameValidation(s,msg){
					var pattern=/^[A-Z]{1}[a-z]+\s[A-Z]{1}[a-z]+/;
					if(s.value.match(pattern)){document.getElementById('p3').innerText="valid";return true;}
					else{
						document.getElementById('p3').innerText=msg;
						s.focus();
						return false;
					}
				}
				function emailValidation(s,msg){
					var pattern=/^[a-zA-Z]{1}[A-Za-z0-9-_\.]+[@]{1}[A-Za-z0-9\.]+$/;
					if(s.value.match(pattern)){document.getElementById('p3').innerText="valid";return true;}
					else{
						document.getElementById('p3').innerText=msg;
						s.focus();
						return false;
					}
				}
				function mobValidation(s,msg){
					var pattern=/^[1-9]{1}[0-9]{9}$/;
					if(s.value.match(pattern)){document.getElementById('p4').innerText="valid";return true;}
					else{
						document.getElementById('p4').innerText=msg;
						s.focus();
						return false;
					}
				}
				function cgpaValidation(s,msg){
					var pattern=/^[0-9]{6}$/;
					if(s.value.match(pattern)){document.getElementById('p5').innerText="valid";return true;}
					else{
						document.getElementById('p5').innerText=msg;
						s.focus();
						return false;
					}
				}
				function cgpa1Validation(s,msg){
					var pattern=/^[0-9]*[A-Za-z]*[!\/-_.]*$/;
					if(s.value.match(pattern)){document.getElementById('p6').innerText="valid";return true;}
					else{
						document.getElementById('p6').innerText=msg;
						s.focus();
						return false;
					}
				}
				function areaValidation(s,msg){
				 var pattern=/^[a-zA-Z0-9,-\/.-]+$/;
				 if(s.value.match(pattern)){document.getElementById('p7').innerText='Valid';return true;}
				 else{
					  document.getElementById('p7').innerText=msg;
					  s.focus();
					  return false;
				    }
				}
				function formValidation(){
					var name=document.getElementById('name');
					var mail=document.getElementById('mail');
					var cgp=document.getElementById('cgpa');
					var cgp1=document.getElementById('da2');
					var reg=document.getElementById('reg');
					var mob=document.getElementById('mob');
					var id=document.getElementById('id');
					var area=document.getElementById('da3');
					var f1,f2,f3,f4,f5,f6,f7;
					if(name.value.length==0 || cgp1.value.length==0 || area.value.length==0 || id.value.length==0 || cgp.value.length==0 || reg.value.length==0 || mob.value.length==0){
						alert('All fields are mandatory');
						return false;
					}
					if(regValidation(reg,"*Please enter a valid ID")){f1=1;} 
					if(nameValidation(name,"*Please enter Name in correct format")){f2=1;}
					if(mobValidation(mob,"*Please enter a valid mobile no.")){f4=1;}
					if(cgpaValidation(cgp,"*Invalid pincode")){f5=1;}
					if(cgpa1Validation(cgp1,"*Invalid")){f3=1;}
					if(areaValidation(area,"*Invalid")){f7=1;}
					if(idValidation(id,"*Please enter a valid name")){f6=1;} 
					if(f1==1 && f2==1 && f3==1 && f4==1 && f5==1 && f6==1 && f7==1)
						{alert("All Entries are valid\n\nForm Submitted Sucessfully !!!!!!");
						return true;}
					else{return false;}
				}
</script>
</head>

<body onload="document.abc.reset()">

		<div id="sitename">
			<div class="width">
				<h1><a href="#">Hospital Management System</a></h1>

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
                		
	    <article>
				<h3>Edit Profile</h3>
					<br>
					<fieldset>
		
					<legend>User Details</legend>
					<form action="profileupload.php" method="post" onload="document.reset()">
					<div id="form1" onload="document.abc.reset()">
						<label for="reg">Registration No.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="reg" id="reg" placeholder="15BITXXXX"/>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label for="stud">Name</label>
						<input type="text" id="da1" name="stud" placeholder="e.g Jonny Sims"/>
						<p id="p1"></p>
						<br>
						<fieldset>
						<legend>Parent's Details</legend>
						<br>
						<label for="id">Father's Name</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="id" id="id" placeholder="e.g. Sunny Arora"/>
						&nbsp;&nbsp;&nbsp; 
						<label for="occ">Father's Occupation</label>
						&nbsp; &nbsp;&nbsp;&nbsp;
						<select name="occ" id='occ' type="text"> 
						<option selected disabled>-Select-</option>
						<option value="Value 1">Central Govt Emplyee</option>
						<option value="Value 2">Police</option>
						<option value="Value 3">Journalist</option>
						<option value="Value 4">Politics</option>
						<option value="Value 5">Teaching</option>
						<option value="Value 6">State Govt. Emplyee</option>
						<option value="Value 7">Defence Services</option>
						<option value="Value 8">Business</option>
						<option value="Value 9">Other</option></select>
						<p id="p2"></p>
						<label for="name" stlyle="font-size:20px">Mother's Name</label>&nbsp;&nbsp;
						<input type="text" name="name" id="name" placeholder="e.g. Nellu Awasthi"/>
						&nbsp;&nbsp;&nbsp;
						<label for="occ2">Mother's Occupation</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="occ2" id='occ2' type="text">
						<option selected disabled>-Select-</option>						
						<option value="Value 1">Central Govt. Emplyee</option>
						<option value="Value 2">Police</option>
						<option value="Value 3">Journalist</option>
						<option value="Value 4">Politics</option>
						<option value="Value 5">Teaching</option>
						<option value="Value 6">State Govt. Emplyee</option>
						<option value="Value 7">Defence Services</option>
						<option value="Value 8">Business</option>
						<option value="Value 9">House Wife</option>
						<option value="Value 10">Other</option></select>
						<p id="p3"></p>
						<label for="mob">Father' Mobile</label>&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="mob" id="mob" placeholder="10-digit-no."/>
						&nbsp;&nbsp;&nbsp;<p id="p4"></p>
						<br>
						</fieldset>
						<fieldset>
						<legend>Residential Details</legend>
						<br>
						<label for="cgpa">Pincode</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="cgpa" id="cgpa" placeholder="e.g 110007"/>
						&nbsp;&nbsp;&nbsp;<p id="p5"></p>
						<label for="da2">Flat No</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="da2" id="da2" placeholder=" e.g.65/2"/>
						&nbsp;&nbsp;&nbsp;<p id="p6"></p>
						<label for="da3">Area</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="da3" id="da3" placeholder=" e.g. lajpat Nagar,XYZ"/>
						&nbsp;&nbsp;&nbsp;<p id="p7"></p>
						<br>
						<label for="Country">Country</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="country" class="countries" id="countryId">
						<option value="">-Select Country-</option></select><br><br>
						<label for="State">State</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<select name="state" class="states" id="stateId">
						<option value="">-Select State-</option>
						</select><br><br>
						<label for="City">City</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;
						<select name="city" class="cities" id="cityId">
						<option value="">-Select City-</option></select>
						<br>
						<br>
					<input type='submit' value="Submit" onclick="return formValidation()"/>&nbsp;&nbsp;&nbsp;
					<input type='reset' value="Reset" onclick='myFunction2()'/>
					<br>
					
				</div>
				<br>
				<br>
				
				</fieldset>
			</article>
		</section>

	</section>
	
		<footer class="clear">
			<div  class="width">
				<p class="left">Site established by Vitians.</p>
				<p class="right">Copyright of Vitians</p>
			</div>
		</footer>
</body>
</html>
