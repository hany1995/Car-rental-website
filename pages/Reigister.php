<!doctybe html Public "-//W3C//DTD XHTMML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <script>
    function validate(){
  var name = document.getElementById('fn');
  var name1 = document.getElementById('ln');
  var em =document.getElementById('em');
  var pn=document.getElementById('pn');
  var ps =document.getElementById('ps');
   var ssn =document.getElementById('ssn');
   if (name.value ==''){
     alert('please enter name');
	 return false;
   }
         if (name1.value ==''){
     alert('please enter last name');
	 return false;
   }
   if (em.value ==''){
     alert('please enter email');
	 return false;
   }
  if (ps.value ==''){
     alert('please enter password');
	 
	 return false;
   }
   if (pn.value.length!= 11){
     alert('please enter phone number');
	 
	 return false;
   }
   if (ssn.value.length !=14){
     alert('please enter ssn correctly');
	 return false;
   }

  }
 
  </script>
<head> 
<title>Renty - Car Rental &amp; Booking HTML5 Template</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="A.style.css.pagespeed.cf.yVD6J361ZW.css">
		<link rel="stylesheet" href="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/css/A.jquery-ui.css.pagespeed.cf.l5rE7WgkMu.css" type="text/css" media="all" />		
		<link rel="stylesheet" href="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/css/A.style.css.pagespeed.cf.yVD6J361ZW.css" type="text/css" media="all" />
		<!--[if IE]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" id="stylesheet-ie" href="css/css_ie.css" type="text/css" media="all" />
		<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type = "text/css">
form {text-align : center;}
h1 {text-align:center;color:orang;}

#okl {color:orange;}
#home {color:orange;}
</style>
		</head>
<body>  
    <a href="login.php" ><input type ="button" value="Login" id="home"></input></a>
</br></br></br></br>
    <h1>enter user data</h1>
	</br></br>
        <form  onsubmit="return validate()" action ="Controller.php" method= "post">
    
        First name :&nbsp;&nbsp;&nbsp;&nbsp;<input name="firstname" type="text" id = "fn"  />
</br></br>
Last name :&nbsp;&nbsp;&nbsp;&nbsp;<input name="lastname" type="text" id = "ln"  />
</br></br>
Username :&nbsp;&nbsp;&nbsp;&nbsp;<input name="username" type="text" id = "un"  />
</br></br>
Email : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="email" type="email"id = "em"/>
</br></br>
    Password : &nbsp;&nbsp;&nbsp;&nbsp;<input  type="password"id = "ps" name="password"  />
</br></br>
Number : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="number" id = "pn"  name="mobnum"placeholder="01XX-XXXX-XXX"  />
</br></br>
National ID : &nbsp;&nbsp;&nbsp;<input type="number"id = "ssn"  name ="ssn" placeholder="XXXX-XXXX-XXXX-XXXX" />
</br></br>
Birthdate : <input name="BoD" type = "date" />
	</br>
	</br> 
 <input type ="submit" name="submit" value ="Reigester" id = "okl" />
 </form>
 </body>
