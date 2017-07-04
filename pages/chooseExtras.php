<?php
session_start();
if (!isset($_SESSION['username'])) {
    include './login.php';
    die();
}

?>
<html lang="en-US">
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
	
	<body class="page page-two-column" style="background-color:#151B54">
		<div id="conteiner" >
			<div id="branding"  style="height:113px">
				<div id="branding-content">
					<div class="title-content" >
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
                
                    <!-- .access -->			
				<!--	<div class="menus-content">	
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
					<div class="progress-bar-step current">
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
			<div id="main">
                            <!--<form action="editreserve.php" class="main-form disabled_form" />						
					<div id="book_car" class="title-form current">
						<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAdVBMVEVDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1YRm3lyAAAAJnRSTlMABgwYGycqLTA2OTxIUYSHio2WmZyfoqirrrG3vcDh5Ofq7fDz/JwIDlYAAAB+SURBVBjTVchJFoIwAATRDokiyOyAihCCUvc/ohsfQ+3qyxRDKtd63zqlQ2FUctVhApiOulAqEOtBnyQ9T8UEgfTBSpavBAJpxEmOsMCNztqO+wIJAJwX0AvgrRXiGebTBtRAoy1E3kc7UJ5rD/9AgWz9jKCSXZVMPa471uYHQAgTgWUcvWgAAAAASUVORK5CYII=" alt="" />
						Edit Location &amp; Date
					</div>					
					<div id="book_car_content" class="content-form ">
						<div class="disabled_form_overlay"></div>
						<div class="location-block">
							<div class="form-block location">Location</div>
							<div class="form-block airport_codes"><a href="#" title="">Airport codes</a></div>
							<input class="location" type="text" value="" placeholder="Enter airport, city or zip code" name="select_time_from" disabled="disabled" />
							<input id="location-checkbox" type="checkbox" class="styled" name="checkbox_location" value="" disabled="disabled" />
							<label for="location-checkbox"> Return at different location</label>
						</div>
						<div class="form-block pick-up">
							<h4>Pick-up date</h4>
							<input class="datepicker" type="text" value="" name="data_from" disabled="disabled" />
							<input class="time-select" type="text" size="5" value="" name="time_from" disabled="disabled" />
						</div>
						<div class="form-block drop-off">
							<h4>Drop-off date</h4>
							<input class="datepicker" type="text" name="data_to" value="" disabled="disabled" />
							<input class="time-select" type="text" size="5" value="" name="time_to" disabled="disabled" />
						</div>
						<div class="form-block car-type">
							<h4>Car type</h4>
							<div class="car-type-select">
								<select class="select" name="select_cartype" disabled="disabled"> 
									<option selected="selected" />Standard
									<option />Mini
								</select>
							</div>
						</div>
						<div class="form-block form-submit">
							<input class="form-edit orange_button" type="submit" value="Edit" />
						</div>
					</div>					
					<div class="clear"></div>
				</form>
				</form>	-->
				
								
					<div id="content" class="sidebar-middle">
                                            <form action="Controller.php" method="post" />
							<div class="widget main-widget product-widget main-widget-3column">
								<div class="widget-title">
									<div>
										<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQBAMAAADt3eJSAAAAJFBMVEVDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1ZDS1bwY3eUAAAAC3RSTlMABkJIhIeKjeTn6vKYHgQAAAA8SURBVAjXYxDp3g0EOxwZoneDwVaG1QoMQMC0i2E3AxjsBkHu3btRGRRJrTYA0cy7YJZuYxCfDaJ3FgIAVMUzVcZqeM4AAAAASUVORK5CYII=" alt="" />
										Available Extras
									</div>
									<div class="clear"></div>	
								</div>
								<div class="post">
									<div class="checkbox-block_container">
										<div class="main-block_container">
											<div class="additional-block_container">
												<div class="checkbox-block">
													<input type="checkbox" class="styled" name="checkbox_extras" value="GPS" />
												</div>
												<div class="main-block">									
													<div class="product-img">
														<img src="xextras-1.png.pagespeed.ic.25fm5BHepO.png" alt="" />
													</div>
													<div class="product-info">
														<h3 class="entry-format">NeverLost GPS Navigator</h3>
														<div>Satellite Navigation System provides turn-by-turn directions. If your pickup and return location are not the same you may be charged a surcharge fee</div>
														<div class="details">
															<div class="view-details">[+] More details</div>
															<div class="close-details">[-] Close details</div>
														</div>
													</div>
													<p class="details-more">Proin a ipsum neque, sit amet adipiscing est. Donec iaculis erat ut ante ultricies at congue lectus lobortis. Maecenas ac varius felis. Nam sollicitudin dignissim nisl, non pretium urna luctus vitae. Phasellus et dolor ipsum, a vestibulum est. Phasellus eros leo, rutrum ac tempor nec.</p>								
												</div>
												<div class="additional-block">
													<p>$50.00</p>
												</div>
											</div>									
										</div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="post">
									<div class="checkbox-block_container">
										<div class="main-block_container">
											<div class="additional-block_container">
												<div class="checkbox-block">
													<input type="checkbox" class="styled" name="checkbox_extras" value="Baby_seat" />
												</div>
												<div class="main-block">									
													<div class="product-img">
														<img src="xextras-2.png.pagespeed.ic.fhrUzhr8CG.png" alt="" />
													</div>
													<div class="product-info">
														<h3 class="entry-format">Infant Child Seats</h3>
														<div>For infants less than one year and under 9kg.
															<div class="product-select-count">
																
															</div>
														</div>
														<div class="details">
															<div class="view-details">[+] More details</div>
															<div class="close-details">[-] Close details</div>
														</div>
													</div>	
													<p class="details-more">Proin a ipsum neque, sit amet adipiscing est. Donec iaculis erat ut ante ultricies at congue lectus lobortis. Maecenas ac varius felis. Nam sollicitudin dignissim nisl, non pretium urna luctus vitae. Phasellus et dolor ipsum, a vestibulum est. Phasellus eros leo, rutrum ac tempor nec.</p>							
												</div>
												<div class="additional-block">
													<p>$50.00</p>
													
												</div>
											</div>		
										</div>						
									</div>
									<div class="clear"></div>
								</div>
								<div class="post last_child">
									<div class="checkbox-block_container">
										<div class="main-block_container">
											<div class="additional-block_container">
												<div class="checkbox-block">
													<input type="checkbox" class="styled" name="checkbox_extras" value="Hand_controls" />
												</div>
												<div class="main-block">									
													<div class="product-img">
														<img src="xextras-3.png.pagespeed.ic.ciiuY-K3ke.png" alt="" />
													</div>
													<div class="product-info">
														<h3 class="entry-format">Hand Controls</h3>
														<div>Left or Right steering wheel controls for the physically challenged.</div>
														<div class="details">
															<div class="view-details">[+] More details</div>
															<div class="close-details">[-] Close details</div>													
														</div>												
													</div>
													<p class="details-more">Proin a ipsum neque, sit amet adipiscing est. Donec iaculis erat ut ante ultricies at congue lectus lobortis. Maecenas ac varius felis. Nam sollicitudin dignissim nisl, non pretium urna luctus vitae. Phasellus et dolor ipsum, a vestibulum est. Phasellus eros leo, rutrum ac tempor nec.</p>				
												</div>
												<div class="additional-block">
													$50.00											
												</div>
											</div>								
										</div>
									</div>
									<div class="clear"></div>
								</div>							
							</div>
							<div class="next_page">
                                                            
								<input class="continue_button blue_button" type="submit" name="submit" value="Continue to checkout" />
                                                                       
							</div>
						</form>
					</div>				
					<div class="clear"></div>
				</div>	
			</div>
			<div class="clear"></div>
			<footer id="footer">			
				<!--<div id="footer-menu" class="footer-content">
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
								<li><a href="10-faq.html" title="">FAQ</a></li>
							</ul>
						</div>
						<div class="recent_tweets footer-widget-single">
 							<h3>Recent tweets</h3>
 							<div class="recent_tweets_content"><a href="#" title="">@bestwebsoft</a> velit, vitae tincidunt orci. Proin vitae auctor lectus.</div>
 							<div class="recent_tweets_url"><a href="#" title="">http://bestwebsoft.com</a></div>
	 						<div class="recent_tweets_time">posted 2 days ago</div>	 						
 						</div>
 						<div class="support footer-widget-single">
 							<img src="xsupport-icon.png.pagespeed.ic.LBTLiJj6aG.png" alt="" />
 							<div class="title">Online support</div>
 							<div class="phone">+1 (555) 555 - 28 - 28</div>
 							<div class="email"><a href="#" title="">sales@bestwebsoft.com</a></div>			
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
					</div><!-- #footer-content 
				</div>-->
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
		<script type="text/javascript" src="http://bestwebholding.com/demo_theme/renty-car-rental-and-booking-html5-template/js/script.js.pagespeed.jm.ayF2h7n7ni.js"></script>
	</body>
</html>