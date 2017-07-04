
<!doctybe html Public "-//W3C//DTD XHTMML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
    <script>
    function validate(){
  var CardNum = document.getElementById('cn');
  var CVV = document.getElementById('cvv');
  var firstname =document.getElementById('fn');
  var lastname=document.getElementById('ln');
  var city =document.getElementById('c');
   var postalcode =document.getElementById('pc');
      var billingaddress =document.getElementById('ba');

   if (CardNum.value.length != 16 ){
     alert('please enter Card Number correctly');
	 return false;
   }
         if (CVV.value.length !=3){
     alert('please enter CVV correctly');
	 return false;
   }
   if (firstname.value ==''){
     alert('please enter Your First Name');
	 return false;
   }
  if (lastname.value ==''){
     alert('please enter Your Last Name');
	 
	 return false;
   }
   if (city.value ==''){
     alert('please enter City');
	 
	 return false;
   }
   if (postalcode.value.length != 5){
     alert('please enter Postal Code correctly');
	 return false;
   }
 if (billingaddress.value ==''){
     alert('please enter Billing Address');
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
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
	
	<body class="page page-two-column no-main-form" style="background-color:#151B54">
		<div id="conteiner">
			<div id="branding"  style="height:113px">
				<div id="branding-content" >
					<div class="title-content">
						<a href="01-home-v1.html" title=""><img class="site-logo" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAMAAAC5zwKfAAAA/1BMVEVDS1b///9DS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1YH8tdMAAAAVHRSTlMAAAMGCQwPEhUYGx4hJCcqLTAzNjk8P0JFSEtOUVRXWl1gY2ZpbG9ydXh7foGEh4qNkJOWmZyfoqWoq66xtLe9wMPGyczP0tXY297h5Oft8PP2+fzW4R02AAACGklEQVRYw+2WbVPiMBCAexRRRIQLiIIgQkDkoJSDFPH08NBAedfS/v/fchtggNZWUDqj42Q/dNLd5pl9SXcj/HBZBA7kQA7kQA7kQA78OsBPk0PExLM7CNX+dg2zPFN6Q4r45OAjPEnyCB5wLY4xlglRtC6dywjIak58J05ULsyKAF2aCs+A7CffxfPWwxZNLb1a+6oaIP/93J7nl61Z8qumqgQUllLlcEteovwqQ3LOogiPgThthDefkUzhSactUsEXKLgKsu81ZRhlysN54dtSYt8OdBzFJdJWLcfEeKFtUsMZJBdZYqHmafyL3PctX/Ual0cLjgdORbVBh8bOgoB2Tl8M1+QMgHeGixIHYN9N4DEAdw64dZLTF8smq/3ubulSdr4oswrvbf7+Xh69ZS8LKWnAPI3Mz8x0swuTBHE29oBxW538Di1/py2CmkYfHW0EGIXk+l8azN+ob0V8FbrSadbRXgdEPvWqUcXunFMEbda4tguWTuD5BPamTXc4dQIGWJ8yqivF8JEUswixIM/Ye1qINO0awzJs9c94jafNjBoDdlskd45MmyqzDT2/7TTSFiMoKIhJmCA4ixoshcwTUS9FjmwbXfy281Dy2jfB2MyxwVo60kxxOstH4iMTbi9VqaXW6+9jc4j6hP3OWHRnuueZi6PmyLh0676wKG7JvRtITOmp9ajwmcJvsBzIgRzIgRzIgd8X+B/jrmZN116j2wAAAABJRU5ErkJggg==" alt="" /></a>
                                                <h1 class="site-title"><a href="index.php" title="">Rent cars</a></h1>								
					</div>					
				<div class="access-content">
						<ul>
							<li class="current_page_item">
                                                            <a href="index.php" title="">Home</a>
							
							</li>
							
                                                       <!-- <li><a href="myacc.php" title=""> My Account</a></li> -->

						</ul>
                    </div>

       <?php
if(isset($_SESSION['username']))
{
    echo $_SESSION['username'];
}

?>              
                    
                    <!-- .access -->			
			<!--		<div class="menus-content">	
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
                                                    <span class="sign_in"><a class="sign_button tab_link_button" href="login.php" title="">logout</a></span>
						</div>
					</div>
				</div><!-- #branding-content -->
				<div class="clear"></div>
			</div><!-- #branding -->
			<div id="progress-bar">
				<div id="progress-bar-steps">
					<div class="progress-bar-step done">
						<div class="step_number">1</div>
						<div class="step_name">Create request</div>
					</div>
					<div class="progress-bar-step done">
						<div class="step_number">2</div>
						<div class="step_name">Choose a car</div>
					</div>
					<div class="progress-bar-step done">
						<div class="step_number">3</div>
						<div class="step_name">Choose extras</div>
					</div>
					<div class="progress-bar-step last current">
						<div class="step_number">4</div>
						<div class="step_name">Review &amp; Book</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>				
			<div id="main">				
				<div id="primary">					
					<div class="clear"></div>
					<!--<aside id="secondary" class="sidebar-left">	
						<div class="widget">
							<h3 class="widget-title">
								<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAclBMVEVDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1YW7IDIAAAAJXRSTlMAAwYMJyotMDk8P0hOcn6NkJOlq663ur3GzM/V2Nve5PDz9vn8HGFGjwAAAJxJREFUGNNlj1tCwjAAwEKdhY1HW8YbZUqb+1/Rj+3PXCAJAF26t3ZPHQv7t6q+9wCEs7UMIQyleg5AdlrDMMB6MkFsNQLXKxBr+yRbgF57oJj4st9dXqqvy673STWEcbaMIfhDNbA6qZ5WfPjLtxs4qB5g45NihtHbzRGyedYet7A9EmuLUJzivBAn85KeB+jzkv5vDujSQx/z/h/p6hC8DcfSvwAAAABJRU5ErkJggg==" alt="" />
								Order Info
							</h3>
							<h4>
								Car
								<a href="04-choose-car.html" title="">Edit</a>
							</h4>
							<div class="widget-content main-block product-widget-mini">								
								<div class="product-img">
									<img src="xproduct-mini.png.pagespeed.ic.3oyLWbANAY.png" alt="" />
								</div>
								<div class="product-info">
									<div class="entry-format">
										<div>Ford Escape</div>
										<span>Economy</span>
									</div>
									<div class="features">
										<p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAUtJREFUOI2d0j9IVXEUwPGPr8cDwRAE48oFB5empkCXhJaa3ANBCBpEF0HBSQjBtcG9wCVBWosXTQmhGDgJLm2i+KZQaI0a3rly3g9dPHA4v+/5d8/vd8/Q4dGxJDXe4VnwD6zhNZYSXzQF7VT8GAcYS75XeIFZTBd8Cq2UvBXF+5gJ3Q/fFhYLBkPpClcYxQR64atwiT94GFc8TzwwwWjYXvI155GwFwUPNLiX5AbXYevkq4tYVfBAg69h30diFecmVuFjkTvwiJP4hU4x5V9M6e/CZuKzPEGNT7cUw4OI7WAvcd006KCrvygnmMOj0LnwTeMzlhN30WljFU/wEy/zA+GL/vp+i6I3eB78FCst/R0X3XNxI9cRgwX8xnrDLQwHjN9SrIg1v7F5q6qFDwFd/LtDu5GzE1PccBtvo+N8+kIpPexiG98Tb/wHpNJRBu5mDi8AAAAASUVORK5CYII=" alt="" /> 5 passengers</p>
										<p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAKpJREFUOI3t0yEKAkEUxvHfLuIBTCbrwlarR/AEgsmkV/ACnkBBtHoAz2ASw6YFk2AyWa2GHYswKq7RPwzD+5jv4/F4k+wPhTo0InoTU7RDfcEMt+eHaSSgixzLcPKgRTvIwn1FJxieyUIHZ7SCdkz2h2KFEXbYYB7p6sEEA/SwTjF8Y3jFMFUN7FuasSF+zD/gRwGnGv5TA32MVStaqnb/FSW2KLBI6n7nO8vQHaJiqzNrAAAAAElFTkSuQmCC" alt="" /> 3 large suitcases, 2 small suitcase</p>
										<p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAaVBMVEXKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDKzNDOz9PR09bV1tnY2t3c3eDj5Obm5+nq6+zt7u/x8fL09fb4+Pn7/Pz///+OpB/0AAAAFHRSTlMABicqLXKNkJO3zM/V2Nvw8/b5/DbgOXEAAACGSURBVBjTbY/ZFoMgDESjVXDppom1am2B///IMlF8ae8DM+RMCCGK5KZhbkxOO2UnSlfqNavloM5iwap1YYQYooJhZu8WKJ9SYF38sEUukClMY5jhztRDVifycXA3LQw+gGe0d7riSYx4hJe2VJLSbx8Pu49NcEEaObD/vv6znK7firTb+l/ISBBvthVvpwAAAABJRU5ErkJggg==" alt="" /> automatic transmission</p>
										<p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAWtJREFUOI1900GEVXEUBvDfvJcY3ihDxBCTySQaZYhWZVat36ZFahMtMhGJVrWPGaJtxGjRplWLNi0ytEijYTalFDGKeMQlhsss/t/17uS9dzjuuef+z3e+/znfnfrwcdsEe4wu7o07cGhCcRdnWnE96lBnTPEqvmMx/hkPJgFcxGHcxAs8xwbm4i/xFK9xC9O41Fyhh038wLe8Vyk4lwbPkjuCq3iI4zjayYelAFzBfAq/YhkX8D65eaxgB6dRNUOcxln8DOCn5Ht51snt4G9AZ9szGOBJUO8GpMZ5nEpc4XbYPsKfNkAVkDpsmq41/mEvuWOt8xVMRUjLeBvUQSiOsq00mMNlbDcMdvEGC/F+wNrexwlFXO/wu2HQw6/Q3QrNJUVAa2lwR9nSpqFCu5jp5I43cFLZ90CZ/nVlZSuKwHrKBjYy7GvtGfxvq7hvqP8u1pVNHbBxABRpv0rcN9zEAZv0N+7hSyseafsMGl3vr6omhAAAAABJRU5ErkJggg==" alt="" /> air conditioning</p>
										<p><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABHNCSVQICAgIfAhkiAAAAQdJREFUOI2d079HRWEYwPFPOSLuFFEul8udSkQcIhpaIlqjqbvUEm2NDS0NaUtrFKk/ICKiNQ2XO10i7hQRV01NDec9XDnndE7P9D6/vu/z431Hnp4759iSL8fYz3NGaOEU3Qx/jJmc3HVMRUG5w21G0Bc2M+xLuMbKaF5pf8gRPtD8D6CGRUnbcdrCKuoZwTEa2MY9XjGJNwzQSAG7BTf2sYw9zIYK6jjDTlSQmEoXbXwGfRAqmIayM2iFSoTkGiaqAGJ0wvkbD1irApgfAsANNqoA5n4BHrFQBZCuLpX3YCsN6KM5pNcDRJk1kvR8IHm+PZzgMgX0MF6Q/IIrySAvMCb5fIfwA46eLzPeM/T2AAAAAElFTkSuQmCC" alt="" /> 9 km/l</p>						
									</div>
									<div class="details">
										<div class="view-details">[+] View car details</div>
										<div class="close-details">[-] Close car details</div>
										<ul class="details-more">
											<li>6-speaker radio/CD system</li>
											<li>Escaro black fabric</li>
											<li>Hybrid System display</li>
											<li>Vehicle Stability Control</li>
											<li>Hill-start Assist Control</li>										
										</ul>
									</div>
								</div>
								</div>
							<h4>
								Date &amp; Location
								<a href="01-home-v1.html" title="">Edit</a>
							</h4>
							<div class="widget-content widget-info">									
								<h4>Pick Up time</h4>
								<p>Wed, 06 Mar, 2013 at 10:00</p>
								<h4>Return time</h4>
								<p>Thu, 21 Mar, 2013 at 10:00</p>
								<h4>Pickup and Return Location</h4>
								<p>New York City JFK Airport</p>
								<div class="subtotal_content">
									<div class="subtotal">										
										Subtotal: <span class="price">$3568.00</span>
									</div>
								</div>
							</div>
							<h4>
								Extras
								<a href="05-choose-extras.html" title="">Edit</a>
							</h4>
							<div class="widget-content widget-extras">								
								<p>Infant Child Seats x 2 <span class="price">$200.00</span></p>
								<p>NeverLost <span class="price">$129.99</span></p>
							</div>
							<div class="widget-footer widget-footer-total">
								Total: <span class="price">$3897.99</span>
							</div>
						</div>															
					</aside>-->	
					<div id="content" class="sidebar-middle">
                                            <form onsubmit="return validate()" action="Controller.php" method="post" class="complete_reservation" />
							<div class="widget main-widget main-widget-3column">
								<div class="widget-title">
									<div>
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAAJFBMVEVDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1bwY3eUAAAAC3RSTlMABkJIhIeKjeTn6vKYHgQAAAA8SURBVAjXYxDp3g0EOxwZoneDwVaG1QoMQMC0i2E3AxjsBkHu3btRGRRJrTYA0cy7YJZuYxCfDaJ3FgIAVMUzVcZqeM4AAAAASUVORK5CYII=" alt="" />
										Complete reservation form
									</div>
									<div class="clear"></div>	
								</div>
								<h4>Note</h4>
								<div class="widget-content widget-note">									
									<h4>Upon completing this reservation, you will receive:</h4>								
									<ul>
										<li>Your rental voucher to produce on arrival at the rental desk</li>
										<li>A toll-free customer support number</li>
									</ul>
								</div>
								
								<h4>Credit card information</h4>
								<div class="widget-content personal_info">
									<div class="form_element">
										<div>Card Type</div>
										<img src="xvisa.png.pagespeed.ic.4Y5Tip-0i0.png" alt="" />
										<img src="xmaster_card.png.pagespeed.ic._o1Ow7EtuB.png" alt="" />
										<img src="xamerican_express.png.pagespeed.ic.PqHXYWA8yt.png" alt="" />
									</div>
									<div class="clear"></div>
									<div class="form_element">
										<div>Card number</div>
                                                                                <input type="number" value="" id="cn" placeholder="XXXX-XXXX-XXXX-XXXX" name="card_number" />
									</div>
									<div class="form_element">
										<div>Expiration date</div>
										<div class="product-select-count">
											<select class="select" name="expiration_date_month"> 
												<option selected="selected"/>1
												<option />2
												<option />3
												<option />4
												<option />5
												<option />6
												<option />7
												<option />8
												<option />9
												<option />10
												<option />11
												<option />12
											</select>
										</div>
										<div class="product-select-count expiration_date_year">
											<select class="select" name="expiration_date_year">
												<option />2013 
												<option />2014
												<option />2015
												<option />2016
												<option selected="selected" />2017
											</select>
										</div>											
									</div>
									<div class="form_element">
										<div>CVV</div>
                                                                                <input class="cvv" type="number" value="" id="cvv" placeholder="XXX" name="cvv" />
									</div>
									<div class="clear"></div>										
									<div class="form_element">
										<div>Name on card</div>
                                                                                <input type="text" value="" placeholder="First name" id="fn" name="card_first_name" />
									</div>
									<div class="form_element">
                                                                            <input class="no-lable" type="text" value="" id="ln" placeholder="Last name" name="card_last_name" />
									</div>
									<div class="clear"></div>
								</div>
								<h4>Billing address</h4>
								<div class="widget-content personal_info">
									<div class="form_element">
										<div>City</div>
                                                                                <input type="text" value="" id="c" placeholder="Enter city name" name="city" />
									</div>
								<!--	<div class="form_element">
										<div>Country</div>
										<div class="card_country">
											<select class="select" name="card_country">
												<option />Select country 
												<option />USA
												<option />England
											</select>
										</div>
									</div>-->
									<div class="form_element">
										<div>Postal code</div>
                                                                                <input class="postal_code" type="number" value="" id="pc" placeholder="XXXXX" name="postal_code" />
									</div>
									<div class="clear"></div>
									<div class="form_element">
										<div>Billing address</div>
                                                                                <input class="billing_address" type="text" value="" id="ba" placeholder="Enter billing address" name="billing_address" />
									</div>
									<div class="form_element">
										<div>Billing address 2 <span>(Optional)</span></div>
										<input class="billing_address" type="text" value="" placeholder="Enter billing address" name="billing_address_2" />
									</div>
									<div class="clear"></div>
								</div>																								
							</div>
							<div class="next_page">
                                                            <input class="continue_button blue_button" type="submit" name="submit" value="Book Now" />
							</div>
						</form>
					</div>				
					<div class="clear"></div>
				</div>	
			</div>
			<div class="clear"></div>
			<footer id="footer">			
			<!--	<div id="footer-menu" class="footer-content">
					<div class="widget-area">
						<div class="clear"></div>
						<div class="footer-nav footer-widget-single">
							<h3 class="widget-title">Renty</h3>
							<ul>
								<li><a href="01-home-v1.html" title="">Home</a></li>
								<li><a href="#" title="">Privacy</a></li>
								<li><a href="#" title="">Services</a></li>
								<li><a href="#" title="">Partners</a></li>
								<li><a href="#" title="">News</a></li>
							</ul>
						</div>
						<div class="footer-nav footer-widget-single">
							<h3 class="widget-title">About</h3>
							<ul>
								<li><a href="#" title="">Latest News</a></li>
								<li><a href="#" title="">Press Releases</a></li>
								<li><a href="#" title="">Careers</a></li>
								<li><a href="#" title="">Terms of Use</a></li>
							</ul>
						</div>
						<div class="footer-nav footer-widget-single">
							<h3 class="widget-title">Support</h3>
							<ul>
								<li><a href="#" title="">Contact Us</a></li>
								<li><a href="#" title="">Find Your Invois</a></li>
							</ul>
						</div>
						<div class="recent_tweets footer-widget-single">
 							<h3>Recent tweets</h3>
 							<div class="recent_tweets_content"><a href="#" title="">@bestwebsoft</a> velit, vitae tincidunt orci. Proin vitae auctor lectus.</div>
 							<div class="recent_tweets_url"><a href="#" title="">http://bestwebsoft.com</a></div>
	 						<div class="recent_tweets_time">posted 2 days ago</div>	 						
 						</div>
 						<div class="support footer-widget-single">
 							
 							<div class="title">Online support</div>
 							<div class="phone">+02222222</div>
 							<div class="email"><a href="#" title="">ourteam@yahoo.com</a></div>			
 						</div>
 						<div class="social-plugins">
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
						</div>
						<div class="clear"></div> 						
					</div><!-- #footer-content -->

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
		<script type="text/javascript" src="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/js/custom-form-elements.js.pagespeed.jm.NHNBHjVvWo.js"></script>
		<script type="text/javascript" src="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/js/jquery.selectbox-0.2.min.js.pagespeed.jm.W5xucmszdS.js"></script>
		<script type="text/javascript" src="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/js/script.js.pagespeed.jm.ayF2h7n7ni.js"></script>
	</body>
</html>