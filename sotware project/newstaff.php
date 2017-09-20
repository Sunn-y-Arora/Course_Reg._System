<html>
   
   <head>
      <title>SignUp Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         
         .box {
            border:#666666 solid 1px;
         }
      </style>
      <meta charset="UTF-8">
    <title>Student SignUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Corlate</title>
	
	<!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
    
    
        <link rel="stylesheet" href="css/style.css">
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
   
   <body class="homepage">

    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  +91 8604058225</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="http://www.linkedin.com" target="_blank"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="http://www.dribble.com" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="http://www.skype.com" target="_blank"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="https://en.wikipedia.org/wiki/VIT_University" target="_blank">About VIT</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Academics <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="login.php">Student Login</a></li>
                                <li><a href="calender.pdf" target="_blank">Academic Calender</a></li>
                            </ul>
                        </li> 
                        <li><a href="contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
	
      <div align = "center">
         <h5><b>Instructions for Entering New User:</b></h5>
				<p>Two types of User are there for this System<br>1.Admin(Administrator)<br>2.Normal Students<br><br>For admin rights enter password as given by university</p>
				<h3><b><u>New User Entry</b></u></h3>
				<form method="post" action="process.php" method="POST">
				<div id="form1" onload="document.abc.reset()">
				  <fieldset>
					<legend>Login Details</legend>
					<br>
				  Username: <input type="text" name="uname">
				  <br><br>
				  Student ID: <input type="text" name="id">
				  
				  <br><br>
				  
				  Password: <input type="password" name="pass">
				 
				  </fieldset>
					<fieldset>
					<legend>User Details</legend>
						<label for="reg">Registration No.</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="text" name="reg" id="reg" placeholder="15BITXXXX"/>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label for="stud">Name</label>
						<input type="text" id="da1" name="stud" placeholder="e.g Jonny Sims"/>
						<p id="p1"></p>
						<br>
						</fieldset>
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
						</fieldset>
					<input type='submit' value="Submit" onclick="return formValidation()"/>&nbsp;&nbsp;&nbsp;
					<input type='reset' value="Reset" onclick='myFunction2()'/>
					<br>
					
				</div>
				  </form>
			
      </div>
<section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Delevepod By</h3>
                        <ul>
                            <li>Swarnim Gupta-15BIT0226</li>
                            <li>Sunny Arora-15BIT0196</li>
                            <li>Saurav Bhattacharya-15BIT0210</li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Academics</h3>
                        <ul>
                            <li><a href="login.php"  target="_blank">Student Login</a></li>
                            <li><a href="calender.pdf" target="_blank">Academics Calender</a></li>
                         </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>ABOUT</h3>
                        <ul>
                            <li><a href="https://en.wikipedia.org/wiki/VIT_University" target="_blank">VIT</a></li>
                            
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Contact Us</h3>
                        <ul>
                            <li>VIT UNIVERSITY</a></li>
                            <li>Vellore,Tamil Nadu</li>
                            <li>-632014</li>
                            <br>
                            <li>mail-info@vit.ac.in</li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->
           

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016. All Rights Reserved By VIT.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>