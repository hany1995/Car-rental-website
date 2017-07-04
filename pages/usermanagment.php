<?php
session_start();
setcookie(session_name(), '', 100);
//$_SESSION=array();

if (!isset($_SESSION['username'])) {
    include './login.php';
    die();
}

?>

<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>Renty - Car Rental &amp; Booking HTML5 Template</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="A.style.css.pagespeed.cf.yVD6J361ZW.css">
		<link rel="stylesheet" type="text/css" href="css_ie.css">
		<link rel="stylesheet" type="text/css" href="A.jquery-ui.css.pagespeed.cf.l5rE7WgkMu.css">
		<link rel="stylesheet" type="text/css" href="A.jquery.slider.min.css.pagespeed.cf.mLNjgcgeJ6.css">

		<link rel="stylesheet" href="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/css/A.jquery-ui.css.pagespeed.cf.l5rE7WgkMu.css" type="text/css" media="all" />		
		<link rel="stylesheet" href="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/css/A.style.css.pagespeed.cf.yVD6J361ZW.css" type="text/css" media="all" />
		<link rel="stylesheet" href="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/css/A.jquery.slider.min.css.pagespeed.cf.mLNjgcgeJ6.css" />	
		<!--[if IE]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" id="stylesheet-ie" href="css/css_ie.css" type="text/css" media="all" />
		<![endif]-->		
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	<body class="page no-main-form">
		<div id="conteiner">
			<div id="branding">
				<div id="branding-content">
					<div class="title-content">
						<a href="01-home-v1.html" title=""><img class="site-logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAMAAAC5zwKfAAAA/1BMVEVDS1b///9DS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1YH8tdMAAAAVHRSTlMAAAMGCQwPEhUYGx4hJCcqLTAzNjk8P0JFSEtOUVRXWl1gY2ZpbG9ydXh7foGEh4qNkJOWmZyfoqWoq66xtLe9wMPGyczP0tXY297h5Oft8PP2+fzW4R02AAACGklEQVRYw+2WbVPiMBCAexRRRIQLiIIgQkDkoJSDFPH08NBAedfS/v/fchtggNZWUDqj42Q/dNLd5pl9SXcj/HBZBA7kQA7kQA7kQA78OsBPk0PExLM7CNX+dg2zPFN6Q4r45OAjPEnyCB5wLY4xlglRtC6dywjIak58J05ULsyKAF2aCs+A7CffxfPWwxZNLb1a+6oaIP/93J7nl61Z8qumqgQUllLlcEteovwqQ3LOogiPgThthDefkUzhSactUsEXKLgKsu81ZRhlysN54dtSYt8OdBzFJdJWLcfEeKFtUsMZJBdZYqHmafyL3PctX/Ual0cLjgdORbVBh8bOgoB2Tl8M1+QMgHeGixIHYN9N4DEAdw64dZLTF8smq/3ubulSdr4oswrvbf7+Xh69ZS8LKWnAPI3Mz8x0swuTBHE29oBxW538Di1/py2CmkYfHW0EGIXk+l8azN+ob0V8FbrSadbRXgdEPvWqUcXunFMEbda4tguWTuD5BPamTXc4dQIGWJ8yqivF8JEUswixIM/Ye1qINO0awzJs9c94jafNjBoDdlskd45MmyqzDT2/7TTSFiMoKIhJmCA4ixoshcwTUS9FjmwbXfy281Dy2jfB2MyxwVo60kxxOstH4iMTbi9VqaXW6+9jc4j6hP3OWHRnuueZi6PmyLh0676wKG7JvRtITOmp9ajwmcJvsBzIgRzIgRzIgd8X+B/jrmZN116j2wAAAABJRU5ErkJggg==" alt="" /></a>
                                                <h1 class="site-title"><a href="usermanagment.php" title="">Rent cars</a></h1>								
					</div>					
					<div class="access-content">
						<ul>
							<li>
                                                            <a href="logout.php" title="">Logout</a>
								
							</li>
							
                                                        <li class="current_page_item"><a href="usermanagment.php" title="">Management</a></li>
						</ul>
					</div><!-- .access -->			
					<div class="menus-content">	
						<div class="menus">							
							<div class="language">
								<select class="select" name="select_language"> 
									<option />English
									<option selected="selected" />French
								</select>
							</div>
							<div class="country">
								<select class="select" name="select_country"> 
									<option selected="selected" />Choose Country
									<option />USA
									<option />England
								</select>
							</div>
						</div>
						<div class="member">
							
						</div>
					</div>
				</div><!-- #branding-content -->
		
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
h1 {text-align:center;color:orange}

#add {color:orange;}
#home {color:orange;}
</style>
		</head>
<body>  
    </br></br>
    <form method= "post"  action ="AdminReigister.php">
            <input class="orange_button form-block" type ="submit" name="submit" value="Add Admin" />
</br></br>
  </br></br>
  </form>
  <form method= "post"  action ="Controller.php">
            <input class="orange_button form-block" type ="submit" name="submit" value="Enquairy List" />
</form>
            </br></br>
</br></br></br></br>
</form>

    <h1>Users Management</h1>
	</br></br>
        <form method= "post"  action ="Controller.php">
            <input class="orange_button form-block" type ="submit" name="submit" value="LIST" />
</br></br>
</form>
        <form method= "post"  action ="DeleteModel.php">
            <input class="orange_button form-block" type ="submit" name="submit" value="Delete" />
</br></br>
</br></br>
</form>
    <h1>Cars Management</h1>
    </br></br>
</br></br>
<form method= "post"  action ="Controller.php">
    <input class="orange_button form-block" type ="submit" name="submit" value ="lIst"  />
</br></br>
 </form>
<form method= "post"  action ="AddCar.php">
    <input class="orange_button form-block" type ="submit" name="submit" value ="Add"  />
</br></br>
 </form>
<form method= "post"  action ="DeleteCarModel.php">
    <input class="orange_button form-block" type ="submit" name="submit" value ="DElete"  />
</br></br>
 </form>
<h1>Reservation Management</h1>
	</br></br>
        <form method= "post"  action ="Controller.php">
            <input class="orange_button form-block" type ="submit" name="submit" value="List" />
</br></br>
</form>
        <form method= "post"  action ="CancelReservationModel.php">
            <input class="orange_button form-block" type ="submit" name="submit" value="Delete" />
</br></br>
</br></br>
</form>
<h1>Generate Report </h1>
    </br></br>
</br></br>
<form method= "post"  action ="Report.php">
    <input class="orange_button form-block" type ="submit" name="submit" value ="For Users"  />
    </br></br>

 </form>
<form method= "post"  action ="CarsReport.php">
    <input class="orange_button form-block" type ="submit" name="submit" value ="For Cars"  />
    </br></br>

 </form>
<form method= "post"  action ="ReservationReport.php">
    <input class="orange_button form-block" type ="submit" name="submit" value ="For Reservation"  />

 </form>
 </body>
