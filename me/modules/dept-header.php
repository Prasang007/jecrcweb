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
                <li class="<?php if (preg_match("/index/", $currentPage)) echo "active "; ?>nav-item"><a href="index.php" class="dropdown-toggle" data-delay="0" aria-expanded="true" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">About Us <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu animated fadeInRight" role="menu">
                     <!--  <li><a href="aboutdept.php">About Department</a></li>
                        <li><a href="hoddesk.php">HOD's Desk</a></li>//navbar-header--> 
                    </ul>

                </li>
                <li class="<?php if (preg_match("/admission/", $currentPage)) echo "active "; ?>nav-item dropdown">
                    <a href="#" class="dropdown-toggle" data-delay="0" aria-expanded="true" data-toggle="dropdown" data-hover="dropdown" data-close-others="false" >CO, PO &PEO<i class="fa fa-angle-down"></i> </a>
                    <ul class="dropdown-menu animated fadeInRight" role="menu">
                        <li><a href="../me/PEO.php">Program Education Objective</a></li>
                     
                        <li><a href="../me/po.php">PO’s</a></li>
                        <li><a href="../me/co.php">CO’s (Odd and Even Semester)</a></li>
                        <li><a href="../me/pocomap.php">PO and CO mapping</a></li>

                    </ul>


                </li>
                <li class="<?php if (preg_match("/events/", $currentPage)) echo "active "; ?>nav-item">
                    <a href="#" class="dropdown-toggle" data-delay="0" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Tech. Events<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu  animated fadeInRight" role="menu">
                        <li><a href="#">Tech Event1</a></li>
                        <li><a href="#">Tech Event2</a></li>
                        <li><a href="#">Tech Event3</a></li>
                    </ul>

                </li>
                <li class="<?php if (preg_match("/news/", $currentPage)) echo "active "; ?>nav-item">
                    <a href="#" class="dropdown-toggle" data-delay="0"data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Infrastructure  <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu  animated fadeInRight" role="menu">
                        <li><a href="laboratories.php">Laboratories</a></li>
                        <li><a href="library.php">Library</a></li>
                        <li><a href="lectureroom.php">Lecture room </a></li>
                    </ul>

                </li>
                <li class="<?php if (preg_match("/events/", $currentPage)) echo "active "; ?>nav-item dropdown">
                    <a href="#" class="dropdown-toggle" data-delay="0" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Research <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu animated fadeInRight" role="menu" >
                        <li><a href="research.php">Research & Journals</a></li>
                        <li><a href="workshop.php">Workshop  / Seminar</a></li>
                        <li><a href="projects.php">Projects</a></li>
                        <li><a href="fdp.php">FDP</a></li>
                         <li><a href="books.php">Books</a></li>
                    </ul>
<!-- data-toggle="dropdown" role="button" aria-expanded="false" -->

                </li>
                <li class="<?php if (preg_match("/about/", $currentPage)) echo "active "; ?>nav-item"><a href="#" class="dropdown-toggle" data-delay="0" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Our Team<i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu  animated fadeInRight" role="menu">
                        <li><a href="faculties	.php">Faculties</a></li>
  <li><a href="technician.php">Technical Staff</a></li>
                    </ul>

                </li>

                <li class="<?php if (preg_match("/about/", $currentPage)) echo "active "; ?>nav-item"><a href="placements.php" class="dropdown-toggle" data-delay="0" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Placements <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu  animated fadeInLeft" role="menu">
                        <li><a href="../aboutplacements.php">About Placements</a></li>
                        <li><a href="../listofrecruiters.php">List Of Recruiters</a></li>
                        <li><a href="../listofselections.php">List Of Selections</a></li>
                        <li><a href="../gallery.php">Gallery</a></li>
                    </ul>

                </li>
            </ul><!--//nav-->
        </div><!--//navabr-collapse-->
    </div><!--//container-->
</nav>
