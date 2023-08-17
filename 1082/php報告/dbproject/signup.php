<?php
    ob_start();
    require "header.php";
    ob_end_clean();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Sign Up</title>
    <meta charset="UTF-8">
    <meta name="description" content="loans HTML Template">
    <meta name="keywords" content="loans, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">
 
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="css/flaticon.css"/>
    <link rel="stylesheet" href="css/slicknav.min.css"/>

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css"/>

</head>
<body>
    <main>
        <?php
        if(isset($_GET['error'])){
            if($_GET['error']=="emptyfields"){
                echo'<p>Fill the Fields you RETARD!!!</p>';
            }
            else if($_GET['error']=="invaliduidmail"){
                echo'<p>Invalid username and email</p>';
            }
            else if($_GET['error']=="invaliduid"){
                echo'<p>Invalid username!</p>';
            }
            else if($_GET['error']=="invalidmail"){
                echo'<p>Invalid email!</p>';
            }
            else if($_GET['error']=="passwordcheck"){
                echo'<p>Your password does not match!</p>';
            }
            else if($_GET['error']=="usertaken"){
                echo'<p>Username taken!</p>';
            }
        }
        else if(@$_GET['signup']=="success"){
            echo "<script>alert('Sign Up Success'); location.href = 'index.php';</script>";
        }
    ?>
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hs-text">
                        <h2>Sign up!</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form action="includes/signup.inc.php" method="post" class="hero-form">
                        <input type="text" name="uid" placeholder="Username"><br>
                            <input type="text" name="mail" placeholder="Email"><br>
                            <input type="password" name="pwd" placeholder="Password"><br>
                            <input type="password" name="pwd-repeat" placeholder="Repeat password"><br>
                            <button class="site-btn" type="submit" name="signup-submit">Sign Up</button>
                            <input class="site-btn" style="margin-top: 25px" type="button" value="Home" onclick="location.href='index.php'">
                    </form>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/pepe5.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/pepe3.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/pee.jpg"></div>
        </div>
    </section>
    <!-- Page Preloder -->
<!-- 
    <div id="preloder">
        <div class="loader"></div>
    </div>
</main>
    Hero Section end 
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hs-text">
                        <h2>Sign up!</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="hero-form">
                        <input type="text" placeholder="Your Name">
                        <input type="text" placeholder="Your E-mail">
                        <input type="text" placeholder="Your Phone">
                        
                        <button class="site-btn">Apply for a loan now!</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            <div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg"></div>
            <div class="hs-item set-bg" data-setbg="img/hero-slider/3.jpg"></div>
        </div>
    </section>-->
    <!-- Hero Section end -->

    
    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/main.js"></script>

    </body>
</html>

<?php
    require "footer.php";
?>