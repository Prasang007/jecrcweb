<?php
$currentPage = $_SERVER["PHP_SELF"];
?>
<nav class="main-nav " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button><!--//nav-toggle-->
        </div><!--//navbar-header-->
        <div class="navbar-collapse collapse" id="navbar-collapse">
            <ul class="nav nav-justified">
                <li class="<?php if (preg_match("/index/", $currentPage)) echo "active "; ?>nav-item"><a href="index.php">Home</a></li>
                <li class="<?php if (preg_match("/admission/", $currentPage)) echo "active "; ?>nav-item dropdown">
                    <a href="#" class="dropdown-toggle" data-delay="0" aria-expanded="true" data-toggle="dropdown" data-hover="dropdown" data-close-others="false" >Admission <i class="fa fa-angle-down"></i> </a>
                    <ul class="dropdown-menu animated fadeInRight" role="menu">
                        <li><a href="procedure.php">Admission Procedure</a></li>
                        <li><a href="courses-intake.php">Courses & Intake</a></li>
                        <li><a href="fee-structure.php">Fee Structure</a></li>
                        <li><a href="registration-form.php">Registration Form</a></li>
                        <li><a href="aicte-letter.php">AICTE Letter</a></li>
                        <li><a href="fee-letter.php">Fee Letter</a></li>
                        <li><a href="anti-ragging.php">Anti-Ragging</a></li>
                        <li><a href="affidavit-parents.php">Affidavit by Parents</a></li>
                        <li><a href="affidavit-students.php">Affidavit by Students</a></li>

                    </ul>


                </li>
                <li class="<?php if (preg_match("/news/", $currentPage)) echo "active "; ?>nav-item">
                    <a href="#" class="dropdown-toggle" data-delay="0"data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Academics <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu  animated fadeInRight" role="menu">
                        <li><a href="./cs/">Computer Science</a></li>
                        <li><a href="./it/">Information Technology</a></li>
                        <li><a href="./ce/">Civil Engineering</a></li>
                        <li><a href="./ee/">Electrical Engineering</a></li>
                        <li><a href="./ec/">Electronic & Communication Engineering</a></li>
                        <li><a href="./me/">Mechanical Engineering</a></li>
						<li><a href="./me/">Applied Science</a></li>
                    </ul>

                </li>
            <!--    <li class="<?php if (preg_match("/events/", $currentPage)) echo "active "; ?>nav-item dropdown">
                    <a href="#" class="dropdown-toggle" data-delay="0" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Students <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu animated fadeInRight" role="menu" data-toggle="dropdown" role="button" aria-expanded="false">
                        <li><a href="studentsclub.php">Students Club</a></li>
                        <li><a href="leadership.php">Leadership</a></li>
                        <li><a href="campuslife.php">Campus Life</a></li>
                        <li><a href="internships.php">Internships</a></li>
                    </ul>


                </li>-->
                <li class="<?php if (preg_match("/events/", $currentPage)) echo "active "; ?>nav-item">
                    <a href="#" class="dropdown-toggle" data-delay="0" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Events <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu  animated fadeInRight" role="menu">
                      <!--  <li><a href="#">Renaissance</a></li>-->
                        <li><a href="#">Aashayien</a></li>
                        <li><a href="#">Zarurat</a></li>
                        <li><a href="#">Soch</a></li>
                        <li><a href="#">Suhasini</a></li>
						 <li><a href="#">MUN</a></li>
						 <li><a href="#">Cultural Events</a></li>
                    </ul>

                </li>
                <li class="<?php if (preg_match("/about/", $currentPage)) echo "active "; ?>nav-item"><a href="#" class="dropdown-toggle" data-delay="0" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Facilities <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu  animated fadeInRight" role="menu">
                        <li><a href="laboratories.php">Laboratories</a></li>
                        <li><a href="itinfrastructure.php">IT Infrastructure</a></li>
                        <li><a href="centrallibrary.php">Central Library</a></li>
                        <li><a href="canteen.php">Canteen</a></li>
                        <li><a href="transport.php">Transport</a></li>
                        <li><a href="hostels.php">Hostels</a></li>
                        <li><a href="sports.php">Sports</a></li>
                        <li><a href="auditorium.php">Auditorium</a></li>
                    </ul>

                </li>

                <li class="<?php if (preg_match("/about/", $currentPage)) echo "active "; ?>nav-item"><a href="placements.php" class="dropdown-toggle" data-delay="0" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Placements <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu  animated fadeInLeft" role="menu">
                        <li><a href="./cs/placements.php">Department of CS</a></li>
                        <li><a href="./ec/placements.php">Department of ECE</a></li>
                        <li><a href="./me/placements.php">Department of ME</a></li>
						 <li><a href="./it/placements.php">Department of IT</a></li>
						  <li><a href="./ee/placements.php">Department of Electrical</a></li>
						   <li><a href="./ce/placements.php">Department of Civil</a></li>
                      <!--  <li><a href="gallery.php">Gallery</a></li> -->
                    </ul>

                </li>
                <li class="<?php if (preg_match("/about/", $currentPage)) echo "active "; ?>nav-item"><a href="#" class="dropdown-toggle" data-delay="0" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Disclosures <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu  animated fadeInRight" role="menu">
                        <li><a href="#">Financial Statements</a></li>
                        <li><a href="#">Women Cell</a></li>
                        <li><a href="#">Anti-Ragging Cell</a></li>
                        <li><a href="#">Grievience Cell</a></li>
                        <li><a href="#">Promotion Policy</a></li>
                        <li><a href="#">Appraisal Policy</a></li>
                        <li><a href="#">Leave Policy</a></li>
                        <li><a href="#">Financial support</a></li>
                        <li><a href="#">Governing Counselling</a></li>
                    </ul>

                </li>
            </ul><!--//nav-->
        </div><!--//navabr-collapse-->
    </div><!--//container-->
</nav>
