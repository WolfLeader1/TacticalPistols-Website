<!Doctype html>
<html lang="en">
<!--
Website created by Riley Snowe.
Any questions regarding the website, please email rileysnowe@snowetechnologies.com.
-->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">

    <title>Tactical Pistols & Rifles</title>
    <meta name="description" content="Specializing in Quality Firearms">
    <meta name="og:title" property="og:title" content="Specializing in Quality Firearms">
    <meta name="robots" content="index, follow">
    <link href="URL" rel="canonical">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/video-modal.css">

    <link rel="shortcut icon" type="image/png" href="favicon.png" />
</head>

<body>
    <!-- Header Section Start -->
    <header id="slider-area">
        <nav class="navbar navbar-expand-md fixed-top scrolling-navbar bg-white">
            <div class="container">
                <a href="index.html">
                    <img id="TPR-Logo" src="img/logo.png" alt="Tactical Pistols & Rifles" title="Specializing in Quality Firearms" class="nav-logo" href="index.php">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="lni-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto w-100 justify-content-end">
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="pistols.php">Long Barrel Pistols</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="rifles.php">Rifles</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="shotguns.php">Shotguns</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="coatings.php">Coatings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#slider-area">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header Section End -->
    <!-- Contact Section Start -->
    <section id="contact" class="page-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Contacting Us, Purchasing Items, Terms and Conditions</h2>
                <div class="container page-cont">
                    <h3 class="h-center">PLEASE READ THE FOLLOWING IMPORTANT INFORMATION</h3>
                    <p class="p-desc">
                        All Antique firearms offered for sale are antique, of obsolete calibre or de-activated (with proof house certificate supplied) and as such do not require a license under section 58ii of the British 1968 Firearms Amendment Act.
                        As from the 8th April 2016 De-activated weapons can only be sold with current EC spec de-activation standard.
                    </p>
                    <p class="p-desc">
                        All Antique firearms are sold as antiques or collectable items and are not intended for use. Any edged weapons, knives or air pistols will not be sold to persons under 18 years of age.
                        Proof of age will be requested for such items, photographic driving license or passport.
                        All air weapons will require a face to face transaction either with us or can be sent to a registered firearms dealer/ RFD.
                    </p>
                    <p class="p-desc">
                        SECTION 1 FIREARMS
                        Purchase of GSG 1911 LONG BARREL PISTOLS, & PRO TSC LONG BARREL PISTOLS or any rifles will require a valid slot on a section 1 FAC. If you would like to purchase one it can be picked up from me in person or can be sent to another RFD in your area.
                        If you would like any further information about any of the items on our site please
                        Phone Julian on<br />
                        PHONE No:01502 712016<br />
                        MOBILE No:07788714512<br />
                        Registered Firearms Dealer 37/266 SUFFOLK
                    </p>
                    <p class="p-desc">
                        HOW TO PURCHASE
                        If you are interested in any of the items on our site or would like to purchase any item please contact us by phone to see whether the item is still available and arrange payment.
                    </p>
                    <p class="p-desc">
                        Potential customers outside the United Kingdom should enquire whether there are any restrictions or local regulations before purchasing.
                        For Shipping of firearms to overseas clients we use PBS International Freight LTD, Shipping outside the UK is costly due to customs paperwork & taxes etc, if you are interested in having items exported please enquire for a quote.
                    </p>
                    <p class="p-desc">
                        We only accept payment by cheque, bank transfer or cash.
                    </p>
                </div>
                <div class="container page-cont">
				<?php 
				if(isset($_POST['submit'])){
					$to = "julian.460tpr@gmail.com"; // this is your Email address
					$from = $_POST['email'];
					$first_name = $_POST['first_name'];
					$last_name = $_POST['last_name'];
					$subject = "Form submission";
					$subject2 = "Copy of your form submission";
					$message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['message'];
					$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

					$headers = "From:" . $from;
					$headers2 = "From:" . $to;
					mail($to,$subject,$message,$headers);
					mail($from,$subject2,$message2,$headers2);
					echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
					}
				?>
                    <form action="" method="post">
					First Name: <br>
					<input type="text" name="first_name" cols="50"><br>
					Last Name: <br>
					<input type="text" name="last_name" cols="50"><br>
					Email: <br>
					<input type="text" name="email" cols="50"><br>
					Message:<br>
					<textarea rows="5" name="message" cols="50"></textarea><br>
					<input type="submit" name="submit" value="Submit">
					</form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->
    <!-- Footer Section Start -->
    <footer>
        <!-- Footer Area Start -->
        <section class="footer-Content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <h3 class="foot-head">Tactical Pistols & Rifles</h3>
                        <div class="textwidget">
                            <p class="foot-text">Specializing in Quality Firearms</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                        <div class="widget">
                            <ul class="menu">
                                <li class="nav-item"><a href="index.php">Home</a> </li>
                                <li class="nav-item"><a href="pistols.php">Pistols</a></li>
                                <li class="nav-item"><a href="rifles.php">Rifles</a> </li>
                                <li class="nav-item"><a href="shotguns.php">Shotguns</a></li>
                                <li class="nav-item"><a href="coatings.php">Cerkote Coatings</a></li>
                                <li class="nav-item"><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Area End -->
        <!-- Copyright Start  -->
        <div id="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-info float-left">
                            <p>&copy; 2019-20 Tactical Pistols & Rifles. All Rights Reserved. Do Not Redistribute.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
        <i class="lni-arrow-up"></i>
    </a>

    <div id="loader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/jquery.mixitup.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/highlight.js"></script>
    <script src="js/video.js"></script>

</body>
</html>