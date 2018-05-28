<?php
date_default_timezone_set("Asia/calcutta");
include '../classes/FetchDataMain.class.php';
include '../functions/time.display.function.php';
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
        <link rel="shortcut icon" href="../favicon.ico">  
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
        <!-- Global CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">   
        <!-- Plugins CSS -->    
        <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">

        <!-- Theme CSS -->  
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/animate.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="../https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="../https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style type="text/css">
            .content {
    font-size: 16px;
    background-color: #fecd0b;
    font-weight: 700;
    height: 50px;
    position: relative;
    padding-left: 30px;
    margin-top: 35px;
    font-family: 'Lato', sans-serif;
}
            .des table {
                max-width: 100%;
            }
            .des th, td{
                text-align: center;
                border:2px solid #c7c2c2;
                padding: 8px;
            }
            .des th {
                background-color: #28439c;
                color: white;
            }
            .des tr:nth-child(even){background-color: #f2f2f2;}

            .des tr:hover {background-color: #ddd;}
        </style>
    </head> 

    <body onload="StartMove();" class="home-page">
        <div class="wrapper">
            <header class="header">  
                <div class="top-bar">
                    <div class="container">              
                        <ul class="social-icons col-md-6 col-sm-6 col-xs-12">
                            <li><a href="../#" ><i class="fa fa-twitter socialIcon"></i></a></li>
                            <li><a href="../#" ><i class="fa fa-facebook socialIcon"></i></a></li>
                            <li><a href="../#" ><i class="fa fa-youtube socialIcon"></i></a></li>
                            <li><a href="../#" ><i class="fa fa-linkedin socialIcon"></i></a></li>
                            <li><a href="../#" ><i class="fa fa-google-plus socialIcon"></i></a></li>         
                            <li class="row-end"><a href="../#" ><i class="fa fa-rss"></i></a></li>             
                        </ul><!--//social-icons-->

                        <ul class="menu-top navbar-right">
                            <li class="divider"><a href="../index.php">Home</a></li>
                            <li class="divider"><a href="../index.php">Training</a></li>
                            <li class="divider"><a href="../index.php">Media Coverage</a></li>
                            <li class="divider"><a href="../careers.php">Careers</a></li>
                            <li><a href="../contact.php">Contact us</a></li>
                            <li><a href="../javascript:void(0)" onclick="javascript:chatWith('JECRC')">Chat</a></li>
                        </ul>
                    </div>      
                </div><!--//to-bar-->
                <div class="header-main container" id="sticky-nav">



                </div><!--//header-main-->

            </header>

            <!-- ******NAV****** -->
            <?php include '../modules/dept-header.php'; ?>
            <!--//main-nav-->

            <div class="container">

                <div class="row page-row"> 
                    <header class="page-heading clearfix">
                        <h1 class="title pull-left">Our Technician</h1>

                    </header>
                    <hr>
                        <table class="des">
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Qualification</th>
                                <th>Experience</th>
   
                                <th>Email</th>
                               
                            </tr>
                            <tr>
                                <td><img src="../images/me/technician/Rajendra Singh Naruka.png "
                                                     alt="Rajendra Singh Naruka">
                                </td>
                                <td>Rajendra Singh Naruka</td>
                                <td>Sr. Lab Instructor</td>
                                <td>ITI</td>
                                <td>29</td>
                                <td>narukaraj@gmail.com</td>
                            </tr>
                            <tr>
							<td><img src="../images/me/technician/Sunil Kumar Yadav.png "
                                                     alt="Sunil Kumar Yadav">
                                </td>
                                <td>Mr. Sunil Kumar Yadav</td>
                                <td>Lab Instructor</td>
                                <td>ITI</td>
                                <td>4</td>
                                <td>narukaraj@gmail.com</td>
                            </tr>
							<tr>
							<td><img src="../images/me/technician/Narendra singh.png "
                                                     alt="Narendra singh">
                                </td>
                                <td>Mr. Narendra singh</td>
                                <td>Lab Instructor</td>
                                <td>Diploma</td>
                                <td>14</td>
                                <td>nsinghjaipur@gmail.com</td>
                            </tr>
							<tr>
							<td><img src="../images/me/technician/Hemant naiwal.png "
                                                     alt="Hemant naiwal">
                                <td>Mr. Hemant naiwal</td>
                                <td>Sr. Lab Instructor</td>
                                <td>Diploma</td>
                                <td>12</td>
                                <td>hemant.me@jecrc.ac.in</td>
                            </tr>
							<tr>
							<td><img src="../images/me/technician/Sandeep sharma.png "
                                                     alt="Sandeep sharma">
                                </td>
                                <td>Mr. Sandeep Sharma</td>
                                <td>Lab Instructor</td>
                                <td>Diploma</td>
                                <td>7</td>
                                <td>Sandeep.sharma.8361@gmail.com</td>
                            </tr>
<tr>
							<td><img src="../images/me/technician/Anil Kumar Prajapati.png "
                                                     alt="Anil Kumar Prajapati">
                                </td>
                                <td>Mr. Anil Kumar Prajapati</td>
                                <td>Lab Instructor</td>
                                <td>Diploma</td>
                                <td>2</td>
                                <td>anil.prajapati@ymail.com</td>
                            </tr>
<tr>
							<td><img src="../images/me/technician/Hanuman Prasad Saini.png "
                                                     alt="Sandeep sharma">
                                </td>
                                <td>Mr. Hanuman Prasad Saini</td>
                                <td>Lab Instructor</td>
                                <td>Diploma</td>
                                <td>7</td>
                                <td>hpsaini1970@gmail.com</td>
                            </tr>
<tr>
							<td><img src="../images/me/technician/Birsingh Sirowa.png "
                                                     alt="Birsingh Sirowa">
                                </td>
                                <td>Mr. Birsingh Sirowa</td>
                                <td>Lab Instructor</td>
                                <td>MCA</td>
                                <td>12</td>
                                <td>birsinghsirowa.it@jecrc.ac.in</td>
                            </tr>
							</table>
                    <!--//team-wrapper-->

                </div>


            </div>

        </div>
        <!-- ******FOOTER****** --> 
        <?php include '../modules/footer.php'; ?>
        <!--//footer-->
        <!-- Javascript -->          
        <script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="../js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="../js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="../js/bootstrap-hover-dropdown.min.js"></script> 
        <script type="text/javascript" src="../js/back-to-top.js"></script>
        <script type="text/javascript" src="../js/jquery.placeholder.js"></script>
        <script type="text/javascript" src="../js/main.js"></script>    
        <script type="text/javascript" src="../js/jquery.sticky.js"></script>
        <script type="text/javascript" src="../js/chat.js"></script>
        <!-- <script>

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


        </script> -->

    </body>
</html> 

