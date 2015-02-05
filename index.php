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
                $('#menu4').slicknav({
                    prependTo:'#navigation-menu4'
                });
            });
            $(function(){
                $('#menu5').slicknav({
                    prependTo:'#navigation-menu5'
                });
            });
            $(function(){
                $('#menu6').slicknav({
                    prependTo:'#navigation-menu6'
                });
            });
            $(function(){
                $('#menu7').slicknav({
                    prependTo:'#navigation-menu7'
                });
            });
            $(function(){
                $('#menu8').slicknav({
                    prependTo:'#navigation-menu8'
                });
            });
            $(function(){
                $('#menu9').slicknav({
                    prependTo:'#navigation-menu9'
                });
            });
            $(function(){
                $('#menu10').slicknav({
                    prependTo:'#navigation-menu10'
                });
            });
            $(function(){
                $('#menu11').slicknav({
                    prependTo:'#navigation-menu11'
                });
            });
            $(function(){
                $('#menu12').slicknav({
                    prependTo:'#navigation-menu12'
                });
            });
            $(function(){
                $('#menu13').slicknav({
                    prependTo:'#navigation-menu13'
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
		    <h1><img src="img/LOGO1.png" alt="LOGO"></h1>
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
				        <img src="img/slider-images/slide1.jpg" alt="">
				        <!-- <p class="caption">This is a caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slide2.jpg" alt="">
				        <!-- <p class="caption">This is another caption</p> -->
				      </li>
				      <li>
				        <img src="img/slider-images/slide3.jpg" alt="">
				        <!-- <p class="caption">The third caption</p> -->
				      </li>
                        <li>
                            <img src="img/slider-images/slide4.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slide5.jpg" alt="">
                            <!-- <p class="caption">The third caption</p> -->
                        </li>
                        <li>
                            <img src="img/slider-images/slide6.jpg" alt="">
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
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Carry</a></div>
				</div>
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#pumps" data-transition="<?php echo $transitionefect ?>">Pumps</a></div>

				</div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#Vendor-Resources" data-transition="<?php echo $transitionefect ?>">Vendor Resources</a></div>
              </div>

              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#contact-us" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations </a></div>
              </div>
              <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                  <div class="ui-block-a buttons-semir "><a class="ui-btn ui-icon-info ui-btn-icon-left buttons-radius" href="#emergancy-service" data-transition="<?php echo $transitionefect ?>">Emergancy Service</a></div>
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
							<li><a href="#page2" data-transition="<?php echo $transitionefect ?>">Products We Caryy</a></li>
							<li><a href="#contcatform" data-transition="<?php echo $transitionefect ?>">Contact us</a></li>
						</ul>
					</section>
					<img src="img/web-design/web-design01.jpg" alt="SLider" class="images-mobile">
                 </div>

			</div>


		</div>

	<!-- page 2 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!-- emergancy service ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="emergancy-service" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu13">
                        <ul id="menu13">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></li>
                            <li><a href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Caryy</a></li>
                            <li><a href="#pumps" data-transition="<?php echo $transitionefect ?>">Pumps</a></li>
                            <li><a href="#Vendor-Resources" data-transition="<?php echo $transitionefect ?>">Vendor Resources</a></li>
                            <li><a href="#contact-us" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></li>
                            <li><a href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations</a></li>

                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/slika006.jpg" alt="SLider" class="images-mobile">
                        <h1 class="emrgency-service-h1">Emergency Service</h1>
                    <section id="section9">
                    <p class="emergency-service-p">Trust Our Quick and Efficient Plumbing Service in Naperville, IL</p>
                    <p>Does your home or business need emergency service? At Dhamer Plumbing and Sewer, Inc., we pride ourselves on providing quick, efficient, and affordable plumbing services, such as sump pump repair and water heater installation in Naperville, IL.</p>

                    <p>Our plumbing team works closely with residential and commercial customers throughout Naperville. We send out one of our fully equipped trucks with every appointment so our plumbers can repair your plumbing without delay. We service the following:</p>
                    <div class="ui-grid-a">
                        <div class="ui-block-a">
                            <ul class="lista-emergency">
                                <li>Disposals</li>
                                <li>Faucets</li>
                                <li>Fixtures</li>
                                <li>R.P.Z Valves</li>
                            </ul>
                            
                        </div>
                        <div class="ui-block-b">
                            <ul class="lista-emergency">
                                <li>Shut-off valves</li>
                                <li>Sillocks</li>
                                <li>Sump pumps</li>
                                <li>Water heaters</li>
                            </ul>

                        </div>

                    </div>
                    <p class="emergency-paddig-p">Our comprehensive services also include sewer piping, water piping, gas piping, power rodding, and remodeling. If you need immediate assistance, call us for emergency service today. You don't have to wait to book an appointment!</p>
                    <p class="emergency-service-p">Specialized Service</p>
                    <p class="emergency-service-p">With more than 40 years of experience as a family-owned and -operated business, we provide Naperville residents with dependable work and customer-focused service. We employ only licensed and insured contractors who can install, maintain, repair, or remodel nearly any device. We also carry a number of reliable product brands, including the following:</p>
                    <div class="ui-grid-a">
                        <div class="ui-block-a" id="emergency-lista">
                            <ul>
                                <li>Kohier</li>
                                <li>American Standard</li>
                                <li>Gerber</li>
                                <li>Elkay</li>
                                <li>Franke</li>
                                <li>Zoeller</li>
                                <li>Pro Series Battery Up Pump Systems</li>
                                <li>Sloan</li>
                                <li>Sterling</li>
                            </ul>
                        </div>

                    <div class="ui-block-b" id="emergency-lista1">
                        <ul>
                            <li>Moen</li>
                            <li>Bradford White Water Heaters</li>
                            <li>Woodford</li>
                            <li>Grohe</li>
                            <li>Chicago</li>
                            <li>In Sink Erator</li>
                            <li>Toto</li>
                            <li>Grundfos</li>
                            <li>Watts</li>
                        </ul>
                    </div>

                     </div>
                    <p>Whether you need installation, maintenance, or repairs, we offer speedy results time and again. Don’t let your plumbing needs go unattended—call Jim Dhamer Plumbing and Sewer, Inc. at 630-964-2222 for new faucets, disposals, or sump pump systems in Naperville, IL.</p>
                </section>
            </div>

        </div>
        </div>
        <!-- emergancy service ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <!-- page services available ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="services_available" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu2">
                        <ul id="menu2">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>

                            <li><a href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Caryy</a></li>
                            <li><a href="#pumps" data-transition="<?php echo $transitionefect ?>">Pumps</a></li>
                            <li><a href="#Vendor-Resources" data-transition="<?php echo $transitionefect ?>">Vendor Resources</a></li>
                            <li><a href="#contact-us" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></li>
                            <li><a href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations</a></li>
                            <li><a href="#emergancy-service" data-transition="<?php echo $transitionefect ?>">Emergancy Service</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>

                    <img src="img/web-design/slika005.jpg" alt="SLider" class="images-mobile">
                    <h2 class="products-headline">Services Available</h2>
                    <section id="section1">
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
                    <h2 class="products-headline">Service Areas & Locations</h2>
                    <section id="section2">
                    <p><em>Rely on Our Licensed Plumbing Contractors in Lisle, IL</em></p>
                    <p>Do you need same-day plumbing services? Trust our licensed plumbing contractors to take care of your sump pump and drain cleaning services in Lisle, IL today. At Jim Dhamer Plumbing & Sewer, Inc., we offer a wide range of residential and commercial services and will cater those services to your specific needs.</p>
                    <p class="italic"><em>Installation, Repair, and Maintenance</em></p>
                    <p>As a family-owned and operated company, we are committed to providing upstanding services to home and business owners scattered throughout the village of Lisle and the surrounding area. Do you need a new water heater? How about water piping or sump pump services? We’ve got you covered. Our team offers the following:</p>
                    <ul class="list1">
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
                    <p class="italic"><em>Care and Commitment</em></p>
                    <p>With over 40 years of experience, we handle every job as dependable professionals. We can quickly assess your plumbing issues and help determine the best course of action. We have a large fleet of fully equipped trucks. In most cases, our team can service your plumbing needs on the spot. You shouldn’t have to wait for quality plumbing services—rely on our plumbing contractors to deliver quick, efficient, and affordable plumbing services today.</p>
                    <p>Whether you need us to install, maintain, test, or repair the plumbing in your home or business, we won’t disappoint. Call our plumbing team at 630-964-2222 for a new shut-off valve, water heater, or sump pump system in Lisle, IL.</p>
                    </section>
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
                            <li><a href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></li>

                            <li><a href="#pumps" data-transition="<?php echo $transitionefect ?>">Pumps</a></li>
                            <li><a href="#Vendor-Resources" data-transition="<?php echo $transitionefect ?>">Vendor Resources</a></li>
                            <li><a href="#contact-us" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></li>
                            <li><a href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations</a></li>
                            <li><a href="#emergancy-service" data-transition="<?php echo $transitionefect ?>">Emergancy Service</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/slika002.jpg" alt="SLider" class="images-mobile">
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
                            <li>Lenox </li>
                            <li> Mansfield </li>
                            <li> Milwaukee Tool</li>
                            <li>Moen </li>
                            <li>Mustee </li>
                            <li>National Fiber Glass</li>
                            <li>Normac </li>
                            <li>Oatey  </li>
                            <li>Price Pfister</li>
                            <li>Rheem </li>
                            <li>Rigid Tool  </li>
                            <li>Rockford Sanitary</li>
                            <li>Schier Products   </li>
                            <li>Sioux Chief  </li>
                            <li>Sloan</li>
                            <li>Spartan Tool  </li>
                            <li>Sterling </li>
                            <li>Swanstone </li>
                            <li>T & S Brass  </li>
                            <li>ThermaSol  </li>
                            <li>Toto  </li>
                            <li>Tyler Pipe  </li>
                            <li>Watco   </li>
                            <li>Watts Regulator</li>
                            <li>Wilkins</li>
                            <li>Woodford</li>
                            <li>Woodford  </li>
                            <li>Zoeller </li>
                            <li>Zurn</li>
                        </ul>
                    </section>
                </div>
            </div>
         </div>
<!-- page products we carry ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
<!-- page PUMPS ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="pumps" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu4">
                        <ul id="menu4">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></li>
                            <li><a href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Caryy</a></li>

                            <li><a href="#Vendor-Resources" data-transition="<?php echo $transitionefect ?>">Vendor Resources</a></li>
                            <li><a href="#contact-us" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></li>
                            <li><a href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations</a></li>
                            <li><a href="#emergancy-service" data-transition="<?php echo $transitionefect ?>">Emergancy Service</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/slika004.jpg" alt="SLider" class="images-mobile">
                    <h2 class="products-headline-pumps">Pumps Pro Series 2400 PHCC backup sump pump system</h2>
                    <section id="section2">
                        <p>Even in towns as beautiful as <a href="#naperville"> Naperville</a> ,<a href="#Downers-Grove">Downers Grove</a> ,<a
                           href="#wheaton">Wheaton</a>  and surrounding communities sometimes ugly problems can plague a home. When sump pumps or sewage ejector pumps fail to function properly it won't be long before you have quite a foul smelling mess all over your basement flooring. So when you hear the alarm on your sump pump or if you hear your sewer ejector pump humming there are a few troubleshooting tips to follow before you dial for a plumber.</p>
                        <img src="img/web-design/slika1.jpg" alt="SLider" class="images-mobile">
                        <p class="italic-pumps">Battery</p>
                        <p>The first thing to check is if the battery is faulty, or if the battery requires additional water. Some batteries do and that can set off an alarm if the water level is too low. An additional thing to check is if the switch on the pump is bad. Many sump pumps and sewer ejector pumps have two plugs, one that plugs into the back of the other, then one that plugs into the wall. Try plugging both in separately and see if they both operate. Should either of these tips fail then call on
                            <a href="#Jim-Dhamer">Dhamer Plumbing and Sewer</a>to come to your aid.</p>
                        <img src="img/web-design/slika2.jpg" alt="SLider" class="images-mobile">
                        <p>We at Dhamer Plumbing and Sewer pride ourselves on being able to quickly assess your plumbing issues and address them instantly. Our trucks are fully equipped with most all manufacturers parts in order to be able to efficiently service your plumbing needs right on the spot on our very first appointment. In this way we can quickly and economically serve your varied plumbing needs.</p>
                    </section>
                </div>
            </div>
        </div>

<!-- page PUMPS ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!-- page service areas & locations ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="service-areas" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu11">
                        <ul id="menu11">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></li>
                            <li><a href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Caryy</a></li>
                            <li><a href="#pumps" data-transition="<?php echo $transitionefect ?>">Pumps</a></li>
                            <li><a href="#Vendor-Resources" data-transition="<?php echo $transitionefect ?>">Vendor Resources</a></li>
                            <li><a href="#contact-us" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></li>
                            <li><a href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations</a></li>
                            <li><a href="#emergancy-service" data-transition="<?php echo $transitionefect ?>">Emergancy Service</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/slika007.png" alt="SLider" class="images-mobile">
                    <h1 class="service-areas-h1">Service Areas and Location</h1>
                    <p class="service-areas-p">We service DuPage County & portions of Cook, Will & Kane.</p>
                    <p class="service-areas-p">Servicing the following communities & surrounding areas:</p>
                    <div class="ui-grid-a" id="listeee">
                        <div class="ui-block-a" id="lisaD">
                            <ul>
                                <li>Addison</li>
                                <li>Aurora</li>
                                <li>Bartlett</li>
                                <li>Batavia</li>
                                <li>Bensenville</li>
                                <li>Bloomingdale</li>
                                <li>Bolingbrook</li>
                                <li>Burr Ridge</li>
                                <li>Carol Stream</li>
                                <li>Clarendon Hills</li>
                                <li>Countryside</li>
                            </ul>
                        </div>
                        <div class="ui-block-b" id="lisaC">
                            <ul>
                                <li>Darien</li>
                                <li>Downers Grove</li>
                                <li>Elmhurst</li>
                                <li>Geneva</li>
                                <li>Glen Ellyn</li>
                                <li>Glendale Heights</li>
                                <li>Hinsdale</li>
                                <li>Hoffman Estates</li>
                                <li>Itasca</li>
                                <li>LaGrange</li>
                            </ul>
                        </div>
                        <div class="ui-block-a" id="lisaA">
                            <ul>
                                <li>La Grange Park</li>
                                <li>Lemont</li>
                                <li>Lisle</li>
                                <li>Lombard</li>
                                <li>Naperville</li>
                                <li>Oak Brook</li>
                                <li>Oakbrook Terrace</li>
                                <li>Plainfield</li>
                                <li>Romeoville</li>
                                <li>Schaumburg</li>
                            </ul>
                        </div>
                        <div class="ui-block-b" id="lisaB">
                            <ul>
                                <li>St.Charles</li>
                                <li>Streamwood</li>
                                <li>Villa Park</li>
                                <li>Warrenville</li>
                                <li>West Chicago</li>
                                <li>Westchester</li>
                                <li>Western Springs</li>
                                <li>Wheaton</li>
                                <li>Willowbrook</li>
                                <li>Wood Dale</li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>


        </div>
   <!-- page page service areas & locations ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <!-- page Vendor Resources ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Vendor-Resources" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu10">
                        <ul id="menu10">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></li>
                            <li><a href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Caryy</a></li>
                            <li><a href="#pumps" data-transition="<?php echo $transitionefect ?>">Pumps</a></li>

                            <li><a href="#contact-us" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></li>
                            <li><a href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations</a></li>
                            <li><a href="#emergancy-service" data-transition="<?php echo $transitionefect ?>">Emergancy Service</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <img src="img/web-design/slika001.jpg" alt="SLider" class="images-mobile">
                    <h1 class="vendor-h1">Vendor Resources</h1>
                    <section id=section8>
                     <a href="#Jim-Dhamer"> <p class="vendor-link-p">Bemis Mfg. - www.bemismfg.com </p></a>
                        <a href="http://www.bradfordwhite.com/"><p class="vendor-link-p"> Bradford White Corporation - www.bradfordwhite.com </p></a>
                        <a href="http://www.brasscraft.com/"> <p class="vendor-link-p">   Brass Craft - www.brasscraft.com </p></a>
                        <a href="http://www.chicagofaucets.com/"><p class="vendor-link-p"> Chicago Faucet - www.chicagofaucets.com </p></a>
                        <a href="http://www.elkay.com/">    <p class="vendor-link-p">      Elkay Mfg. Company - www.elkay.com </p></a>
                        <a href="http://www.grohe.com/us/"><p class="vendor-link-p"> Grohe - www.groheamerica.com </p></a>
                        <a href="http://www.grohe.com/us/"><p class="vendor-link-p"> Grundfos - http://www.grundfos.com/web/homeus.nsf </p></a>
                        <a href="http://www.hydromatic.com/"><p class="vendor-link-p"> Hydromatic Pumps, Inc. - www.hydromatic.com </p></a>
                        <a href="http://www.insinkerator.com/en-us/Pages/default.aspx"><p class="vendor-link-p"> In-sink-erator - www.insinkerator.com </p></a>
                        <a href="http://www.jacuzzi.com/"><p class="vendor-link-p"> Jacuzzi Whirlpool Bath - www.jacuzzi.com </p></a>
                        <a href="http://www.jacuzzi.com/"><p class="vendor-link-p"> Kohler Company - www.kohler.com </p></a>
                        <a href="http://www.mansfieldplumbing.com/"><p> Mansfield Plumbing Products - www.mansfieldplumbing.com </p></a>
                        <a href="http://www.moen.com/"><p class="vendor-link-p"> Moen - www.moen.com </p></a>
                        <a href="http://www.moen.com/"><p class="vendor-link-p"> Mustee - www.mustee.com </p></a>
                        <a href="http://www.rheem.com/"><p class="vendor-link-p"> Rheem Water Heaters - www.rheem.com </p></a>
                        <a href="http://www.rheem.com/"> <p class="vendor-link-p"> Sloan Valve - www.sloanvalve.com </p></a>
                        <a href="http://www.sterlingplumbing.com/"><p class="vendor-link-p"> Sterling Plumbing Group - www.sterlingplumbing.com </p></a>
                        <a href="http://www.watts.com/"> <p class="vendor-link-p"> Watts Industries, Inc. - www.wattsregulator.com </p></a>
                        <a href="http://www.zoeller.com/en-na"><p class="vendor-link-p"> Zoeller Company - www.zoeller.com </p></a>
                    </section>

                </div>

            </div>


        </div>


        <!-- page Vendor Resources ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

<!-- page Naperville ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

        <div data-role="page" id="naperville" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu5">
                        <ul id="menu5">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></li>
                            <li><a href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Caryy</a></li>
                            <li><a href="#pumps" data-transition="<?php echo $transitionefect ?>">Pumps</a></li>
                            <li><a href="#Vendor-Resources" data-transition="<?php echo $transitionefect ?>">Vendor Resources</a></li>
                            <li><a href="#contact-us" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></li>
                            <li><a href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations</a></li>
                            <li><a href="#emergancy-service" data-transition="<?php echo $transitionefect ?>">Emergancy Service</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                        <h2 class="naperville-pumps">Naperville Plumbing & Sewer</h2>
                    <section id="section3">

                        <p>Dhamer Plumbing and Sewer has been a long standing provider of plumbing repair and sewer services throughout Naperville and the surrounding areas. A trusted and integral part of the community, we are a family owned and operated company offering only the highest quality repair and installation work for our valued customers. Additionally, we offer same day service to provide the most assistance possible during an emergency.</p>
                        <p class="naperville-p"><strong>Plumbing Services</strong></p>
                        <p>Our plumbing repair services are available for every type of plumbing repair or service work that is needed. Your plumber from Dhamer Plumbing and Sewer handles the installation and repair of water heaters, copper water pipes, sillcocks, disposals, faucets, and fixtures. Our experienced plumbers can handle any size plumbing repair with same day service available.</p>
                        <p class="naperville-p"><strong>Sewer Repairs</strong></p>
                        <p>We provide experienced and proficient sewer repairs for any blockages or leaks in your sewer system. We can also provide sewer piping in a variety of different materials including copper, cast iron, and P.V.C. In addition we offer complete repair and replacement of sump pumps, ejector pumps, and battery backup pump systems for both residential and commercial properties. Our pumps, replacement parts, and appliances are available for sale and are made from the best manufacturers in the plumbing and sewer industries.</p>
                        <p>When you need comprehensive plumbing services from an experienced and trusted plumber, select Dhamer Plumbing and Sewer for the best results. With more than 39 years of experience, you can be assured that your pipes and sewer lines are in the best of care.
                        <a href="#contact-us">Contact us</a>  today to request service anywhere in Naperville and the surrounding areas (630) 964-2222.</p>
                    </section>
                </div>
            </div>
        </div>
<!-- page Naperville ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <!-- page Downers-Grove ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Downers-Grove" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu7">
                        <ul id="menu7">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></li>
                            <li><a href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Caryy</a></li>
                            <li><a href="#pumps" data-transition="<?php echo $transitionefect ?>">Pumps</a></li>
                            <li><a href="#Vendor-Resources" data-transition="<?php echo $transitionefect ?>">Vendor Resources</a></li>
                            <li><a href="#contact-us" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></li>
                            <li><a href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations</a></li>
                            <li><a href="#emergancy-service" data-transition="<?php echo $transitionefect ?>">Emergancy Service</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <h1 class="Downers-Grove-bold-h1">Downers Grove Plumbing Repair</h1>
                    <section id="section5">
                        <p>Jim Dhamer Plumbing and Sewer services Downers Grove, IL as a trusted source for plumbing repair and sewer repairs and drain cleaning for both commercial and residential customers. With dedication and care, we attend to each and every service call with prompt and efficient attention. We have provided 39 years of service within the community and have the experience and knowledge to offer the most complete and thorough plumbing repair services to our customers.</p>
                    </section>
                     <h2 class="Downers-Grove-bold">Courteous and Professional Service</h2>
                    <section id="section5">
                        <p class="p-padding">When your plumber arrives onsite to begin plumbing repair, you can rest assured they will provide the most professional and courteous service. Our plumbers are friendly yet professional and will leave your home in a neat and clean condition. We never send sub-contractors to assist you in your home and you can rest assured that your plumber from Dhamer Plumbing and Sewer is either a full trained family member or long time employee of the company.</p>
                        <p class="p-padding">We offer complete plumbing repair of faucets, fixtures, water heaters. ejector pumps. sump pumps and sewer lines throughout Downers Grove and the surrounding areas. We will provide you with experienced repair or replacement for your appliances and with our extensive product line, you are guaranteed a quality replacement. Whether you need to fix a leaky faucet or you need complete sewer repairs, no project is too large or small for us to handle.</p>
                        <p><a href="#contact-us">Contact us </a>today for same day service anywhere in Downers Grove and the surrounding areas by calling (630) 964-2222.</p>
                    </section>
                </div>
            </div>
        </div>
<!-- page Downers-Grove ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <!-- page wheaton ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="wheaton" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu8">
                        <ul id="menu8">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></li>
                            <li><a href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Caryy</a></li>
                            <li><a href="#pumps" data-transition="<?php echo $transitionefect ?>">Pumps</a></li>
                            <li><a href="#Vendor-Resources" data-transition="<?php echo $transitionefect ?>">Vendor Resources</a></li>
                            <li><a href="#contact-us" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></li>
                            <li><a href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations</a></li>
                            <li><a href="#emergancy-service" data-transition="<?php echo $transitionefect ?>">Emergancy Service</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                            <h1 class="wheaton-h1">Wheaton Plumbing and Sewer and Repair </h1>
                    <section id="section6">
                            <p class="wheat-p">When you need the best in plumbing repair, maintenance or replacement, you need the professionals of
                                <a href="#Jim-Dhamer">Jim Dhamer Plumbing</a>. We've been serving the people of Wheaton, IL, and the surrounding area for nearly 40 years, and would be honored to make you one of our satisfied customers.</p>
                            <p class="wheat-p">Our promise to you is a plumber that shows up in a timely fashion, appropriately dressed and fully prepared for whatever problem you're dealing with. We'll always take the time to accurately diagnose the situation, explain your options and restore your plumbing to complete working order.</p>
                            <p class="wheat-p">The services we offer are wide ranging and available at competitive prices. If you need drain cleaning, disposal repair, piping work, sump pumps, remodeling or just about anything else, we're the ones with the skills, tools and experience to get the job done right.</p>
                            <p class="wheat-p">A specific area of expertise at Jim Dhamer Plumbing is the installation, maintenance, repair and replacement of water heaters. All too often, customers have no idea that their water heater is on the fritz until they find themselves in a cold shower. Ensuring that your water heater is running properly can save you time, energy and money down the road.</p>
                            <p class="wheat-p">No matter what brand or model your plumbing systems and appliances are, our team knows how to work with what you have. In addition, we carry just about every brand you can think of, and will be glad to make repairs that match with your existing system.</p>
                            <p class="wheat-p">From sewer repairs to Jacuzzi tubs to water heaters, Jim Dhamer Plumbing offers the ultimate in plumbing services in Wheaton, IL.</p>
                    </section>
                </div>
            </div>
        </div>
 <!-- page wheaton ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <!-- page Jim-Dhamer ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="Jim-Dhamer" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu9">
                        <ul id="menu9">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></li>
                            <li><a href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Caryy</a></li>
                            <li><a href="#pumps" data-transition="<?php echo $transitionefect ?>">Pumps</a></li>
                            <li><a href="#Vendor-Resources" data-transition="<?php echo $transitionefect ?>">Vendor Resources</a></li>
                            <li><a href="#contact-us" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></li>
                            <li><a href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations</a></li>
                            <li><a href="#emergancy-service" data-transition="<?php echo $transitionefect ?>">Emergancy Service</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>
                        </ul>
                    </section>
                    <h1 class="jim-dhamer-h1">Plumbing & Sewer services</h1>
                    <section id="section7">
                        <p><span class="jim-dhamer-p-bold">Welcome to Jim Dhamer Plumbing & Sewer, Inc. -</span>proudly serving the homes and businesses of
                            <a href="#Downers-Grove">Downers Grove</a>, Elmhurst, Hinsdale, Lisle,<a href="#naperville">Naperville</a> , <a
                                href="#wheaton">Wheaton</a> and other surrounding communities for four decades. As a family-owned and operated company, we are fully committed to providing the absolute best in quality and service.</p>

                        <img src="img/web-design/slika3.jpeg" alt="SLider" class="images-mobile">
                        <p class="jim-dhamer-p">Your plumber from Jim Dhamer Plumbing is an experienced technician licensed by the State of Illinois. Contractor's registration number 055-008346. Showing nothing but respect for you and your property throughout the entire job, our plumbers are professional, dependable and backed by our company's licensed and insured status.</p>
                        <p class="jim-dhamer-p">The services you can obtain from Jim Dhamer Plumbing cover a wide variety of plumbing needs and problems. From installation and maintenance to plumbing repair and replacement, we are prepared for any challenge your home or business can give us.</p>
                        <p class="jim-dhamer-p">Drain cleaning is one of those things many people don't realize they need until they have a serious blockage in their pipes. Ridding your pipes of debris before a complete clog forms can save you time and trouble down the road. If your drains are already backed up, call us about removing the blockage. Through power rodding we will eradicate those frustrating clogs and video camera inspections are also available for main sewer lines.</p>
                        <p class="jim-dhamer-p">Water heaters are essential when you want to take a hot bath or do a few dishes. Often, customers have no idea that something is wrong with their water heater until they turn on the tap and get only cold water. When that happens, it's time to call Jim Dhamer Plumbing.</p>
                        <p class="jim-dhamer-p">Entrust your sewer repairs, clog removals, sump pumps and other services listed below to the <a href="#contact-us">Call Jim Dhamer Plumbing</a> - we'll be glad to serve you!</p>
                        <p class="jim-dhamer-p">For more about our services, see <a href="#services_available">"Services Available."</a></p>
                        <div class="plavo-sa-slovima">
                            <h2 class="bijela-slova">Complete Sump Pumps, Flood Control, Plumbing & Sewer Service:</h2>
                            <p class="bijela-slova">Sump Pumps <br/>
                                Water Heaters <br/>
                                Toilets <br/>
                                Tubs And Sinks <br/>
                                Any Drain Problem Corrected <br/>
                                Residential And Commercial <br/>
                                All Work In Writing <br/>
                                We Install Your Specialty <br/>
                                Items <br/>
                                Camera: Video Inspections <br/>
                                RPZ  Certification</p>
                        </div>
                        <div class="ui-grid-a">
                            <div class="ui-block-a" id="dolje1">

                                <img src="img/web-design/001.jpg" alt="LOGO">
                                <div class="plavo-sa-slovima">
                                    <p class="bijela-slova"> No Job <br/>
                                        Too Small!</p>
                                </div>
                                <div class="plavo-sa-slovima1">
                                    <p class="bijela-slova"> We specialize in home <br/>
                                        repair, bathroom and <br/>
                                        kitchen remodeling. </p>
                                </div>
                            </div>
                            <div class="ui-block-b" id="dolje">
                                <img src="img/web-design/002.jpg" alt="LOGO">
                                <div class="plavo-sa-slovima">
                                    <p class="bijela-slova"> Senior Citizen <br/>
                                        Specials</p>
                                    <p class="bijela-slova">"You Know The Cost <br/>
                                        Before We Start" <br/>
                                        630-964-2222 <br/></p>
                                 </div>
                            </div>
                        </div>

                        <p class="link-dolje"><a href="http://da.nccdn.net/media/dhamerplumbing.com/public/.cm4all/mediadb//web/dhamerart.pdf">PHCC Pro Series 2400 Battery Backup Sump Pump System</a></p>
                        <div class="linija"></div>

                        <div class="ui-grid-a">
                            <div class="ui-block-b">
                                <p class="slikaa"><img src="img/web-design/004.jpg" alt="LOGO"></p>
                            </div>
                            <div class="ui-block-b">
                                <p class="slikaa"><a href="http://www.dexmedia.com/services/business-websites/"><img src="img/web-design/005.png" alt="LOGO"></p></a>
                            </div>
                        </div>

                    </section>
                </div>
             </div>
        </div>
  <!-- page Jim-Dhamer ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
 <!-- page contact us ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <div data-role="page" id="contact-us" data-theme="<?php echo $theme ?>">
            <div data-role="main" class="ui-content" data-theme="<?php echo $theme ?>">
                <div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
                    <section id="navigation-menu6">
                        <ul id="menu6">
                            <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                            <li><a href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></li>
                            <li><a href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Caryy</a></li>
                            <li><a href="#pumps" data-transition="<?php echo $transitionefect ?>">Pumps</a></li>
                            <li><a href="#Vendor-Resources" data-transition="<?php echo $transitionefect ?>">Vendor Resources</a></li>

                            <li><a href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations</a></li>
                            <li><a href="#emergancy-service" data-transition="<?php echo $transitionefect ?>">Emergancy Service</a></li>
                            <li><a href="#contactform" data-transition="<?php echo $transitionefect ?>">Contact Us</a></li>

                        </ul>
                    </section>
                        <img src="img/web-design/slika003.png" alt="SLider" class="images-mobile">
                        <h1 class="contacts-pump1">Contact</h1>
                        <h2 class="contacts-pump">EMERGENCY SHUTDOWN</h2>
                        <section id="section4">
                        <p><span class="contact-us-bold">Water</span>- Find your water meter. It will be near the front of your house, in the basement or a laundry room (99% of the time). Turn water off (round handle - turn to right; lever handle - push or lift 1/2 turn, making it go the opposite direction of the pipe). This will turn the water off to your house. Turn on a faucet to make sure your valve is working. If your valve is not working, call your city or village to shut off the water at their valve in front of your house.</p>
                        <p><span class="contact-us-bold">Sewer</span>- If you have any kind of clog or sewer back up, stop running water and laundry. If the problem persists and you have an ejector pump in a lower level (it will be a sealed pit) unplug it. If the problem persists call your city or village to see if their sewer is backing up into your home.</p>
                        <h2 class="contact-us-bold-padding">Dhamer Plumbing Hours:</h2>
                        <p>Monday - Friday 7 a.m. to 4 p.m.</p>
                        <p>Saturdays 7 a.m. to 12 p.m.</p>
                        <p>If you have a problem after hours, please follow the above emergency shutdown instructions and call us at 7 a.m. the next business day.</p>
                        <p>These hours allow us to serve our customers with the best plumbers in Illinois.</p>
                        <p>Thank you for your business.</p>
                        <p>If you have any questions, please call Dhamer Plumbing at (630) 964-2222.</p>
                        <h2 class="contact-us-bold-padding">Service Hours</h2>
                        <p>Since Dhamer Plumbing is a "family-owned" company, we feel it is very important that our employees spend evenings and Sundays with their families. For that reason, Dhamer Plumbing is open six days a week: Monday - Friday from 7 a.m. to 4 p.m. and Saturday from 7 a.m. to 12 p.m.</p>
                        <p>If you have a problem at night or on a Sunday, please follow the directions under "Emergency Shutdown" on our contact page and leave a message on our answering machine. We will call you early the following morning to schedule a service call. If you have trouble being home during the day, we can call you on the way to the job to meet or schedule for a Saturday.</p>
                    </section>

                </div>
            </div>
        </div>
<!-- page contact us ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!-- page 3 ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->

		<!--///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
		<div id="contactform" data-role="page" data-theme="<?php echo $theme ?>">
			<div data-role="main" class="ui-content" >
				<div class="ui-grid-solo" data-theme="<?php echo $theme ?>">
					<section id="navigation-menu-contact">
							<ul id="menu-contact">

                                <li><a href="#page1" data-transition="<?php echo $transitionefect ?>">Home</a></li>
                                <li><a href="#services_available" data-transition="<?php echo $transitionefect ?>">Services Available</a></li>
                                <li><a href="#products_we_carry" data-transition="<?php echo $transitionefect ?>">Products We Caryy</a></li>
                                <li><a href="#pumps" data-transition="<?php echo $transitionefect ?>">Pumps</a></li>
                                <li><a href="#Vendor-Resources" data-transition="<?php echo $transitionefect ?>">Vendor Resources</a></li>
                                <li><a href="#contact-us" data-transition="<?php echo $transitionefect ?>">Contact & Emergency Contact</a></li>
                                <li><a href="#service-areas" data-transition="<?php echo $transitionefect ?>">Service Areas & Locations</a></li>
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
