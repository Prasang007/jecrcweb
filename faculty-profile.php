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
        <meta name="description" content="JECRC engineering college,Rajasthan among top engineering colleges in India,best college for B Tech,M Tech,MBA .Ranked as one of the Best engineering college in India.">
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
            <header class="header">  
                <div class="top-bar">
                    <div class="container">              
                        <ul class="social-icons col-md-6 col-sm-6 col-xs-12">
                            <li><a href="#" ><i class="fa fa-twitter socialIcon"></i></a></li>
                            <li><a href="#" ><i class="fa fa-facebook socialIcon"></i></a></li>
                            <li><a href="#" ><i class="fa fa-youtube socialIcon"></i></a></li>
                            <li><a href="#" ><i class="fa fa-linkedin socialIcon"></i></a></li>
                            <li><a href="#" ><i class="fa fa-google-plus socialIcon"></i></a></li>         
                            <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>             
                        </ul><!--//social-icons-->

                        <ul class="menu-top navbar-right">
                            <li class="divider"><a href="index.php">Home</a></li>
                            <li class="divider"><a href="index.php">Training</a></li>
                            <li class="divider"><a href="index.php">Media Coverage</a></li>
                            <li class="divider"><a href="careers.php">Careers</a></li>
                            <li><a href="contact.php">Contact us</a></li>
                            <li><a href="javascript:void(0)" onclick="javascript:chatWith('JECRC')">Chat</a></li>
                        </ul>
                    </div>      
                </div><!--//to-bar-->
                <div class="header-main container" id="sticky-nav">



                </div><!--//header-main-->

            </header>

            <!-- ******NAV****** -->
            <?php include 'modules/dept-header.php'; ?>
            <!--//main-nav-->

            <div class="container">

                <div class="row page-row"> 
                    <header class="page-heading clearfix">
                        <h1 class="title pull-left">Our Faculties</h1>

                    </header>
                    <hr>

                    <div class="team-wrapper col-md-8 col-sm-7">
                        <div class="row page-row">
                            <figure class="thumb col-md-3 col-sm-4 col-xs-6">
                                <img class="img-responsive" src="images/cse/faculty/fac1.jpg" alt="">
                            </figure>
                            <div class="details col-md-9 col-sm-8 col-xs-6">
                                <h3 class="title">Mrs. Neelam Chaplot</h3>
                                <h4><blockquote>HOD CSE Department</blockquote></h4>
                                <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> neelamchaplot@jecrc.ac.in</p>
                                <p></p>
                                
                            </div>       
                            
                        </div>
                        <h4 class="bg-primary" style="text-align: center;padding: 5px; border-radius: 2px;" >Profile</h4>
                    </div>



                </div>


            </div>

        </div>
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
        <script type="text/javascript" src="js/chat.js"></script>
        <script>

                                $("#contactMe").addClass("disabled");

                                $("#name").keyup(function () {

                                    var name = $("#name").val();

                                    var phoneNo = $("#phoneNumber").val();
                                    if (name != '' && phoneNo != '') {

                                        $("#contactMe").removeClass("disabled");
                                    } else {

                                        $("#contactMe").addClass("disabled");
                                    }

                                });

                                $("#phoneNumber").keyup(function () {

                                    var name = $("#name").val();

                                    var phoneNo = $("#phoneNumber").val();
                                    if (name != '' && phoneNo != '') {

                                        $("#contactMe").removeClass("disabled");
                                    } else {

                                        $("#contactMe").addClass("disabled");
                                    }

                                });

                                $("#contactMeform").submit(function () {

                                    var name = $("#name").val();

                                    var phoneNo = $("#phoneNumber").val();

                                    $.post("scripts/admissionContact.php", {name: name, phone: phoneNo}, function (data, status) {

                                        if (data == true) {

                                            $("#promo-success").html("<p class='btn' id='promo-successful'>WHOAA! We will get in touch with you soon..</p>");
                                        } else {

                                            $("#promo-success").html("<p class='btn' id='promo-warning'>Something Went Wrong...Please Enter Proper Format..</p>");
                                        }
                                    });

                                    return false;
                                });


        </script>

    </body>
</html> 

