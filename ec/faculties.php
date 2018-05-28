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
							 <td><img src="../images/ec/faculty/Lokesh Kumar Bansal.jpg "
                                                     alt="Dr. Lokesh Kumar Bansal">
                                </td>
                                <td>Dr. Lokesh Kumar Bansal</td>
                                <td>professor & Head</td>
                                <td>P.hd</td>
                                <td>18</td>
                                <td></td>
                                <td>hod.ece@jecrc.ac.in</td>
                                <td>Dr.Lokesh@example.com</td>
								</tr>
								<tr>
									<td><img src="../images/ec/faculty/Shruti.jpg "
                                                     alt="Ms.Shruti Kalra">
                                </td>
                                <td>Ms. Shruti Kalra</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>15</td>
                                <td></td>
                                <td>shrutikalra.ece@jecrc.ac.in, shrutisumitkalra@gmail.com</td>
                                <td>shruti@test.com</td>
								</tr>
								<tr>
								
                                <td><img src="../images/ec/faculty/Rajesh Kumar Bathija.jpg "
                                                     alt="Rajesh Kumar Bathija">
                                </td>
                                <td>Mr. Rajesh Kumar Bathija</td>
                                <td>Associate Professor</td>
                                <td>M.TECH</td>
                                <td>19</td>
                                <td></td>
                                <td>rajesh.ece@jecrc.ac.in</td>
                                <td>rajesh@example.com</td>
								</tr>
							<tr>
							<td><img src="../images/ec/faculty/SHYAMSUNDER MANAKTALA.jpg "
                                                     alt="SHYAMSUNDER MANAKTALA">
                                </td>
                                <td>Mr. Shyamsunder Manaktala</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>16</td>
                                <td>2</td>
                                <td>ssmanaktala.ece@jecrc.ac.in</td>
                                <td>ssmanak@example.com</td>
								</tr>
								<tr>
							                   <td><img src="../images/ec/faculty/Anil Jain.jpg "
                                                     alt="Anil">
                                </td>
                                <td>Mr. Anil Jain</td>
                                <td>Assistant Professor</td>
                                <td>M.TECH</td>
                                <td>8</td>
                                <td>4</td>
                                <td>aniljain.ece@jecrc.ac.in</td>
                                <td>admin@example.com</td>
								</tr>
								<tr>
								 <td><img src="../images/ec/faculty/Vinita Mathur.jpg "
                                                     alt="Vinita Mathur">
                                </td>
                                <td>Dr. Vinita Mathur</td>
                                <td>Senior Assistant professor</td>
                                <td>Ph.D</td>
                                <td>10</td>
                                <td></td>
                                <td>vinitamathur.ece@jecrc.ac.in </td>
                                <td>vinita@example.com</td>
								</tr>
								<tr>
								<td><img src="../images/ec/faculty/Parul Tyagi.jpg "
                                                     alt="Parul Tyagi">
                                </td>
                                <td>Ms. Parul Tyagi</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>13</td>
                                <td></td>
                                <td>tyagi.parul82@gmail.com</td>
                                <td>parul@example.com</td>
								</tr>
								<tr>
								<td><img src="../images/ec/faculty/Ritu.jpg "
                                                     alt="Ms. Ritu Vyas">
                                </td>
                                <td>Ms. Ritu Vyas</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>8</td>
                                <td></td>
                                <td>rituvyas.ece@jecrc.ac.in</td>
                                <td>ritu@test.com</td>
								</tr>
								<tr>
													<td><img src="../images/ec/faculty/Vikas.jpg "
                                                     alt="Mr. Vikas Sharma">
                                </td>
                                <td>Mr. Vikas Sharma</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>8.5</td>
                                <td>0.6</td>
                                <td>vikassharma.ece@jecrc.ac.in</td>
                                <td>Vikashsharma@test.com</td>
								</tr>
								<tr>
								 </tr>
                            <tr>
                                <td><img src="../images/ec/faculty/ASHISH KULSHRESTHA.jpg "
                                                     alt="ASHISH KULSHRESTHA">
                                </td>
                                <td>Mr.Ashish Kulshrestha</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>6</td>
                                <td>1</td>
                                <td>ashishkulshrestha.ece@jecrc.ac.in</td>
                                <td>ashish@example.com</td>
                            </tr>
                            <tr>
										<td><img src="../images/ec/faculty/Pravin Kumar Sharma.jpg "
                                                     alt="Pravin Kumar Sharma">
                                </td>
                                <td>Mr. Pravin Kumar Sharma</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>5.5</td>
                                <td></td>
                                <td>pravinkumarsharma.ece@jecrc.ac.in </td>
                                <td>praveen@example.com</td>
								</tr>
								<tr>
								                  <td><img src="../images/ec/faculty/Ashutosh.jpg "
                                                     alt="ASHUTOSH SHARMA">
                                 <td>Mr.Ashutosh Sharma</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>8</td>
                                <td>
								</td>
                                <td>ashutoshsharma.ece@jecrc.ac.in</td>
                                <td>ashutosh@example.com</td>
								</tr>
								<tr>
								<td><img src="../images/ec/faculty/Neha.jpg "
                                                     alt="Ms.Neha Singh">
                                </td>
                                <td>Ms. Neha Singh</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>9</td>
                                <td></td>
                                <td>nehasingh.ece@jecrc.ac.in</td>
                                <td>Neha@test.com</td>
                            </tr>
							<tr>
									<td><img src="../images/ec/faculty/Raj Kumar Jain.jpg "
                                                     alt="Raj Kumar Jain">
                                </td>
                                <td>Mr. Raj Kumar Jain</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>6</td>
                                <td></td>
                                <td>rajkumarjain.ece@jecrc.ac.in</td>
                                <td>rajkumar@example.com</td>
								 </tr>
							<tr>
								 <td><img src="../images/ec/faculty/Vikash Mishra.jpg "
                                                     alt="Vikash Mishra">
                                </td>
                                <td>Mr. Vikash Mishra</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>6</td>
                                <td></td>
                                <td>vikashmishra.ece@jecrc.ac.in</td>
                                <td>vikash@example.com</td>
								</tr>
								<tr>
								 <td><img src="../images/ec/faculty/Venimadhav sharma.jpg "
                                                     alt="Venimadhav sharma">
                                </td>
                                <td>Mr. Venimadhav sharma</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>8.5</td>
                                <td></td>
                                <td>venimadhavsharma.ece@jecrc.ac.in</td>
                                <td>veni@example.com</td>
								</tr>
								<tr>								
								 <td><img src="../images/ec/faculty/Mangilal.jpg "
                                                     alt="Mr.Mangilal">
                                </td>
                                <td>Mr. Mangilal</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>8.5</td>
                                <td>0.5</td>
                                <td>mangilal.ece@jecrc.ac.in </td>
                                <td>mangilal@example.com</td>
								</tr>
								 <tr>
								 
								 <td><img src="../images/ec/faculty/Sidharth Chaturvedy.jpg "
                                                     alt="Sidharth Chaturvedy">
                                </td>
                                <td>Mr. Sidharth Chaturvedy</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>5</td>
                                <td>10</td>
                                <td>sidharth.ece@jecrc.ac.in</td>
                                <td>sidharth@example.com</td>
								</tr>
							<tr>
                                <td><img src="../images/ec/faculty/Honey Agarwal.jpg "
                                                     alt="Honey Agarwal">
                                </td>
                                <td>Mr. Honey Agarwal</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>7</td>
                                <td></td>
                                <td>honeyagarwal.ece@jecrc.ac.in</td>
                                <td>honey@example.com</td>
								</tr>
								<tr>
								<td><img src="../images/ec/faculty/Jitendra.jpg "
                                                     alt="Mr.Jitendra Sharmat">
                                </td>
                                <td>Mr.Jitendra Sharma</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>6</td>
                                <td>2</td>
                                <td>jitendrasharma.ece@jecrc.ac.in</td>
                                <td>jitendra@example.com</td>
								</tr>
								<tr>
								<td><img src="../images/ec/faculty/Sandeep.jpg "
                                                     alt="Mr.Sandeep Kumar Dotya">
                                </td>
                                <td>Mr. Sandeep Kumar Dotya</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>7</td>
                                <td></td>
                                <td>sandeepdotya.ece@jecrc.ac.in</td>
                                <td>sandeep@test.com</td>
								</tr>
							<tr>
                                <td><img src="../images/ec/faculty/Rakesh Kumar kardam.jpg "
                                                     alt="Rakesh Kumar kardam">
                                </td>
                                <td>Mr. Rakesh Kumar Kardam</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>4.5</td>
                                <td></td>
                                <td>rakesh.ece@jecrc.ac.in</td>
                                <td>Rakesh@example.com</td>
								</tr>
								<tr>
								<td><img src="../images/ec/faculty/Naresh.jpg "
                                                     alt="Mr.R. Naresh Kumar">
                                </td>
                                <td>Mr.R. Naresh Kumar</td>
                                <td>Assistant professor</td>
                                <td>M.S</td>
                                <td>5</td>
                                <td>2.5</td>
                                <td>nareshkumar.ece@jecrc.ac.in</td>
                                <td>Naresh@edu.in</td>
								</tr>
                            <tr>
                                <td><img src="../images/ec/faculty/ankur.jpg "
                                                     alt="ANKUR GANGWAR">
                                </td>
                                <td>Mr.Ankur Gangwar</td>
                                <td>Assistant Professor</td>
                                <td>M.TECH</td>
                                <td>6</td>
                                <td></td>
                                <td>ankurgangwar.ece@jecrc.ac.in</td>
                                <td>jpr@example.com</td>
								 </tr>
							<tr>
                               
                                                          <td><img src="../images/ec/faculty/Lokesh Sharma.jpg "
                                                     alt="Lokesh Kumar Sharma">
                                </td>
                                <td>Mr. Lokesh Kumar Sharma</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>15</td>
                                <td>1</td>
                                <td> lokeshsharma.ece@jecrc.ac.in</td>
                                <td>Lokesh@example.com</td>
								</tr>
							<tr>
                                <td><img src="../images/ec/faculty/Shivam Upadhyay.jpg "
                                                     alt="Shivam Upadhyay">
                                </td>
                                <td>Ms. Shivam Upadhyay</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>4</td>
                                <td></td>
                                <td>Shivam.ece@jecrc.ac.in</td>
                                <td>shivam@example.com</td>
								</tr>
								<tr>
								 <td><img src="../images/ec/faculty/Deepmala.jpg "
                                                     alt="Ms.Deepmala Kulshreshth">
                                </td>
                                <td>Ms. Deepmala Kulshreshth</td>
                                <td>Lecturer</td>
                                <td>B.Tech</td>
                                <td>3</td>
                                <td></td>
                                <td>deepmala.ece@jecrc.ac.in </td>
                                <td>Deepmala123@example.com</td>
								</tr>
								<tr>
								<td><img src="../images/ec/faculty/Bhoopesh.jpg "
                                                     alt="Mr.Bhoopesh Kumar Kumawat">
                                </td>
                                <td>Mr. Bhoopesh Kumar Kumawat</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>11.5</td>
                                <td>1.5</td>
                                <td>bhoopesh.ece@jecrc.ac.in</td>
                                <td>Bhoopesh@example.com</td>
								</tr>
							<tr>
                                <td><img src="../images/ec/faculty/devesh.jpg "
                                                     alt="Devesh Gupta">
                                </td>
                                <td>Mr.Devesh Gupta</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>10</td>
                                <td>1</td>
                                <td>Deveshgupta.ece@jecrc.ac.in</td>
                                <td>deveshgupta@example.com</td>
								</tr>
								<tr>
								 <td><img src="../images/ec/faculty/Teena Sharma.jpg "
                                                     alt="Teena Sharma">
                                </td>
                                <td>Ms. Teena Sharma</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>7</td>
                                <td></td>
                                <td>teenasharma.ece@jecrc.ac.in</td>
                                <td>teena@example.com</td>
								</tr>
															<tr>
							         <td><img src="../images/ec/faculty/ashish.jpg "
                                                     alt="ashish sharma">
                                </td>
								          <td>Mr.Ashish Sharma</td>
                                <td>Assistant Professor</td>
                                <td>M.tech</td>
                                <td>7</td>
                                <td></td>
                                <td>ashishsharma.ece@jecrc.ac.in</td>
                                <td>jecrcamd.com</td>
								</tr>		
								<tr>
                                <td><img src="../images/ec/faculty/preeti Barot.jpg "
                                                     alt="Pareet Barot">
                                </td>
                                <td>Ms. Preeti Barot</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>7</td>
                                <td></td>
                                <td>preetibarot.ece@jecrc.ac.in</td>
                                <td>preeti@example.com</td>
								</tr>
							<tr>
                                <tr>
                                <td><img src="../images/ec/faculty/Deepak sankhala.jpg "
                                                     alt="Deepak sankhala">
                                </td>
                                <td>Mr.Deepak Sankhala</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>8</td>
                                <td></td>
                                <td>Deepak.ece@jecrc.ac.in</td>
                                <td>deepak@example.com</td>
                            </tr>
								<tr>
								<td><img src="../images/ec/faculty/Mohit.jpg "
                                                     alt="Mr.Mohit Kumar Rajput">
                                </td>
                                <td>Mr.Mohit Kumar Rajput</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>5</td>
                                <td></td>
                                <td>mohitrajput.ece@jecrc.ac.in</td>
                                <td>Mohit@edu.in</td>
								</tr>
											   <tr>
                                <td><img src="../images/ec/faculty/Shweta.jpg "
                                                     alt="Shweta Sharda">
                                </td>
                                <td>Ms. Shweta Sharda</td>
                                <td>Assistant professor</td>
                                <td>M.TECH</td>
                                <td>11</td>
                                <td>2</td>
                                <td>shwetasharda.ece@jecrc.ac.in</td>
                                <td>shweta@example.com</td>
								</tr>
								<tr>
								<td><img src="../images/ec/faculty/Kiriti.jpg "
                                                     alt="Ms.Kriti Manish Sharda">
                                </td>
                                <td>Ms.Kriti Manish Sharda</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>13</td>
                                <td>4</td>
                                <td>kritisharda.ece@jecrc.ac.in</td>
                                <td>Kriti@example.com</td>
																</tr>
								<tr>
													<td><img src="../images/ec/faculty/Yogita.jpg "
                                                     alt="Mr. Yogita">
                                </td>
                                <td>Ms. Yogita</td>
                                <td>Assistant professor</td>
                                <td>M.Tech</td>
                                <td>1</td>
                                <td></td>
                                <td>yogita.ece@jecrc.ac.in</td>
                                <td>yogita@test.com</td>
                            
                           </tr>
						   <tr>
                                <td><img src="../images/ec/faculty/aapurva.jpg "
                                                     alt="AAPURVA KAUL">
                                </td>
                                <td>Ms. AAPURVA KAUL</td>
                                <td>Assistant Professor </td>
                                <td>M.TECH </td>
                                <td>1</td>
                                <td></td>
                                <td>aapurvakaul.ece@jecrc.ac.in</td>
                                <td>test@example.com</td>
                                 	</tr>
								<tr>
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

