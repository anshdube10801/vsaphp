<!-- <html>
    <head>
        <title>Online voting system - Registratrion</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
    </head>
    <body>
        <center>
            <div id="headerSection">
            <h1>Online Voting System</h1>  
            </div>
            <hr>

            <h2>Registration</h2>
                <form action="../api/register.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="name" placeholder="Name" required>&nbsp
                    <input type="number" name="mob" placeholder="Mobile" required><br><br>
                    <input type="password" name="pass" placeholder="Password" required>&nbsp
                    <input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <input style="width: 31%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
                        Upload image: <input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
                        Select your role:
                        <select name="role">
                            <option value="1">Voter</option>
                            <option value="2">Group</option>
                        </select><br>                   
                    </div><br>
                    <button id="loginbtn" type="submit" name="registerbtn">Register</button><br><br>
                    Already user? <a href="../">Login here</a>
                </form>
            </center>
    </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="summary_large_image"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Sign Up - Online voting system</title>
    
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/fontawesome-all.css" rel="stylesheet">
    <link href="../css/swiper.css" rel="stylesheet">
	<link href="../css/magnific-popup.css" rel="stylesheet">
	<link href="../css/styles.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="../images/logo2.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-light" style="background-color:white;">
        <div class="container">
            
            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Kora</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="index.html"><img src="../images/logo2.png" alt="alternative"></a> 

            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#header">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#intro">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#features">About-Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="index.html#details">Contact-Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Drop</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="article.html">Article Details</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="terms.html">Terms Conditions</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="privacy.html">Privacy Policy</a>
                        </div>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-solid-sm page-scroll" href="../index.php">log-in</a>
                </span>
            </div> <!-- end of navbar-collapse -->
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->


    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1 class="text-center">Sign Up</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->
    
    
    <!-- Basic -->
    <div class="ex-form-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3">
                    <div class="text-box mt-5 mb-5">
                        <p class="mb-4">Fill out the form below to sign up for the service. Already signed up? Then just <a class="blue" href="../index.php">Log In</a></p>

                        <!-- Sign Up Form -->
                        <form id="signUpForm" action="../api/register.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" class="form-control-input" id="name" required>
                                <label class="label-control"  for="name"></label>
                            </div>
                            <div class="form-group">
                                <input type="email" name="mob" placeholder="Email" class="form-control-input" id="email" required>
                                <label class="label-control"  for="email"></label>
                            </div>

                            <div class="form-group">  
                                <input type="number" name="email" id="mob" class="form-control-input" placeholder="Mobile" required>
                                <label class="label-control" for="mob"></label>
                            </div>
                            

                            <div class="form-group">
                                <input type="password" name="pass" placeholder="Password" class="form-control-input" id="password" required>
                                <label class="label-control"  for="password"></label>
                            </div>
                            <div class="form-group">
                                <input type="password" name="cpass" placeholder= "Confirm Password"  class="form-control-input" id="confirm-password" required>
                                <label class="label-control" for="confirm-password"></label>
                            </div>
                            <input class="form-control-input" type="text" name="add" placeholder="Address" required><br>
                            &nbsp; &nbsp; Upload image:&nbsp;  
                            <span id="upload" style="width: 30%">
                                 <input type="file" id="profile" name="image" required>
                            </span>
                            
                            &nbsp; &nbsp; <div class="form-group">
                                <br>&nbsp; &nbsp; Select your role:
                                <select name="role" class="form-control-input" style="text-align:center">             
                                    <option value="1">Voter</option>
                                    <option value="2">Panel</option>
                                </select>
                            </div>
                    
                            <div class="form-group checkbox">
                                <input type="checkbox" id="terms" value="Agreed-to-Terms" required>I agree with the site's stated <a href="privacy.html">Privacy Policy</a> and <a href="terms.html">Terms & Conditions</a>
                            </div>
                            <div class="form-group checkbox">
                                <input type="checkbox" id="terms" value="Agreed-to-Terms" required>I am 18 above and eligible to vote. 
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">Sign Up</button>
                            </div>
                            
                        </form>
                        <!-- end of sign up form -->

                    </div> <!-- end of text-box -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->


    <!-- Footer -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-col first">
                        <h6>About Blink</h6>
                        <p class="p-small">Blink is a SaaS app website Bootstrap HTML template designed to help you create a beautiful and efficient online presentation for your web application</p>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col second">
                        <h6>Links</h6>
                        <ul class="list-unstyled li-space-lg p-small">
                            <li>Important: <a href="terms.html">Terms & Conditions</a>, <a href="privacy.html">Privacy Policy</a></li>
                            <li>Useful: <a href="#">Colorpicker</a>, <a href="#">Icon Library</a>, <a href="#">Illustrations</a></li>
                            <li>Menu: <a class="page-scroll" href="#header">Home</a>, <a class="page-scroll" href="#features">Features</a>, <a class="page-scroll" href="#details">Details</a>, <a class="page-scroll" href="#pricing">Pricing</a></li>
                        </ul>
                    </div> <!-- end of footer-col -->
                    <div class="footer-col third">
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-twitter fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-pinterest-p fa-stack-1x"></i>
                            </a>
                        </span>
                        <span class="fa-stack">
                            <a href="#your-link">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-instagram fa-stack-1x"></i>
                            </a>
                        </span>
                        <p class="p-small">We would love to hear from you <a href="mailto:contact@site.com"><strong>contact@site.com</strong></a></p>
                    </div> <!-- end of footer-col -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © <a href="#your-link">2021 All right reserved</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="js/jquery.magnific-popup.js"></script> <!-- Magnific Popup for lightboxes -->
    <script src="js/swiper.min.js"></script> <!-- Swiper for image and text sliders -->
    <script src="js/scripts.js"></script> <!-- Custom scripts -->
</body>
</html>