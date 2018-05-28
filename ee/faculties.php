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
                        <h1 class="title pull-left">Our Faculties</h1>

                    </header>
                    <hr>
                        <table class="des">
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Qualification</th>
                                <th>Experience</th>
                                <th>No. of Publication</th>
                                <th>Email</th>
                                <th>Link</th>
                            </tr>
                            <tr>
                                <td><img src="../images/ee/faculty/Dr. Sandeep Vyas.png "
                                                     alt="Dr. Sandeep Vyas">
                                </td>
                                <td>Dr. Sandeep Vyas</td>
                                <td>Associate Professor</td>
                                <td>P.hD</td>
                                <td>16</td>
                                <td>3</td>
                                <td>dr.sandeepvyas.ee@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/ee/faculty/L.SENTHIL.png "
                                                     alt="L.SENTHIL">
                                </td>
                                <td>Mr. L.SENTHIL</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>12</td>
                                <td>4</td>
                                <td>senthillakshmanan.ee@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/ee/faculty/SONALI CHADHA.png "
                                                     alt="SONALI CHADHA">
                                </td>
                                <td>Mr. SONALI CHADHA</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>11</td>
                                <td></td>
                                <td>Chadha.sonali@gmail.com</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/ee/faculty/Atul Kulshrestha.png "
                                                     alt="Atul Kulshrestha">
                                </td>
                                <td>Atul Kulshrestha</td>
                                <td>Assistant Professor </td>
                                <td>M.TECH </td>
                                <td>28</td>
                                <td>3</td>
                                <td>atulkulshrestha.ee@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/ee/faculty/Gopal Tiwari.png "
                                                     alt="Gopal Tiwari">
                                </td>
                                <td>Mr. Gopal Tiwari</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>12</td>
                                <td>0</td>
                                <td>gopaltiwari.ee@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/ee/faculty/RAMSINGH.png "
                                                     alt="RAMSINGH">
                                </td>
                                <td>RAMSINGH </td>
                                <td>Assistant Professor</td>
                                <td>M.TECH</td>
                                <td>14</td>
                                <td>1</td>
                                <td>ramsingh.ee@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/ee/faculty/Poonam Gupta.png "
                                                     alt="Poonam Gupta">
                                </td>
                                <td>Ms. Poonam Gupta</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>7</td>
                                <td></td>
                                <td>poonamgupta.ee@jerc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/ee/faculty/Manish pal.png "
                                                     alt="Manish pal">
                                </td>
                                <td>Mr. Manish pal</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>8</td>
                                <td>2</td>
                                <td>manishpal.ee@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/ee/faculty/Shailendra Shrivastava.png "
                                                     alt="Shailendra Shrivastava">
                                </td>
                                <td>Mr. Shailendra Shrivastava</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>10</td>
                                <td>2</td>
                                <td>lalitkumarsharma.me@jecrc.ac.in </td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/ee/faculty/ASHOK SINGH CHUNDAWAT.png "
                                                     alt="ASHOK SINGH CHUNDAWAT">
                                </td>
                                <td>ASHOK SINGH CHUNDAWAT</td>
                                <td>Assistant Professor</td>
                                <td>M.tech</td>
                                <td>3.4</td>
                                <td>1</td>
                                <td>ashoksingh.ee@jecrc.ac.in</td>
                                <td>jecrc.com</td>
                            </tr>
                            
                            
                            <tr>
                                <td><img src="../images/ee/faculty/Rahul Kumar Malee.png "
                                                     alt="Rahul Kumar Malee">
                                </td>
                                <td>Mr. Rahul Kumar Malee</td>
                                <td>Assistant Professor</td>
                                <td>M.TECH</td>
                                <td>2</td>
                                <td>1</td>
                                <td>rahulkumar.ee@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
                            <tr>
                                <td><img src="../images/ee/faculty/Sunil Kumar Sharma.png "
                                                     alt="Sunil Kumar Sharma">
                                </td>
                                <td>Sunil Kumar Sharma</td>
                                <td>Assistant Professor</td>
                                <td>M.TECH</td>
                                <td>6.5</td>
                                <td></td>
                                <td>sunilsharma.ee@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
                            <tr>
                                <td><img src="../images/ee/faculty/YAZUSHA SHARMA.png "
                                                     alt="YAZUSHA SHARMA">
                                </td>
                                <td>Ms. YAZUSHA SHARMA</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>4</td>
                                <td>1</td>
                                <td>yazushasharma.ece@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <tr>
                                <td><img src="../images/ee/faculty/GEETIKA BHATI MATHUR.png "
                                                     alt="GEETIKA BHATI MATHUR">
                                </td>
                                <td>Ms. GEETIKA BHATI MATHUR</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>13</td>
                                <td>8</td>
                                <td>geetikamathur.ece@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/ee/faculty/Ravita Saraswat.png "
                                                     alt="Ravita Saraswat">
                                </td>
                                <td>Ms. Ravita Saraswat</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>5</td>
                                <td>1</td>
                                <td>ravita.ee@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/ee/faculty/Neha Agrawal.png "
                                                     alt="Neha Agrawal">
                                </td>
                                <td>Ms. Neha Agrawal</td>
                                <td>Assistant professor</td>
                                <td>B.TECH</td>
                                <td>1</td>
                                <td>1</td>
                                <td></td>
                                <td>test@example.com</td>
                            </tr><tr>
                                <td><img src="../images/ee/faculty/Vishnu Dutt Sharma "
                                                     alt="Vishnu Dutt Sharma">
                                </td>
                                <td>Mr. Vishnu Dutt Sharma</td>
                                <td>Professor</td>
                                <td>B.Tech</td>
                                <td>6</td>
                                <td>1</td>
                                <td>vishnuduttsharma.ee@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
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

