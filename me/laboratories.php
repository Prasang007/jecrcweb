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
        <link href='../http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
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
            
            .des table {
				
                max-width: 100%;
            }
            .des th, td{
                text-align: center;
                border:2px solid #c7c2c2;
                padding: 18px;
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

           <!-- <div class="container content">
			                   
								
								
								
								
								
								
								<table class="des">
                            <tr>
                                <th></th>
                                <th>Name of lab</th>
                                <th>Designation</th>
                                <th>Qualification</th>
								 <th>Name of lab</th>
                                <th>Designation</th>
                                <th>Qualification</th>
                                
                            </tr>  </table>
                    <h1 class="section-heading text-highlight"><span class="line">Laboratories</span></h1>
                    <p class="text-justify">
					<ul style="list-style-type:circle">				
						<li><H4>EDC LAB </h4></li>
						<li><H4>Measurement & Instrumentation lab</h4></li>
						<li><H4>Electronic Instrumentation Workshop</h4></li>
						<li><H4>Digital Electronics Lab</h4></li>
						<li><H4>Analog Electronics Lab</h4></li>
						<li><H4>communication lab 1st</h4></li>
						<li><H4>DIGITAL COMMUNICATION LAB</h4></li>
						<li><H4>Microprocessor Lab</h4></li>
						<li><H4>MICROWAVE LAB </h4></li>
						<li><H4>ANTENNA AND WIRELESS </h4></li>
						<li><H4>ANTENNA AND WIRELESS COMMUNICATION</h4></li>
						<li><H4>Electronic Engineering Design Lab</h4></li>	
						<li><H4>ESD Lab</h4></li>
						</ul>
					</p>
					
								<h1 class="section-heading text-highlight"><span class="line">Project Laboratory</span></h1>
                    <p class="text-justify">
					<ol style="list-style-type:1">
						<li><H4>Special lab with systems is provided for carrying out project work</h4></li>
						<li><H4>Every project batch has been allotted with guide in order to pursue with their project work</h4></li>
						<li><H4>Network and internet facilities are provided to students.</h4></li>
						<li><H4>The old project reports and the project models are kept in the project lab premises.</h4></li>
						</p>
                </section>
            </div>-->
			
			
			<div class="container">

                <div class="row page-row"> 
                    <header class="page-heading clearfix">
                        <h1 class="title pull-left">Laboratories</h1>

                    </header>
                    <hr>
                        <table class="des">
                            <tr>
                                <th>Sr. No.</th>
                                <th>Semester</th>
                                <th>Name of Laboratry</th>
                                <th>No of Student per Batch</th>
                                <th>No. of Equipment</th>
                           </tr>
                            <tr>
                                <td>1.</td>
                                <td>I</td>
                                <td>Workshop Practice</td>
                                <td>30</td>
									<td align="left">Lathe Machines</br>
									Shaper</br>
									Milling </br>
									Furnace</br>
									Foundary Plates</br>
									Welding Machines</br>
									Vices</br>
									</td>
							</tr>  
							<tr>
                                <td>2.</td>
                                <td>III</td>
                                <td>Material Science & Testing Lab</td>
                                <td>23</td>
								 <td>Universal Testing Machine"</br>
									"Impact testing Machine"</br>
									Milling </br>
									"Fatique Testing Machine"</br>
									"Hardness TestingMachine"</br>
									Polishinng Machine</br>
									Microscope</br>
								</td>
							</tr>         
							<tr>
                                <td>3.</td>
                                <td>III</td>
                                <td>Basic Mechanical Engineering Lab</td>
                                <td>23</td>
									<td >Swing Machine</br>
									Air Conditioner</br>
									2 Stroke Engine (luna)</br>
									Furnace</br>
									4 Stroke 3 Cylinder Engine</br>
									</td>
							</tr>         
							<tr>
                                <td>4.</td>
                                <td>I</td>
                                <td>Production Practise - I</td>
                                <td>23</td>
									<td >Lathe Machines</br>
									Spot Welding</br>
									Grinding Machine </br>
									Furnace</br>
									Sieve Analysis</br>
									Sand testing Machine</br>
									</td>
							</tr>         
							<tr>
                                <td>5.</td>
                                <td>IV</td>
                                <td>Kinematics of Machine Lab</td>
                                <td>23</td>
									<td >Models</br>
									Trifiler Suspension</br>
									Cam & follower Appartus</br>
									</td>
							</tr>         
							<tr>
                                <td>6.</td>
                                <td>IV</td>
                                <td>Fluid Mechanics Lab </td>
                                <td>23</td>
									<td >Bernollis Appartus</br>
									Metacentric Height Appartus</br>
									Orifice Meter</br>
									Losses through pipe</br>
									flow through Notch</br>
									Pitot Tube</br>
								</td>
							</tr>         
							<tr>
                                <td>7.</td>
                                <td>IV</td>
                                <td>Thermal  Engg Lab -I</td>
                                <td>23</td>
									<td >Models & Cutsections of Various Engines</br>
									Valve timing Appartus</br>
									Models of Boilers With Mountings</br>
									Steering System</br>
									Models for flow of lubrication</br>
									Models of Cooling Systems</br>
									Models of Fuel System and </br>
									Gear System</br>
									</td>
							</tr>         
							<tr>
                                <td>8.</td>
                                <td>V</td>
                                <td>Heat Transfer Lab</td>
                                <td>23</td>
									<td >Thermal Conditivity of Insulating powder</br>
									Thermal Conditivity of metal rod </br>
									Pin Fin Appartus</br>
									Emmisivity Appartus</br>
									Drop Wise & Film Wise Condensation</br>
									Parallel & Counter Flow heat Exchanger</br>
									Stefans Boltzmann Appartus</br>
									</td>
							</tr>         
							<tr>
                                <td>9.</td>
                                <td>V</td>
                                <td>Dynamic of Machine </td>
                                <td>23</td>
									<td >Gyroscope</br>
									Governer</br>
									Journel bearing </br>
									Sliding mesh Automobile gear box</br>
									</td>
							</tr>         
							<tr>
                                <td>10.</td>
                                <td>V</td>
                                <td>Production Practise - II</td>
                                <td>23</td>
									<td >Various measuring tools</br>
									Bevel Protector</br>
									Slip Gauges</br>
									Sine bars</br>
									 3 wire gauge</br>
									Monocromatic  Check Light</br>
									Gear tooth vernier caliper</br>
									</td>
							</tr>
							<tr>
                                <td>11.</td>
                                <td>VI</td>
                                <td>Industial Engineering Lab-I</td>
                                <td>23</td>
								 <td> </td>
									
							</tr>         		
							<tr>
                                <td>12.</td>
                                <td>VI</td>
                                <td>Vibration Lab</td>
                                <td>23</td>
								<td> </td>
									
							</tr>         		
							<tr>
                                <td>13.</td>
                                <td>VII</td>
                                <td>Thermal Engg Lab -II</td>
                                <td>23</td>
									<td >Refrigeration Unit</br>
									Heat Pump</br>
								Air Conditioner Setup</br>
								</td>
							</tr>         		
							<tr>
                                <td>10.</td>
                                <td>V</td>
                                <td>Production Practise - II</td>
                                <td>23</td>
									<td >Various measuring tools</br>
									Bevel Protector</br>
									Slip Gauges</br>
									Sine bars</br>
									 3 wire gauge</br>
									Monocromatic  Check Light</br>
									Gear tooth vernier caliper</br>
									</td>
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
       
    </body>
</html> 

