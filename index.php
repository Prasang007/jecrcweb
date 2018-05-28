<?php
date_default_timezone_set("Asia/calcutta");
include 'classes/FetchDataMain.class.php';
include 'functions/time.display.function.php';
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
    <head>

        <title>JECRC:Top Engineering Colleges in India for B Tech,M Tech in Rajasthan</title>
        <!-- Meta -->

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="JECRC engineering college,Rajasthan among top engineering colleges in India,best college for B Tech.Ranked as one of the Best engineering college in India.">
        <link rel="shortcut icon" href="favicon.ico">  
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
        <!-- Global CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">   
        <!-- Plugins CSS -->    
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">

        <!-- Theme CSS -->  
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/animate.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head> 

    <body onload="StartMove();" class="home-page">

        <div class="wrapper">
            <!-- ******HEADER****** --> 
            <?php include 'modules/header.php'; ?>
            <!--//header-->

            <!-- ******NAV****** -->
            <?php include 'modules/navbar.php'; ?>
            <!--//main-nav-->

            <!--Slider start-->
            <?php include 'modules/slider.php'; ?>
            <!--/Slider-->

            <!-- ******CONTENT****** --> 
            <div class="container content">

                <!--News Start-->

                <?php include 'modules/news-area.php'; ?>

                <!--/News-->
                <div class="row cols-wrapper">
                    <div class="col-md-3">
                        <!--Events-->
                        <?php include 'modules/events-area.php'; ?>
                        <!--/events-->
                    </div><!--/col-md-3-->
                    <div class="col-md-6">

                        <!--Video Tour-->
                        <?php include 'modules/courseFinder.php'; ?>
                        <!--//video-->

                        <!--Video Tour-->
                        <?php include 'modules/video-tour.php'; ?>
                        <!--//video-->
                    </div>
                    <div class="col-md-3">

                        <!--Quick Links-->
                        <?php include 'modules/quick-links.php'; ?>
                        <!--//links-->

                        <!--Testimonials-->
                        <?php include 'modules/testimonials.php'; ?>
                        <!--/testimonials-->

                    </div><!--/col-md-3-->
                </div><!--/cols-wrapper-->
                <!--JECRC CAMPUS-->
                <?php include 'modules/campus.php'; ?>
                <!--/JECRC CAMPUS-->
            </div><!--/content-->

        </div><!--/wrapper-->

        <!-- ******FOOTER****** --> 
        <?php include 'modules/footer.php'; ?>
        <!--//footer-->

        <!-- Javascript -->          
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="js/bootstrap-hover-dropdown.min.js"></script> 
        <script type="text/javascript" src="js/back-to-top.js"></script>
        <script type="text/javascript" src="js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="js/main.js"></script>    
        <script type="text/javascript" src="js/jquery.sticky.js"></script>
        <script type="text/javascript" src="js/scroll.js"></script>
        <script type="text/javascript" src="js/chat.js"></script>
        <script>
        /* ======= Carousels ======= */
        $('#news-carousel').carousel({interval: false});
        $('#videos-carousel').carousel({interval: false});
        $('#testimonials-carousel').carousel({interval: 6000, pause: "hover"});
        $('#awards-carousel').carousel({interval: false});
        $('#carousel-slider').carousel({interval: 4000});


        </script>

    </body>
</html> 

