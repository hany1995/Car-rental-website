<?php
session_start();
if (!isset($_SESSION['username'])) {
    include './login.php';
    die();
}

?>
<!doctybe html Public "-//W3C//DTD XHTMML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <script>
    function validate(){
  var ModelName = document.getElementById('mn');
  var Price  = document.getElementById('p');
  var Color =document.getElementById('co');
 
   if (ModelName.value ==''){
     alert('please enter Model Name');
	 return false;
   }
         if (Price.value ==''){
     alert('please enter car price');
	 return false;
   }
   if (Color.value ==''){
     alert('please enter Car Color');
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
    <a href="usermanagment.php" ><input type ="button" value="Back" id="home"></input></a>
</br></br></br></br>
    <h1>Enter Car Data</h1>
	</br></br>
        <form  onsubmit="return validate()" action ="Controller.php" method= "post">
    
     
Model Name :&nbsp;&nbsp;&nbsp;&nbsp;<input name="modelName" type="text" id = "mn"  />
</br></br>
Car Price :&nbsp;&nbsp;&nbsp;&nbsp;<input name="price" type="number" id = "p"  />
</br></br>
Car Color : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="color" type="text"id = "co"/>
</br></br>
  
	</br>
	</br> 
 <input type ="submit" name="submit" value ="Add" id = "okl" />
 </form>
 </body>
