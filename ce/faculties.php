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
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Qualification</th>
                                <th>Experience</th>
                                <th>No. of Publication</th>
                                <th>Email</th>
                                <th>Link</th>
                            </tr>
                            <tr>
							<tr>
                                <td><img src="../images/ce/faculty/Sumit.jpg "
                                                     alt="Sumit Saini">
                                </td>
                                <td>Mr. Sumit Saini</td>
                                <td>Assistant professor</td>
                                <td>B.TECH</td>
                                <td>5</td>
                                <td></td>
                                <td>sumitsaini.ce@jecrc.ac.in</td>
                                <td>Sumit@example.com</td>
								<tr>
                                <td><img src="../images/ce/faculty/Kamlesh.jpg "
                                                     alt="Kamlesh Kumar Choudhary ">
                                </td>
                                <td>Mr. Kamlesh Kumar Choudhary </td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>3.5</td>
                                <td></td>
                                <td>hod.ce@jecrc.ac.in,  kamleshchaudhary.ce@jecrc.ac.in </td>
                                <td>Kamlesh@example.com</td>
								<tr>
								<tr>
                                <td><img src="../images/ce/faculty/Yogesh.jpg "
                                                     alt="Yogesh Kumar Agarwal">
                                </td>
                                <td>Mr. Yogesh Kumar Agarwal</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>3</td>
                                <td>1</td>
                                <td>yogesh.ce@jecrc.ac.in</td>
                                <td>Yogesh@example.com</td>
								<tr>
								<tr>
                                <td><img src="../images/ce/faculty/Jitesh.jpg "
                                                     alt="Jitesh Kumar Jain">
                                </td>
                                <td>Mr. Jitesh Kumar Jain</td>
                                <td>Assistant professor</td>
                                <td>B.E</td>
                                <td>2.5</td>
                                <td>7</td>
                                <td>jiteshjain.ce@jecrc.ac.in</td>
                                <td>Jitesh@example.com</td>
								<tr>
                                <td><img src="../images/ce/faculty/Monika.jpg "
                                                     alt="Monika Sharma">
                                </td>
                                <td>Ms. Monika Sharma</td>
                                <td>Assistant Professor</td>
                                <td>2.5</td>
                                <td>0.6</td>
                                <td></td>
                                <td> monikasharma.ce@jecrc.ac.in</td>
                                <td>Monika@example.com</td>
								<tr>
                                <td><img src="../images/ce/faculty/Shilpa.jpg "
                                                     alt="Shilpa Thakur">
                                </td>
                                <td>Ms. Shilpa Thakur</td>
                                <td>Associate Professor</td>
                                <td>M.TECH</td>
                                <td>2.5</td>
                                <td></td>
                                <td>shilpathakur.ce@jecrc.ac.in</td>
                                <td>Shilpa@example.com</td>
								<tr>
                                <td><img src="../images/ce/faculty/Amit.jpg "
                                                     alt="Amit Mittal">
                                </td>
                                <td>Mr. Amit Mittal</td>
                                <td>Assistant Professor </td>
                                <td>B.TECH </td>
                                <td>6</td>
                                <td></td>
                                <td>amitmittal.ce@jecrc.ac.in</td>
                                <td>Amit@example.com</td>
								<tr>
                                <td><img src="../images/ce/faculty/Nida.jpg "
                                                     alt="Nida Khanam">
                                </td>
                                <td>Ms. Nida Khanam</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>2</td>
                                <td></td>
                                <td>nidakhanam.ce@jecrc.ac.in</td>
                                <td>Nida@example.com</td>
								<tr>
                                <td><img src="../images/ce/faculty/Brijlata.jpg "
                                                     alt="Brijlata Sharma">
                                </td>
                                <td>Ms.Brijlata Sharma</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>3.5</td>
                                <td></td>
                                <td>yogesh.ce@jecrc.ac.in</td>
                                <td>Brijlata@example.com</td>
								
								<tr>
								
								   <td><img src="../images/ce/faculty/akhil.jpg "
                                                     alt="Akhil Maheshwari">
                                </td>
                                <td>Mr.Akhil Maheshwari</td>
                                <td>Assistant Professor</td>
                                <td>M.tech</td>
                                <td>6</td>
                                <td></td>
                                <td>akhil.ce@jecrc.ac.in</td>
                                <td>jecrcamd.com</td>
								<tr>
                                <td><img src="../images/ce/faculty/Ashish.jpg "
                                                     alt="Ashish Boraida">
                                </td>
                                <td>Mr.Ashish Boraida</td>
                                <td>Assistant Professor</td>
                                <td>M.TECH</td>
                                <td>3.5</td>
                                <td>2.5</td>
                                <td> ashish.ce@jecrc.ac.in</td>
                                <td>Ashish@example.com</td>
								<tr>
                                <td><img src="../images/ce/faculty/Hetram.jpg "
                                                     alt="Hetram Sharma">
                                </td>
                                <td>Mr.Hetram Sharma</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>8</td>
                                <td></td>
                                <td>hetram.ce@jecrc.ac.in </td>
                                <td>Hetram@example.com</td>
                            </tr>
                            
                            </tr>
                            <tr>
                                <td><img src="../images/ce/faculty/Anuradha Singh.jpg "
                                                     alt="Anuradha Singh">
                                </td>
                                <td>Mr. Anuradha Singh</td>
                                <td>Assistant Professor</td>
                                <td>M.TECH</td>
                                <td>3.5</td>
                                <td></td>
                                <td>anuradha.ce@jecrc.ac.in </td>
                                <td>Anuradha@example.com</td>
                            </tr>
                            
                            </tr>
                            
                            </tr>
                            <
                            </tr>
							<tr>
                                <tr>
                                <td><img src="../images/ce/faculty/Hitesh.jpg "
                                                     alt="Hitesh Nagar">
                                </td>
                                <td>Mr.Hitesh Nagar</td>
                                <td>Assistant professor</td>
                                <td>B.TECH</td>
                                <td>1.5</td>
                                <td>0.5</td>
                                <td>hetram.ce@jecrc.ac.in </td>
                                <td>Hitesh@example.com</td>
                            </tr>
                            </tr>
							<tr>
                                <td><img src="../images/ce/faculty/Pradeep.jpg "
                                                     alt="Pradeep Kumar Jain ">
                                </td>
                                <td>Mr. Pradeep Kumar Jain
								</td>
                                <td>Assistant professor</td>
                                <td>B.TECH</td>
                                <td>5</td>
                                <td></td>
                                <td>pradeepkumar.ce@jecrc.ac.in</td>
                                <td>Pradeep@example.com</td>
							<tr>
                                <td><img src="../images/ce/faculty/Prateek.jpg "
                                                     alt="Prateek Kumar Sharma">
                                </td>
                                <td>Mr. Prateek Kumar Sharma</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>1</td>
                                <td></td>
                                <td>prateeksharma.ce@jecrc.ac.in</td>
								 <td>Prateek@example.com</td>
                            </tr>
							
                            </tr><tr>
                                <td><img src="../images/ce/faculty/Narendra.jpg "
                                                     alt="Narendra Sipani">
                                </td>
                                <td>Mr. Narendra Sipani
								</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>1</td>
                                <td>1</td>
                                <td> narendrasipani.ce@jecrc.ac.in</td>
                                <td>Narendra@example.com</td>
                            </tr>
                            </tr>
                            </tr>
                               
                            </tr><tr>
                                <td><img src="../images/ce/faculty/Rahul.jpg "
                                                     alt="Rahul Agrawal">
                                </td>
                                <td>Mr. Rahul Agrawal</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>1</td>
                                <td>2.5</td>
                                <td>rahulagrawal.ce@jecrc.ac.in</td>
                                <td>rahul@example.com</td>
                            </tr>
                            </tr>
							
                            </tr><tr>
                                <td><img src="../images/ce/faculty/Teekam.jpg "
                                                     alt="Teekam Singh">
                                </td>
                                <td>Mr. Teekam singh</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>3.5</td>
                                <td></td>
                                <td>teekamsingh.ce@jecrc.ac.in </td>
                                <td>Teekamsingh@example.com</td>
                            </tr>
								 </tr>
								 <tr>
								
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

