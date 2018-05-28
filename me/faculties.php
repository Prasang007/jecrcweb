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
                                <td><img src="../images/me/faculty/SINGH.png"
                                                     alt="Dr. M.P.SINGH">
                                </td>
                                <td>Dr. M.P.SINGH</td>
                                <td>Professor</td>
                                <td>P.hD</td>
                                <td>18</td>
                                <td></td>
                                <td>mpsingh.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr><td><img src="../images/me/faculty/Prof Utpal Chakravarty.png "
                                                     alt="Prof Utpal Chakravarty">
                                </td>
                                <td>Prof. Utpal Chakravarty</td>
                                <td>Assistant professor</td>
                                <td>B.TECH</td>
                                <td>45</td>
                                <td></td>
                                <td>utpalchakravarty@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/Manish Jain.png "
                                                     alt="Manish Jain">
                                </td>
                                <td>Mr. Manish Jain</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>26</td>
                                <td>3</td>
                                <td>manishjain.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/fac1.jpg "
                                                     alt="Bhuvensh Bhardwaj">
                                </td>
                                <td>Dr. Bhuvnesh Bhardwaj</td>
                                <td>Associate Professor</td>
                                <td>Ph.D</td>
                                <td>15</td>
                                <td>1</td>
                                <td>bhuvnesh.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/Dr Manish Shrivastava.png "
                                                     alt="Dr. Manish Shrivastava">
                                </td>
                                <td>Dr. Manish Shrivastava</td>
                                <td>Assistant professor</td>
                                <td>Ph.D.</td>
                                <td>25</td>
                                <td>3</td>
                                <td>manishsrivastava.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/Kuldeep Sharma.png "
                                                     alt="Kuldeep Sharma">
                                </td>
                                <td>Mr. Kuldeep Sharma</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>16.5</td>
                                <td>1</td>
                                <td>kuldeepsharma.me@jecrc.ac.in </td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/LALIT KUMAR SHARMA.png "
                                                     alt="LALIT KUMAR SHARMA">
                                </td>
                                <td>Mr. LALIT KUMAR SHARMA</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>11.5</td>
                                <td></td>
                                <td>lalitkumarsharma.me@jecrc.ac.in </td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/Rajendra Kumar Gupta.png "
                                                     alt="Rajendra Kumar Gupta">
                                </td>
                                <td>Mr. Rajendra Kumar Gupta</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>15</td>
                                <td></td>
                                <td>rajendragupta.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/Tejendra Singh.png "
                                                     alt="Tejendra Singh">
                                </td>
                                <td>Tejendra Singh</td>
                                <td>Assistant Professor</td>
                                <td>M.tech</td>
                                <td>9</td>
                                <td>2</td>
                                <td></td>
                                <td>jecrc.com</td>
                            </tr>
							<tr><td><img src="../images/me/faculty/SATYENDRA KUMAR.png "
                                                     alt="SATYENDRA KUMAR">
                                </td>
                                <td>Mr. SATYENDRA KUMAR</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>7</td>
                                <td>1</td>
                                <td>satyendrakumar.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr><td><img src="../images/me/faculty/SHASHANK SHEKHAR SINGH.png "
                                                     alt="SHASHANK SHEKHAR SINGH">
                                </td>
                                <td>Mr. SHASHANK SHEKHAR SINGH</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>2</td>
                                <td></td>
                                <td>shashank.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/Man Mohan Siddh.png "
                                                     alt="Man Mohan Siddh">
                                </td>
                                <td>Mr. Man Mohan Siddhe</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>1.5</td>
                                <td></td>
                                <td>manmohan.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/Hemant Bansal.png "
                                                     alt="Hemant Bansal">
                                </td>
                                <td>Mr. Hemant Bansal</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>7</td>
                                <td></td>
                                <td>dayalsinghrathore.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr><td><img src="../images/me/faculty/SHRIKANT BANSAL.png "
                                                     alt="SHRIKANT BANSAL">
                                </td>
                                <td>Mr. SHRIKANT BANSAL</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>7</td>
                                <td></td>
                                <td>shrikantbansal.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr><td><img src="../images/me/faculty/Yogesh Dubey.png "
                                                     alt="Yogesh Dubey">
                                </td>
                                <td>Mr. Yogesh Dubey</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>10</td>
                                <td></td>
                                <td>yogeshdubey.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr><td><img src="../images/me/faculty/TEJ BAHADUR SINGH.png "
                                                     alt="TEJ BAHADUR SINGH">
                                </td>
                                <td>Mr. TEJ BAHADUR SINGH</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>3</td>
                                <td></td>
                                <td>tejbahadur.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr><td><img src="../images/me/faculty/SATYA PRAKASH SAINI.png "
                                                     alt="SATYA PRAKASH SAINI">
                                </td>
                                <td>Mr. SATYA PRAKASH SAINI</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>5.5</td>
                                <td></td>
                                <td>satyaprakash.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
							<td><img src="../images/me/faculty/PALAK JINDAL.png "
                                                     alt="PALAK JINDAL">
                                </td>
                                <td>PALAK JINDAL</td>
                                <td>Assistant Professor</td>
                                <td>M.tech</td>
                                <td>8</td>
                                <td></td>
                                <td>palak.me@jecrc.ac.in</td>
                                <td>jecrc.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/dayal.png "
                                                     alt="Dayal Singh Rthore">
                                </td>
                                <td>Mr. Dayal Singh Rthore</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>7</td>
                                <td></td>
                                <td>dayalsinghrathore.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/ashish nagpal.png "
                                                     alt="ashish nagpal">
                                </td>
                                <td>Aashish Nagpal</td>
                                <td>Assistant Professor</td>
                                <td>M.tech</td>
                                <td>8</td>
                                <td></td>
                                <td>aashisnagpal.me@jecrc.ac.in</td>
                                <td>jecrc.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/Akhil.jpg "
                                                     alt="Akhil">
                                </td>
                                <td>AKHIL VIJAY</td>
                                <td>Assistant Professor</td>
                                <td>M.TECH</td>
                                <td>6</td>
                                <td>1</td>
                                <td>akhilvijay.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/Mra Priti pramod Bodkhe.png "
                                                     alt="Mra Priti pramod Bodkhe">
                                </td>
                                <td>Mra Priti pramod Bodkhe</td>
                                <td>Assistant Professor </td>
                                <td>M.TECH </td>
                                <td>8</td>
                                <td></td>
                                <td>priti.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
                            <tr>
                                <td><img src="../images/me/faculty/abhishek kumar.png "
                                                     alt="Abhishek Kumar">
                                </td>
                                <td>Mr. Abhishek Kumar</td>
                                <td>Assistant Professor </td>
                                <td>M.TECH </td>
                                <td>7</td>
                                <td></td>
                                <td>abhishekkumar.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
                            <tr>
                                <td><img src="../images/me/faculty/Gourav Kumar Jain.png "
                                                     alt="Gourav Kumar Jain">
                                </td>
                                <td>Mr. Gourav Kumar Jain</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>10</td>
                                <td>1</td>
                                <td>hemantbansal.me@jecrc.ac.in </td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <td><img src="../images/me/faculty/NIKHIL JAIN.png "
                                                     alt="NIKHIL JAIN">
                                </td>
                                <td>Mr. NIKHIL JAIN</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>5</td>
                                <td></td>
                                <td>nikhilj981@gmail.com</td>
                                <td>test@example.com</td>
                            </tr>
							<tr><td><img src="../images/me/faculty/Veerendra Kumar.png "
                                                     alt="Veerendra Kumar">
                                </td>
                                <td>Mr. Veerendra Kumar</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>4</td>
                                <td>1</td>
                                <td>veerendra.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
                            <tr>
                                <td><img src="../images/me/faculty/akhilesh.png "
                                                     alt="Akhilesh Paliwal">
                                </td>
                                <td>Mr. AKHILESH PALIWAL</td>
                                <td>Assistant Professor</td>
                                <td>M.TECH</td>
                                <td>3.5</td>
                                <td></td>
                                <td>akhilesh.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
                            <tr><td><img src="../images/me/faculty/HUKAM CHAND.png "
                                                     alt="HUKAM CHAND">
                                </td>
                                <td>HUKAM CHAND</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>6</td>
                                <td></td>
                                <td>hukamchand.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr><td><img src="../images/me/faculty/Ravi kumar jangid.png "
                                                     alt="Ravi kumar jangid">
                                </td>
                                <td>Mr. Ravi kumar jangid</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>4</td>
                                <td></td>
                                <td>ravijangid.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr>
							<tr><td><img src="../images/me/faculty/Nitin chhabra.png "
                                                     alt="Nitin chhabra">
                                </td>
                                <td>Nitin chhabra</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>9</td>
                                <td></td>
                                <td>nitinchhabra.me@jecrc.ac.in </td>
                                <td>test@example.com</td>
                            </tr>
                            <tr>
                                <td><img src="../images/me/faculty/dilip.png "
                                                     alt="Dilip Kumar Prajapati">
                                </td>
                                <td>Mr. Dilip Kumar Prajapati</td>
                                <td>Assistant professor</td>
                                <td>B.TECH</td>
                                <td>7</td>
                                <td></td>
                                <td>dilipprajapati85@gmail.com</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
                                <tr>
                                <td><img src="../images/me/faculty/JITENDRA KUMAR GUPTA.png "
                                                     alt="JITENDRA KUMAR GUPTA">
                                </td>
                                <td>Mr. JITENDRA KUMAR GUPTA</td>
                                <td>Assistant professor</td>
                                <td>B.TECH</td>
                                <td>6</td>
                                <td></td>
                                <td>jetu.gupta@gmail.com</td>
                                <td>test@example.com</td>
                            </tr>
							<tr>
							<td><img src="../images/me/faculty/Ravi Yadav.png "
                                                     alt="Ravi Yadav">
                                </td>
                                <td>Mr. Ravi Yadav</td>
                                <td>Assistant professor</td>
                                <td>B.TECH</td>
                                <td>8</td>
                                <td></td>
                                <td>Raviyadav.me@jecrc.ac.in</td>
                                <td>test@example.com</td>
                            </tr><tr><td><img src="../images/me/faculty/Tejaram Saini.png "
                                                     alt="Tejaram Saini">
                                </td>
                                <td>Mr. Tejaram Saini</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>2</td>
                                <td></td>
                                <td>tejaramsaini.me.13@jecrc.ac.in</td>
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

