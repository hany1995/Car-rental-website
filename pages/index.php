<?php
session_start();
if (!isset($_SESSION['username'])) 
    {
    include 'login.php';
    die();
        }

?>
<!doctybe html Public "-//W3C//DTD XHTMML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <script>
    function validate(){
  var location = document.getElementById('l');
  var returnLocation = document.getElementById('rl');
  var pickUpDate =document.getElementById('pud');
  var returnDate=document.getElementById('rd');
  var pickUpTime =document.getElementById('put');
   var returnTime =document.getElementById('rt');
   if (location.value ==''){
     alert('please enter location');
	 return false;
   }
         if (returnLocation.value ==''){
     alert('please enter Return Location');
	 return false;
   }
   if (pickUpDate.value ==''){
     alert('please enter Pick Up Date');
	 return false;
   }
  if (returnDate.value ==''){
     alert('please enter Return Date');
	 
	 return false;
   }
   if (pickUpTime.value ==''){
     alert('please enter phone Pick Up Time');
	 
	 return false;
   }
   if (returnTime.value ==''){
     alert('please enter Return Time');
	 return false;
   }

  }
    </script>

	<head>
           
		<title>Rent Cars &amp; Booking HTML5 Template</title>
                
                
		<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="A.style.css.pagespeed.cf.yVD6J361ZW.css">
		<link rel="stylesheet" href="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/css/A.jquery-ui.css.pagespeed.cf.l5rE7WgkMu.css" type="text/css" media="all" />		
		<link rel="stylesheet" href="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/css/A.style.css.pagespeed.cf.yVD6J361ZW.css" type="text/css" media="all" />
		<!--[if IE]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" id="stylesheet-ie" href="css/css_ie.css" type="text/css" media="all" />
		<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	<body class="left-slider two-column" style="background-color:#151B54">
            
		<div id="conteiner" >
			<div id="branding" style="height:113px">
				<div  id="branding-content">
					<div class="title-content" >
						<a href="index.php" title=""><img class="site-logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAMAAAC5zwKfAAAA/1BMVEVDS1b///9DS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1YH8tdMAAAAVHRSTlMAAAMGCQwPEhUYGx4hJCcqLTAzNjk8P0JFSEtOUVRXWl1gY2ZpbG9ydXh7foGEh4qNkJOWmZyfoqWoq66xtLe9wMPGyczP0tXY297h5Oft8PP2+fzW4R02AAACGklEQVRYw+2WbVPiMBCAexRRRIQLiIIgQkDkoJSDFPH08NBAedfS/v/fchtggNZWUDqj42Q/dNLd5pl9SXcj/HBZBA7kQA7kQA7kQA78OsBPk0PExLM7CNX+dg2zPFN6Q4r45OAjPEnyCB5wLY4xlglRtC6dywjIak58J05ULsyKAF2aCs+A7CffxfPWwxZNLb1a+6oaIP/93J7nl61Z8qumqgQUllLlcEteovwqQ3LOogiPgThthDefkUzhSactUsEXKLgKsu81ZRhlysN54dtSYt8OdBzFJdJWLcfEeKFtUsMZJBdZYqHmafyL3PctX/Ual0cLjgdORbVBh8bOgoB2Tl8M1+QMgHeGixIHYN9N4DEAdw64dZLTF8smq/3ubulSdr4oswrvbf7+Xh69ZS8LKWnAPI3Mz8x0swuTBHE29oBxW538Di1/py2CmkYfHW0EGIXk+l8azN+ob0V8FbrSadbRXgdEPvWqUcXunFMEbda4tguWTuD5BPamTXc4dQIGWJ8yqivF8JEUswixIM/Ye1qINO0awzJs9c94jafNjBoDdlskd45MmyqzDT2/7TTSFiMoKIhJmCA4ixoshcwTUS9FjmwbXfy281Dy2jfB2MyxwVo60kxxOstH4iMTbi9VqaXW6+9jc4j6hP3OWHRnuueZi6PmyLh0676wKG7JvRtITOmp9ajwmcJvsBzIgRzIgRzIgd8X+B/jrmZN116j2wAAAABJRU5ErkJggg==" alt="" /></a>
                                                <h1 class="site-title"><a href="index.php" title="">Rent cars</a></h1>	
                                                
					</div>
                                    
                                    
					<div class="access-content">
						<ul>
							<li class="current_page_item">
                                                            <a href="index.php" title="">Home</a>
                                                            </br>
												</li>
                                                                                                
							<li class="current_page_item">
                                                                                                                                    
 <?php

if(isset($_SESSION['username']))
{

    echo "<h1 style='color:orange;text-allign:center;'  /h1>", $_SESSION['username'];
}

?>
									
							</li>
                                                       <!-- <li><a href="myacc.php" title=""> My Account</a></li> -->

						</ul>
					</div>

                                    
                                    <!-- .access -->			
					<!--<div class="menus-content">	
						<div class="menus">							
							<div class="language">
								<select class="select" name="select_language"> 
									<option />English
				
								</select>
							</div>
							<div class="country">
								<select class="select" name="select_country"> 
									<option selected="selected" />Choose Country
									<option />Egypt
									<option />KSA
								</select>
							</div>
						</div>
						<div class="member">
                        -->
                        <form method="post" action="Controller.php" />
                                                                                                <input class="continue_button orange_button" name="submit" type="submit" value="View My Profile" id="1" />
                                                                                                </form>
                                                    <span ><a class="sign_button" href="logout.php" title="">Logout</a></span>



                                                       
						</div>
					</div>
				</div><!-- #branding-content -->
                                
				<div class="clear"></div>
			</div><!-- #branding -->
    <div id="progress-bar">
				<div id="progress-bar-steps">
					<div class="progress-bar-step current">
						<div class="step_number">1</div>
						<div class="step_name">Create request</div>
					</div>
					<div class="progress-bar-step step">
						<div class="step_number">2</div>
						<div class="step_name">Choose a car</div>
					</div>
					<div class="progress-bar-step step">
						<div class="step_number">3</div>
						<div class="step_name">Choose extras</div>
					</div>
					<div class="progress-bar-step last">
						<div class="step_number">4</div>
						<div class="step_name">Review &amp; Book</div>
					</div>
				</div>
        
				<div class="clear"></div>
			</div>	
                        
			<div id="slider">
				<div id="slider-img">
					<ul class="slides">
					    <li><img src="slider1.jpg" alt="" /></li>
					    <li><img src="xslider3.jpg.pagespeed.ic.jf00lIuMxy.jpg" alt="" /></li>
					    <li><img src="xslider2.jpg.pagespeed.ic.l28KoNHL_W.jpg" alt="" /></li>
					</ul>
					<div id="slider-pattern"></div>
				</div>
                            
				<div id="slider-content">
                                    <form onsubmit="return validate()" method="post" id="slider-form"  class="main-form" onsubmit="" action="Controller.php" />
						<div class="main_form_navigation">				
							
							<div id="book_car" class="title-form current"><a href="#" title="">Book a Car</a></div>
						</div>
						<div id="book_car_content" class="content-form ">
							<div class="location-block">
								<div class="form-block location">Pick Up Location</div>
                                                               <select style="width:180px" class="datepicker" type="date" value="" id="l" name="location" >
                                                                   <option class="datepicker"> Cairo</option>
                                                                    <option class="datepicker"> Alexendria</option>
                                                                    <option class="datepicker"> Sharm</option>
                                                                    <option class="datepicker"> Hurghada</option>
                                                                </select>
                                                                
                            </div> </br>
                                                    							<div class="form-block location">Return Location</div>
                                                   <div class="location-block">
	
                                                               <select style="width:180px" class="datepicker" type="date" value="" id="rl" name="returnLocation" >
                                                                    <option class="datepicker"> Cairo</option>
                                                                    <option class="datepicker"> Alexendria</option>
                                                                    <option class="datepicker"> Sharm</option>
                                                                    <option class="datepicker"> Hurghada</option>
                                                                </select>
                                                                
							</div>
							<div class="form-block pick-up">
								<h4>Pick-up date</h4>
                                                                <input style="width:180px" class="datepicker" type="date" value="" id="pud" name="pickUpDate" />
                                                                <div class="form-block pick-up">
								<h4>Pick-up time</h4>
                                                                <input style="width:180px" class="datepicker" type="time" value="" id="put" name="pickUpTime" />
							</div>
                                                    						
							</div>
							<div class="form-block drop-off">
								<h4>Drop-off date</h4>
                                                                <input style="width:180px" class="datepicker" type="date" id="rd" name="returnDate" value="" />
                                                                <div class="form-block pick-up">
								<h4>Drop-off time</h4>
                                                                <input style="width:180px" class="datepicker" type="time" id="rt" value="" name="returnTime" />						
							</div>
				
							</div>
                                                    
							<div  class="form-block form-submit form-continue">
								<input class="orange_button form-continue" name = "submit"type="submit" value="Continue" />
							</div>
						</div>
						<!--<div id="manage_reservation_content" class="content-form hidden">
							<div class="location-block">
								<div class="form-block location">Location</div>
								<div class="form-block airport_codes"><a href="#" title="">Airport codes</a></div>
								<input class="location" type="text" value="" placeholder="Enter airport, city or zip code" name="location" />
								<input id="location-checkbox-1" type="checkbox" class="styled" name="checkbox_location_1" value="1" />
								<label for="location-checkbox-1"> Return at different location</label>
							</div>
							<div class="location-block return_location">
								<div class="form-block location">Return location</div>
								<input class="location" type="text" value="" placeholder="Enter airport, city or zip code" name="returnLocation" />
							</div>
							<div class="form-block pick-up">
								<h4>Pick-up date</h4>
								<input class="datepicker" type="text" value="" name="pickUpDate" />
							</div>
							<div class="form-block drop-off">
								<h4>Drop-off date</h4>
								<input class="datepicker" type="text" name="returnDate" />
							</div>
							<div class="form-block car-type">
								<h4>Car type</h4>
								<div class="car-type-select">
									<select class="select" name="select_cartype_1"> 
										<option selected="selected" />Standard
										<option />Mini
									</select>
								</div>
							</div>
							<div class="form-block form-submit">
                                                            <input class="orange_button form-continue"name="submit" type="submit" value="Continue" />
							</div>
						</div>
						<div class="clear"></div>-->
					</form>
                                    
                                            
					<div id="slider-post">
						<div class="post">
							<div class="entry-header">
								<h3 class="entry-format">Great car hire deals.</h3>
							</div>
							<div class="entry-content">Just Enjoy !</div>
						</div>		
					</div>
					<div id="slider-front-img">	
						<img src="xslider_front_img.png.pagespeed.ic.SXjiVO6hdp.png" alt="" />
					</div>
				</div>			
			</div><!-- #slider -->
			<div id="main">
				<div id="primary">
					<div class="clear"></div>
					<div id="content">
						<div class="post">
							<div class="entry-header">
								<h3 class="entry-format" style="color:white">We are leading car rental agency with 300,000 Happy Customers.</h3>
							</div>
						</div>				
					</div>
					<aside id="secondary" >
						<div class="feature-single">
							<img class="feature-title-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASBAMAAACk4JNkAAAAMFBMVEVDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1YRkGS3AAAAD3RSTlMABgkMP0J4e5CTt8nh5Oe3otfaAAAAaUlEQVQI12NggAOW/b8dICy+ANYHEBY///8P/xpBLB4g6/8vAbDg9w///y8Esz4f/A8R5P/G9h8iyP8fBECCfGDW/wYGBg4IC2go03oYi0ELJgsR/KXAABVcBLYaKAgRYmDQuDuJAQkAAGuDRYux4mqpAAAAAElFTkSuQmCC" alt="" /><div class="feature-title" style="color:white">Special low rates on car booking</div>
						</div>						
						<div class="feature-single">
							<img class="feature-title-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAASCAMAAABo+94fAAAAZlBMVEVDS1b///9DS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1Yj1rBiAAAAIXRSTlMAAAYJDA8SP0JIS05UV1p4hIeKjZOWrre6wMbJ5Ofq+fx9DofnAAAAiklEQVQY023R2xqCIBAE4IWiIg0tO4og8/4vmSgoUHP5f7t7MUuM0W8YTczbAXO0INn3x8BXrFqPgAlscYrbfmIIDARUT97CnQtWDq9dc6GcJwXeRCLjWZ0ioVOOShoJL+rvIuHDqhlXXmsq+QGMi2b8uVd7KthCbuVJ2KKqkFsstjMbmo4H/vOGL4isEm+6wvBUAAAAAElFTkSuQmCC" alt="" /><div class="feature-title" style="color:white">Manage your booking online</div>

						</div>
						<div class="feature-single">
							<img class="feature-title-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAMAAABhEH5lAAAAclBMVEVDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1YW7IDIAAAAJXRSTlMAAwkMDxIeISQqLTM5VFdaaYeKjZCTlrS3vcbJ2Nve5+3w9vn8Fftq8wAAAKxJREFUGNN1kOsOgyAMhRHQTQUU8DqvIH3/VxwMZ7Is9k9PvqbNOUXopjK1ACwqu0AijWaUMm1kcpIeHA+CH9BHJgHAjds2Oi9kILnxcq8JqXc/MrlHrRZuTcMwXZ3QrRdziaYqXq0mVM6+W4wsjYhahO0vIhal9lwUEYkXYmGx0/x7fnFcd14U5ggmMI4mij+rKgYawH1cVA6G5IqtGCFMXbF9PZrwnOZ597w3VGoPfJjbxmcAAAAASUVORK5CYII=" alt="" /><div class="feature-title" style="color:white">Dedicated customer support</div>
						</div>
						<div class="feature-single">
							<img class="feature-title-img" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAMAAABhEH5lAAAAaVBMVEVDS1b///9DS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1bcPk6wAAAAInRSTlMAAAYMJyotMDk8P0JFSFFyjZCTt73JzM/V2Nvk5/Dz9vn8dkNwXAAAAKJJREFUGNN1kEsCgjAUA8eK1VaBtvgvQsn9D+lChYWa5SxeMg/+pArnaTqHaiHtKEnS2L6B6VSSN8anos4AEJW3cDzCNisA2KlYoOsAW6YNEJWWq0kBuMkB/nTygNMVKDJAv9/3gNFjRrmuM7DWANy1c0NT933dDG6nK5AUD2MD0IyHqLiMgNcI+yrOb2az4iwUPbg4C/3QBqpwkS6f56y+8gTe/g1o5F9lDQAAAABJRU5ErkJggg==" alt="" /><div class="feature-title" style="color:white">You are guaranteed a car</div>
						
						</div>					
					</aside>
					<div class="clear"></div>
				</div>
				<div id="sign_up_conteiner">
					<form action="#" id="sign_up" />
						<div class="sign_up_text">
							Signup for your email to celebrate great specials 
						</div>
						<div class="sign_up_form">
						
							<a href ="reigister.php" ><input class="orange_button" type="button" value="Signup" /></a>
						</div>
						<div class="clear"></div>
					</form>
                                    </br></br></br></br>

                                     <h3>To Make Enquiry </h3>

                                     <form method= "post"  action ="Controller.php">
    <input class="enquiry" type="text" value="" placeholder="Enter Your Enquiry Here " name="subject" />

    <input class="blue_button form-block" type ="submit" name="submit" value ="MAKE ENQUIRY"  />

 </form>
		</div>
			</div>
			<div class="clear"></div>
			<footer id="footer">			
			<!--	<div id="footer-menu" class="footer-content">
					<div class="widget-area">
						<div class="clear"></div>
						<div class="footer-nav footer-widget-single">
						</div>
						<div class="footer-nav footer-widget-single">

						</div>
						<div class="footer-nav footer-widget-single">
						</div>
						<div class="recent_tweets footer-widget-single">	
 						</div>
 					<!--	<div class="social-plugins">
 							<div class="fcbk_like">
 								<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.bestwebsoft.com&amp;locale=en_US&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21" style="border-width:0; border:none; overflow:hidden; width:450px; height:21px; background-color: transparent;"></iframe>
							</div>
							<div class="twitter_like">
	 							<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
								<script type="text/javascript">!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script>
							</div>
							<div class="google_plus_one">
								<div class="g-plusone" data-size="medium"></div>
								<script type="text/javascript">(function(){var po=document.createElement('script');po.type='text/javascript';po.async=true;po.src='https://apis.google.com/js/plusone.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(po,s);})();</script>								
							</div>
						</div>-->
						<div class="clear"></div> 						
					</div><!-- #footer-content -->
				</div>
				<div id="footer-content">
					<img class="site-logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAMAAAC5zwKfAAAA/1BMVEVDS1b///9DS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1YH8tdMAAAAVHRSTlMAAAMGCQwPEhUYGx4hJCcqLTAzNjk8P0JFSEtOUVRXWl1gY2ZpbG9ydXh7foGEh4qNkJOWmZyfoqWoq66xtLe9wMPGyczP0tXY297h5Oft8PP2+fzW4R02AAACGklEQVRYw+2WbVPiMBCAexRRRIQLiIIgQkDkoJSDFPH08NBAedfS/v/fchtggNZWUDqj42Q/dNLd5pl9SXcj/HBZBA7kQA7kQA7kQA78OsBPk0PExLM7CNX+dg2zPFN6Q4r45OAjPEnyCB5wLY4xlglRtC6dywjIak58J05ULsyKAF2aCs+A7CffxfPWwxZNLb1a+6oaIP/93J7nl61Z8qumqgQUllLlcEteovwqQ3LOogiPgThthDefkUzhSactUsEXKLgKsu81ZRhlysN54dtSYt8OdBzFJdJWLcfEeKFtUsMZJBdZYqHmafyL3PctX/Ual0cLjgdORbVBh8bOgoB2Tl8M1+QMgHeGixIHYN9N4DEAdw64dZLTF8smq/3ubulSdr4oswrvbf7+Xh69ZS8LKWnAPI3Mz8x0swuTBHE29oBxW538Di1/py2CmkYfHW0EGIXk+l8azN+ob0V8FbrSadbRXgdEPvWqUcXunFMEbda4tguWTuD5BPamTXc4dQIGWJ8yqivF8JEUswixIM/Ye1qINO0awzJs9c94jafNjBoDdlskd45MmyqzDT2/7TTSFiMoKIhJmCA4ixoshcwTUS9FjmwbXfy281Dy2jfB2MyxwVo60kxxOstH4iMTbi9VqaXW6+9jc4j6hP3OWHRnuueZi6PmyLh0676wKG7JvRtITOmp9ajwmcJvsBzIgRzIgRzIgd8X+B/jrmZN116j2wAAAABJRU5ErkJggg==" alt="" />
					<h1 class="site-title">Renty</h1>			
					<div class="company-name">Renty Company Inc,Cairo</div>
				</div><!-- #footer-content -->
			</footer><!--end:footer-->
		</div><!--end:conteiner-->
		<div id="overlay_block"></div>
		<div class="admin-form-content sign_register_block">
			<div class="admin-form-block">
	 			<form class="main-form admin-form" action="#" />	
	 				<div class="main_form_navigation">
		 				<div id="tab_register" class="title-form back"><span class="register"><a href="#register" title="">Register</a></span></div>				
						<div id="tab_sign_in" class="title-form current"><span class="sign_in"><a href="#sign_in" title="">Sign In</a></span></div>	
					</div>			
					<div id="tab_sign_in_content" class="content-form">
						<div>
							<input id="sign_in_email" class="input_placeholder" type="text" value="" placeholder="Email address" name="sign_in_email" />
						</div>
						<div>
							<input id="sign_in_pass" type="password" value="" name="sign_in_pass" />
						</div>
						<div>
							<input id="remember_me_checkbox" type="checkbox" class="styled" name="remember_me" value="1" />
							<label for="remember_me_checkbox"> Remember me next time</label>
						</div>
						<input class="admin-form-submit orange_button" type="submit" value="Continue" />
						<div class="admin_form_link">
							<span class="forgot_passwd"><a class="tab_link_button" href="#forgot_passwd" title="">Forgot password?</a></span>
						</div>
					</div>
					<div id="tab_register_content" class="content-form hidden">
						<div>
							<input id="register_email" class="input_placeholder" type="text" value="" placeholder="Email address" name="register_email" />
						</div>
						<div>
							<input id="register_name" type="text" value="" name="register_name" />
						</div>
						<div>
							<input id="register_remember_me_checkbox" type="checkbox" class="styled" name="remember_me" value="1" />
							<label for="register_remember_me_checkbox"> Remember me next time</label>
						</div>
						<input class="admin-form-submit orange_button" type="submit" value="Continue" />
						<div class="admin_form_link">
							<span class="sign_in"><a class="tab_link_button" href="#sign_in" title="">Already registered?</a></span>
						</div>
					</div>
					<div class="clear"></div>
				</form>				
				<div class="admin-form-separator">
					<div class="separator">Or</div>
				</div>
				<input class="connect_fb" type="button" value="Connect With Facebook" />
				<input class="connect_twitter" type="button" value="Connect With Twitter" />
			</div>
		</div>
		<div class="admin-form-content forgot_passwd_block"> 
			<div class="admin-form-block">
	 			<form class="main-form admin-form" action="#" />	 
	 				<div class="main_form_navigation">
	 					<div id="tab_forgot_passwd" class="title-form current">Forgot Password?</div>	
	 				</div>							
					<div id="tab_forgot_passwd_content" class="content-form">
						<input id="forgot_pass_email" class="input_placeholder" type="text" value="" placeholder="Email address" name="forgot_pass_email" />
						<div id="forgot_pass_text"> We will send you the password in few minutes.</div>
						<input class="admin-form-submit orange_button" type="submit" value="Continue" />
						<div class="admin_form_link">
							<span class="sign_in"><a class="tab_link_button" href="#sign_in" title="">Sign In</a></span>
						</div>
					</div>
					<div class="clear"></div>
				</form>
			</div>
		</div>
		<script type="text/javascript" src="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/js/jquery-1.10.1.min.js.pagespeed.jm.hJPIhFzu5k.js"></script>
		<script type="text/javascript" src="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/js/jquery-migrate-1.2.1.min.js.pagespeed.jm.mhpNjdU8Wl.js"></script>
		<script type="text/javascript" src="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/js/jquery-ui.js.pagespeed.jm.7bkf_uwmVN.js"></script>	
		<!--[if IE]>
		<script type="text/javascript" src="js/placeholder_ie.js"></script>		
		<![endif]-->
		<script type="text/javascript" src="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/js/jquery.meio.mask.js.pagespeed.jm.Ttl2wyMXUr.js"></script>
		<script type="text/javascript" src="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/js/custom-form-elements.js.pagespeed.jm.NHNBHjVvWo.js"></script>
		<script type="text/javascript" src="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/js/jquery.selectbox-0.2.min.js.pagespeed.jm.W5xucmszdS.js"></script>
		<script type="text/javascript">//<![CDATA[
(function($){$.fn.extend({blueberry:function(options){var defaults={interval:5000,duration:500,lineheight:1,height:'auto',hoverpause:false,pager:true,nav:true,keynav:true}
var options=$.extend(defaults,options);return this.each(function(){var o=options;var obj=$(this);var slides=$('.slides li',obj);var pager=$('.pager li',obj);var current=0;var next=current+1;var imgHeight=slides.eq(current).find('img').height();var imgWidth=slides.eq(current).find('img').width();var imgRatio=imgWidth/imgHeight;var sliderWidth=0;var cropHeight=0;slides.hide().eq(current).fadeIn(o.duration).addClass('active');if(pager.length){pager.eq(current).addClass('active');}else if(o.pager){obj.append('<ul class="pager"></ul>');slides.each(function(index){$('.pager',obj).append('<li><a href="#"><span>'+index+'</span></a></li>')});pager=$('.pager li',obj);pager.eq(current).addClass('active');}
if(pager){$('a',pager).click(function(){clearTimeout(obj.play);next=$(this).parent().index();rotate();return false;});}
var rotate=function(){slides.eq(current).fadeOut(o.duration).removeClass('active').end().eq(next).fadeIn(o.duration).addClass('active').queue(function(){clearTimeout(obj.play);rotateTimer();$(this).dequeue()});if(pager){pager.eq(current).removeClass('active').end().eq(next).addClass('active');}
current=next;next=current>=slides.length-1?0:current+1;};var rotateTimer=function(){obj.play=setTimeout(function(){rotate();},o.interval);};rotateTimer();if(o.hoverpause){slides.hover(function(){clearTimeout(obj.play);},function(){rotateTimer();});}
var setsize=function(){sliderWidth=$('.slides',obj).width();cropHeight=Math.floor(((sliderWidth/imgRatio)/o.lineheight))*o.lineheight;$('.slides',obj).css({height:cropHeight});};setsize();$(window).resize(function(){setsize();});if(o.keynav){$(document).keyup(function(e){switch(e.which){case 39:case 32:clearTimeout(obj.play);rotate();break;case 37:clearTimeout(obj.play);next=current-1;rotate();break;}});}});}});})(jQuery);
//]]></script>
		<script type="text/javascript" src="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/js/script.js.pagespeed.jm.ayF2h7n7ni.js"></script>
	</body>
</html>