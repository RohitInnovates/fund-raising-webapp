<!DOCTYPE html>
<html lang="en">

<head>
    <title>YATI Foundation</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">


    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="css/elegant-fonts.css">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="style.css">
    <!-- Latest compiled and minified CSS -->
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        .main {
            width: 100%;
            border: none;
        }

        .box {
            width: 100%;
            padding: 50px;
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
        }

        .box h1 {
            margin-bottom: 30px;
            color: #fff;
            text-align: center;
            text-transform: capitalize;
        }

        .box .input_box {
            position: relative;
        }

        .box .input_box input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            color: #fff;
            letter-spacing: 1px;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            background: transparent;
            outline: none;
        }

        .box .input_box label {
            position: absolute;
            top: 0;
            left: 0;
            letter-spacing: 1px;
            padding: 10px 0;
            font-size: 16px;
            color: white;
            transition: 0.5s;
        }

        .box .input_box[type="submit"] {
            background: #03a9f4;
            border: none;
            outline: none;
            color: ;
            padding: 8px 16px;
            border-radius: 5px;
            font-size: 14px;
        }

        .box .input_box input:focus~label,
        .box .input_box input:valid~label {
            top: -20px;
            left: 0;
            color: #03a9f4;
            font-size: 12px;
        }
    </style>


</head>

<body>
    <header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            MAIL: <a href="#">rohitsharma1082001@gmail.com</a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>PHONE: <span>+91 9027748842</span></p>
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="login.php">Admin Login</a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                            <a class="d-block" href="index.php" rel="home"><img class="d-block" src="images/logo.png" alt="logo"></a>
                        </div><!-- .site-branding -->


                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="index.php">Home</a></li>
                                <li><a href="Volunteer.php">Volunteer</a></li>
                                <li><a href="donate.php">Donate</a></li>
                                <li><a href="news.php">News</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="about.php">About us</a></li>
                                <li><a href="login.php">Login</a></li>

                            </ul>
                        </nav><!-- .site-navigation -->

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->
    <h2 class="mt-5" style="color:brown;text-align:center">Admin<span style="color:blue">Login</span></h2>
    <div class="container">
        <div class="row align-items-center mt-3">
            <div class="col-sm-6">
                <div class="d-flex justify-content-center"><span class="fa fa-user " style="font-size:200px"></span></div>
            </div>
            <div class="col-sm-6">
                <div class="main">
                    <div class="box mb-4">
                        <h1>Admin<span>Login</span></h1>
                        <form action="codes\lcode.php" method="post">
                            <div class="input_box">
                                <input type="text" id="uid" name="uid" class="form-control" required>
                                <label for="uid">Username</label>
                            </div>
                            <div class="input_box">
                                <input type="password" id="psd" name="psd" class="form-control" required>
                                <label for="psd">Password</label>
                            </div>
                            <input type="submit" name="submit" class="btn btn-primary text-white" value="Login">
                        </form>
                    </div>

                </div>
            </div>

        </div>


    </div>




      <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#"><img src="images/foot-logo.png" alt=""></a></h2>

                            <p>
                                Charity is the act of giving help to those in need of it. It is a humanitarian act. ... Poor, sick or injured people are generally considered the proper people to whom charity should be given. </p>

                            <ul class="d-flex flex-wrap align-items-center">
                                <li><a href="https://www.instagram.com/myself__rohitsharma/"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/ROHITSH5587"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/myself__rohitsharma/"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/rohit-sharma108/"><i class="fa fa-linkedin"></i></a></li>
                                 <li><a href="https://github.com/RohitInnovates"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="Volunteer.php">Become a Volunteer</a></li>
                            <li><a href="donate.php">Donate</a></li>

                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="portfolio.php">Gallery</a></li>
                            <li><a href="news.php">News</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Latest News</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">A new cause to help</a></h3>
                                    <div class="posted-date">May 01, 2023</div>
                                </li>

                                <li>
                                    <h3><a href="#">We love to help people</a></h3>
                                    <div class="posted-date">May 12, 2023</div>
                                </li>

                                <li>
                                    <h3><a href="#">The new ideas for helping</a></h3>
                                    <div class="posted-date">May 20, 2023</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+91 9027748842</span></li>
                                <li><i class="fa fa-envelope"></i><span>rohitsharma1082001@gmail.com</span></li>
                                <li><i class="fa fa-map-marker"></i><span>19th KM Stone, NH-09,Ghaziabad,Uttar Pradesh 201009</span></li>
                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Rohit Kumar Ghaziabad
                            <i class="fa fa-heart-o" aria-hidden="true"></i> <a href="https://www.abes.ac.in" target="_blank"></a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->


    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
    <script type='text/javascript' src='js/swiper.min.js'></script>
    <script type='text/javascript' src='js/jquery.countdown.min.js'></script>
    <script type='text/javascript' src='js/circle-progress.min.js'></script>
    <script type='text/javascript' src='js/jquery.countTo.min.js'></script>
    <script type='text/javascript' src='js/jquery.barfiller.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>



</body>

</html>