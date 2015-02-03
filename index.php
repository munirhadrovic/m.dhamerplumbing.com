<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">

		<script src="js/jquery-1.11.2.js"></script>
		<script>
		    $(document).on("mobileinit", function(evt) {
		      // Change some settings
		    	$.mobile.defaultPageTransition = "flip";
		    	$.mobile.pageLoadErrorMessage = "Whoops!";
		    	$.mobile.pageLoadErrorMessageTheme = "b";
			});
		</script>
        <link rel="stylesheet" href="css/themes/eldin.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
		<script src="js/jquery.mobile-1.4.5.js"></script>
		<link rel="stylesheet" href="css/slicknav.css" />
		<script src="js/jquery.slicknav.js"></script>
		<script type="text/javascript" src="js/responsiveslides.js"></script>
		<link rel="stylesheet" href="css/style-mobile.css">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script>
			
			$(function(){
			   	$( "[data-role='header'], [data-role='footer']" ).toolbar();
			});	    	
		   	$(function(){
				$('#menu').slicknav({
					prependTo:'#navigation-menu'
				});
			});
            $(function(){
                $('#menu2').slicknav({
                    prependTo:'#navigation-menu2'
                });
            });
            $(function(){
                $('#menu3').slicknav({
                    prependTo:'#navigation-menu3'
                });
            });
			$(function(){
				$('#menu-contact').slicknav({
					prependTo:'#navigation-menu-contact'
				});
			});
			$(function () {

		      // Slideshow 4
		      	$("#slider4").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		    $(function () {

		      // Slideshow web
		      	$("#slider-web").responsiveSlides({
			        auto: true,
			        pager: false,
			        nav: false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
		      	});

		    });
		   
			// $(document).bind ('pageshow', function (e, data) {
			// 	console.log ($('#page1'));
			// 	console.log ($.mobile.activePage);

			// 	if ($.mobile.activePage.attr('id') == 'page1') { 
			// 		console.log ('Bingo!'); 
			// 		$(function(){
			//    			$( "[data-role='header'], [data-role='footer']" ).toolbar();
			// 		}); 
			// 	}
			// 	else {
			// 		$(function(){
			//    			$( "[data-role='header1'], [data-role='footer1']" ).toolbar();
			// 		}); 
			// 	}
			// });
			
    	</script>
    	
	</head>
	<body>
		
		<?php 
			include 'settings.php';
			
			// echo "<script type='text/javascript'>alert('$transitionefect')</script>";
		?>
		<div id="header-image" data-role="header" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1><img src="img/logo1.png" alt="LOGO"></h1>
		</div>
		<div data-role="footer" data-theme="<?php echo $theme ?>" data-position="fixed">
		    <h1>Mobile Site<a href="http://marketrivals.com" rel="external">  Clasic Site</a></h1>
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<div data-role="page" id="page1" data-theme="<?php echo $theme ?>">
		  

		  <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
		  		<!-- Jssor Slider Begin -->
			  	<div class="callbacks_container">
				    <ul class="rslides" id="slider4">
				      <li>
				        <img src="img/slider-images/slide1.png" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slide2.png" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slide3.png" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/slide4.png" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
				    </ul>
			    </div>
			    <!-- Jssor Slider End -->
				<fieldset class="ui-grid-a" data-theme="<?php echo $theme ?>">
					<!-- OVDJE SE UPISUJE BROJ TELEFONA KOJI TREBA POZVATI  -->
					<div class="ui-block-a"><a class="ui-btn ui-icon-phone ui-btn-icon-left buttons-radius" href="tel:<?php echo $telephone ?>">Call US</a></div>
					<!-- ovdje se upisuje grad i adresa iz koje  -->
					<div class="ui-block-b" id="findUS">
						<script>
							var ua = navigator.userAgent;
							if(/Android|webOS|Opera Mini/i.test(navigator.userAgent) ) {
								console.log("Android uslo");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if(/iPhone|iPad|iPod/i.test(navigator.userAgent)){
								console.log("Iphone ");
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"http://maps.google.com/?daddr=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?> ");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}
							else if (ua.indexOf("BlackBerry") >= 0)
									{
									  
									     console.log("Blakberu je prosao ");
									   <!--k,cvj bsdj kb vjklbvj,.x-->
									}
								
									// if (ua.indexOf("BlackBerry") >= 0) {

									// console.log("Blakberu je prosao ")
									// var prostordugme=document.getElementById('findUS');
									// var dugme= document.createElement('a');
									// dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
									// dugme.setAttribute('href',"javascript:blackberry.launch.newMap({'address':{'address1':'<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>'}});");
									// dugme.innerHTML="Find US";
									// prostordugme.appendChild(dugme);
									// }		
							else {
								console.log("nije nigdje uslo default ")
								var prostordugme=document.getElementById('findUS');
								var dugme= document.createElement('a');
								dugme.setAttribute('class', "ui-btn ui-icon-location ui-btn-icon-left buttons-radius");
								dugme.setAttribute('href',"geo:0,0?q=<?php echo $adresa; ?>,<?php echo $grad; ?>,<?php echo $skracenica; ?>");
								dugme.innerHTML="Find US";
								prostordugme.appendChild(dugme);
							}

							

							// if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
							// // some code..
							// }

						</script>
						
						

					</div>	   
				</fieldset>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Home</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Carry</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Pumps</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Coupons</a></div>
				</div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></div>
              </div><div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#page2" data-transition="<?php echo $transitionefect ?>">Emergancy Service</a></div>
              </div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-mail ui-btn-icon-left buttons-radius" href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact US</a></div>
				</div>
		  </div>
		  
		 
		</div>
		<!-- page 1 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
		<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<div data-role="page" id="page2" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu">
						<ul id="menu">
							<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
							<li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
					<img src="img/web-design/web-design01.jpg" alt="SLider" class="images-mobile">
                 </div>

			</div>	
				
				
		</div>
		
	<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!-- page services available ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="services_available" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu2">
                        <ul id="menu2">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
                            <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/slika1.jpg" alt="SLider" class="images-mobile">
                    <h2>Services Available</h2>
                    <section>
                        <p><strong>Camera:</strong> Video Inspections.</p>
                        <p><strong>Disposals:</strong> Repair, replace or unclog.</p>
                        <p><strong>Faucets:</strong>  Installing yours or ours: kitchen, bath, tub, shower, laundry, bar, outside and commercial.</p>
                        <p><strong>Fixtures:</strong> Installing yours or ours: bathtubs, shower bases, whirlpools, kitchen sinks, bath vanities and sinks.</p>
                        <p><strong>Gas Piping:</strong> To all items in and out of the house, including stoves, furnaces, grills, pool heaters, water heaters and garage heaters</p>
                        <p><strong>Power Rodding:</strong> Any clog: sinks, tubs, drains, also power jetting, camera and locating sewer lines, repairing broken sewer lines, installing proper clean outs, yearly preventive power rodding.</p>
                        <p><strong>Pumps:</strong> Sump pumps, sewage ejector pumps, battery backup pump systems.</p>
                        <p><strong>R.P.Z. Valves:</strong> Test, repair, install new and replacements, expansion tanks.</p>
                        <p><strong>Remodeling:</strong> Adding bathrooms, kitchens, laundry rooms, re-piping old bathrooms, kitchens, laundry rooms.</p>
                        <p><strong>Service Repairs:</strong> Any leak, drip, flood, clog, big or small, same-day service if needed.</p>
                        <p><strong>Sewer Piping:</strong>  Cast iron, P.V.C. (plastic), copper.</p>
                        <p><strong>Shut-Off Valve:</strong> Main shut off for house or any shut off gas or water in house.</p>
                        <p><strong>Sillcocks:</strong> Frost-free outside sillcocks, boiler drains for washing machines.</p>
                        <p><strong>Water Heaters:</strong> Residential or commercial gas, electric, power vent, 6 to 100 gallons, Standard and tank-less are available.</p>
                        <p><strong>Water Piping:</strong> Copper.</p>
                    </section>
                    <h2>Service Areas & Locations</h2>
                    <p><em>Rely on Our Licensed Plumbing Contractors in Lisle, IL</em></p>
                    <p>Do you need same-day plumbing services? Trust our licensed plumbing contractors to take care of your sump pump and drain cleaning services in Lisle, IL today. At Jim Dhamer Plumbing & Sewer, Inc., we offer a wide range of residential and commercial services and will cater those services to your specific needs.</p>
                    <p><em>Installation, Repair, and Maintenance</em></p>
                    <p>As a family-owned and operated company, we are committed to providing upstanding services to home and business owners scattered throughout the village of Lisle and the surrounding area. Do you need a new water heater? How about water piping or sump pump services? We’ve got you covered. Our team offers the following:</p>
                    <ul>
                        <li>Power rodding</li>
                        <li>Gas, sewer, and water piping</li>
                        <li>Remodeling</li>
                        <li>Sump pumps</li>
                        <li>Shut-off valves</li>
                        <li>Faucets, fixtures, and disposals</li>
                        <li>Water heaters</li>
                        <li>Sillcocks</li>
                        <li>R.P.Z. Valves</li>
                    </ul>
                    <p><em>Care and Commitment</em></p>
                    <p>With over 40 years of experience, we handle every job as dependable professionals. We can quickly assess your plumbing issues and help determine the best course of action. We have a large fleet of fully equipped trucks. In most cases, our team can service your plumbing needs on the spot. You shouldn’t have to wait for quality plumbing services—rely on our plumbing contractors to deliver quick, efficient, and affordable plumbing services today.</p>
                    <p>Whether you need us to install, maintain, test, or repair the plumbing in your home or business, we won’t disappoint. Call our plumbing team at 630-964-2222 for a new shut-off valve, water heater, or sump pump system in Lisle, IL.</p>
                </div>
            </div>
         </div>

        <!-- page services available ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->


        <!-- page products we carry///////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
        <div data-role="page" id="products_we_carry" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu3">
                        <ul id="menu3">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Seo</a></li>
                            <li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
                            <li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
                        </ul>
                    </section>

                    <h2 class="products-headline">Products We Carry</h2>

                    <section id="lijeva" class="cf">
                        <ul class="left-list">
                            <li>A.K. Industries </li>
                            <li> Alsons</li>
                            <li> American Standard</li>
                            <li> Ames</li>
                            <li>Amtrol</li>
                            <li>Arrowhead</li>
                            <li>Bell Gosset</li>
                            <li>Benis </li>
                            <li>Black Swan  </li>
                            <li>Bradford - White</li>
                            <li>Bradley</li>
                            <li>Brass Craft</li>
                            <li>Charlotte Pipe </li>
                            <li>Chicago Faucet</li>
                            <li>Church</li>
                            <li>Conbraco </li>
                            <li>Crane Plumbing Fixtures </li>
                            <li>Danze</li>
                            <li>Delta</li>
                            <li>Elkay</li>
                            <li>Febco</li>
                            <li>Fluid Master </li>
                            <li>Franke </li>
                            <li>Gerber</li>
                            <li>Grohe</li>
                            <li>Grunfos Pumps</li>
                            <li>Hansgrove </li>
                            <li>Harvey's</li>
                            <li>Hilo</li>
                            <li>Hydromatic</li>
                            <li>InSinkErator</li>
                            <li>J.R. Smith</li>
                            <li>Jacuzzi</li>
                            <li>Kohler</li>
                            <li>Lasco</li>
                         </ul>

                        <ul class="right-list">
                            <li>Rigid Tool  </li>
                            <li> Rockford Sanitary</li>
                            <li> Schier Products</li>
                            <li>Sioux Chief</li>
                            <li>Sloan  </li>
                            <li>Spartan Tool</li>
                            <li>Sterling  </li>
                            <li>Swanstone  </li>
                            <li>T & S Brass    </li>
                            <li>ThermaSol </li>
                            <li>Toto </li>
                            <li>Brass Craft</li>
                            <li>Charlotte Pipe </li>
                            <li>Chicago Faucet</li>
                            <li>Church</li>
                            <li>Conbraco </li>
                            <li>Crane Plumbing Fixtures </li>
                            <li>Danze</li>
                            <li>Delta</li>
                            <li>Elkay</li>
                            <li>Febco</li>
                            <li>Fluid Master </li>
                            <li>Franke </li>
                            <li>Gerber</li>
                            <li>Grohe</li>
                            <li>Grunfos Pumps</li>
                            <li>Hansgrove </li>
                            <li>Harvey's</li>
                            <li>Hilo</li>
                            <li>Hydromatic</li>
                            <li>InSinkErator</li>
                            <li>J.R. Smith</li>
                            <li>Jacuzzi</li>
                            <li>Kohler</li>
                            <li>Lasco</li>
                        </ul>






                    </section>
                </div>

            </div>


        </div>



        <!-- page products we carry ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">
								<li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Design</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Local SE0</a></li>
								<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Web Analytics</a></li>
							</ul>
					</section>	
					<form data-parsley-validate method="post" action="mail.php" data-ajax="false">
						Name: <input type="text" id="naam" name="naam" value="" placeholder="Name" required/><br>
						E-mail: <input type="email" id="mail" name="mail" value="" placeholder="E-mail" required/><br>
						Phone Number: <input type="tel" id="telefoon" name="telefoon" value="" placeholder="Phone"/><br>
						Subject: <input type="text" id="onderwerp" name="onderwerp" value="" placeholder="Subject" required/><br>
						Message:<br>
						<textarea style="height:100px;" id="bericht" name="bericht" placeholder="Enter your message here..." required></textarea> <br />
						<input type="submit" value="Send" name="submit" class="btn">
					</form>
				</div>
			</div>
		
		</div>
<!--page 3///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="succes" data-role="page" data-theme="<?php echo $theme ?>" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
			 <p>The contact form was sent succesful!</p>
			
			</div>
		
		</div>
<!--page succes ends here///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="error" data-role="page" data-dialog="true">
		
			<div data-role="main" class="ui-content" >	
				<p>The contact form was sent because of an error!</p>
			</div>
		
		</div>
<!--erroor ends here////////////////////////////////////////////////////////////////////////////////////////////////////
	<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- SLIDER ZA MOBILNI SAJT POCINJE OVDJEE -->
		<!-- it works the same with all jquery version from 1.x to 2.x -->
	
		<script type="text/javascript" src="js/responsiveslides.js"></script>    
	
	   
		<!-- Slajder se zavrsava -->
	</body>
</html>
