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
                                <td>EDC LAB</td>
                                <td>20</td>
									<td align="left">P-N junction diode apparatus Zener </br>
									diode apparatus Transistor characteristics apparatus .</br>
									Clipping & Clamping circuit apparatus. </br>
									Half wave, Full wave bridge rectifier .</br>
									Common collector transistor amplifier FET characteristics. Scientech 50Mhz digital storage </br>
									Digital function generator 2Mhz. Digital Function generator 2Mhz Two stage R-C coupled amplifier kit.</br>
									</td>
							</tr>  
							<tr>
                                <td>2.</td>
                                <td>III</td>
                                <td>Measurement & Instrumentation lab</td>
                                <td>20</td>
								 <td>Wein's Bridge (Capacity)"</br>
									"Anderson's Bridge"</br>
									Maxwell Inductance Bridge </br>
									Wein's Bridge (frequency)</br>
									Ultrasonic digital distance  meter</br>
									RTD Trainer kit</br>
									Single Phase Energy Meter LCR-Q Bridge .</br>
									Solar Educational Kit Digital Earth Tester</br>
								</td>
							</tr>         
							<tr>
                                <td>3.</td>
                                <td>III</td>
                                <td>Electronic Instrumentation Workshop</td>
                                <td>20</td>
									<td >Push Pull Power Amplifier Kit</br>
									Voltmeter, Voltmeter, Two Stage R-C Coupled Amplifier</br>
									Voltage Regulator, Voltage Multiplier</br>
									Opamp Designer Trainer Kit</br>
									Bootstrap  Sweep Generator</br>
									Bjt Trainer Kit , Attenuator &Equaliser CRO</br>
									Dual Trace With Ct CRO</br>
									Dual Trace With Ct &FG</br>
									DECADE CAPACITANCE BOX</br>
									Decade Resistace Box</br>
									Decade Inductance Box, Digital Multimeter</br>
									Emitter Follower , Function Generator </br>
									Function Generator With Frequency Counter</br>
									FET Trainer Kit</br>
									Rectifier Trainer Kit</br>
									Oscillator Trainer Kit</br>
									Opamp Charcterstic Trainer Kit</br>
									P-N Diode & Zener Diode Trainer Kit, Power Supply.</br>										
									</td>
							</tr>         
							<tr>
                                <td>4.</td>
                                <td>I</td>
                                <td>Digital Electronics Lab</td>
                                <td>20</td>
									<td >Scientech  Digital Kit(5),Digital Trainer Kit(10) </br>
									</td>
									</tr>
									<tr>
									<td>5.</td>
                                <td>IV</td>
                                <td>Analog Electronics Lab</td>
                                <td>20</td>
								<td> Series Voltage Regulator</br>
									 Shunt Voltage Regulator</br>
									Wein's Bridge Oscillator</br>
									FET Common Source Amp. </br>
									Push Pull Amp</br>
									Phase Shift Oscillator</br>
									Hartley Colpitt Oscillator</br>
									UJT Characteristics, UJT Relaxation</br>
									MOSFET, CMOS IC, Digital Storage CRO,</br>
									Function Generator(6),Cro(6)</br>																	
									</td>
							</tr>         
							<tr>
                                <td>6.</td>
                                <td>IV</td>
                                <td>communication lab 1st</td>
                                <td>20</td>
									<td >Sampling & Reconstruction Trainer</br>
									Data Formatting & Carrier Modulation Transmitter </br>
									TDM Pulse Code Modulation Receiver</br>
									TDM Pulse Code Modulation Transmitter</br>
									Delta, Adaptive Modulation & Demod. </br>
									PAM, PPM, PWM Mod. & Demod.</br> 
									Transmission Line Trainer</br> 
									 CRO, Digital Storage CRO 150 MHz,</br>
									 FM modulation & Demod</br>
									DSB/SSB AM Mod.Tx</br>
									DSB/SSB AM Demod. </br>
									Rx, Power Project Board</br>
									TDM PA Mod/Demodulator</br>
									Dual Power Supply, Data Formatting & carrier modulation </br>
									Receiver Trainer, function Generator</br>															
									</td>
							</tr>         
							<tr>
                                <td>7.</td>
                                <td>IV</td>
                                <td>DIGITAL COMMUNICATION LAB </td>
                                <td>20</td>
									<td >Pcm</br>
									  dpcm, cvsd modulation & demodulation trainer </br>
									Msk modulation & demodulation</br>
									Trainer Delta ,adeptive delta </br>
									 sigma delta Mod. & Demod trainer</br>
									 Cyclic code experimental setup Block code encoder </br>
									 Block code decoder Ask, Fsk Bpsk</br>
									 Dbpsk experimental Setup Tdm-Pam trainer kit</br>
                                     Sampling & Reconstruction trainer</br>
									 Data Formatting and Carrier modulation</br>
									 Data formatting & carrier Demodulation</br>
									 4 channel Tdm-Pcm  transmitter Receiver</br>
                                     Qpsk, Oqpsk, dqpsk modulation & demodulation trainer</br>					 
                                     </td>
							</tr>         
							<tr>
                                <td>8.</td>
                                <td>IV</td>
                                <td>Microprocessor Lab</td>
                                <td>20</td>
									<td >Microprocessor kit 8085(15)</br>
									</td>
							</tr>         
							<tr>
                                <td>9.</td>
                                <td>I</td>
                                <td>MICROWAVE LAB </td>
                                <td>20</td>
									<td >klystrone power supply </br>
								    Gunn power supply Microwave test bench(klystron), </br>
									Microwave Spectrum analyser </br>
									Vswr meter Solid state klysrone power supply CRO 150 mhz, </br>
									Microwave test bench(klystro Microwave test bench (gunn diode)</br>
									Microwave test bench  (s band)</br>
									</td>
							</tr>         
							<tr>
                                <td>10.</td>
                                <td>I</td>
                                <td>ANTENNA AND WIRELESS COMMUNICATION </td>
                                <td>20</td>
									<td >GPS TRAINER KIT</br>
									RADAR TRAINER KIT Cro dual channel</br>
									function generator, cdma direct sequence spread </br>
									spectrum (dsss) trainer kit, antenna trainer lab ats40,</br>
									antenna trainer ats2000, satellite </br>
									communication trainer kit, antenna digital rf tx ats200it, </br>
									antenna digital rf rx ats200it, </br>
									antenna stepper motor controller </br>
								  satellite communication trainer up link tx, </br>
								  satellite communication trainer down link rx,</br>
								  satellite communication trainer,</br>
								  Satellite transponder, fiber optic trainer</br>
								  Fiber optic connectors  kit display board, </br>
								  fiber optic cable sample kit display board</br>
								  laser trainer model lt2506, voice communicatioin using dsss </br>
								  </td>
							</tr>         
							<tr>
                                <td>11.</td>
                                <td>I</td>
                                <td>Electronic Engineering Design Lab </td>
                                <td>20</td>
									<td >OpAmp Trainer Kit,</br>
									Dual Power Supply,</br>
									Power Project Board </br>
									Power Project Board</br>
									3-MHz Function Generator, </br>
								    30 MHz 4 Trace Oscilloscope,</br>
									150MHz DSO, 20MHz CRO</br>
									</td>
									</tr>
									<tr>
									<td>12.</td>
                                <td>I</td>
                                <td>ESD Lab </td>
                                <td>20</td>
									<td >MICROCONTROLLER KIT(5) </br>
									LOGITECH KEYBOARD</br>							
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

