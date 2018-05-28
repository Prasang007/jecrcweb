<?php
date_default_timezone_set("Asia/calcutta");
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
    <head>
        <title>Top CBSE Private School | Best CBSE School in India – Mount Litera</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="mlzs, mount litera zee school, private school in muzaffarpur, cbse school in muzaffarpur,best cbse school in bihar,best schools in muzaffarpur cbse,top cbse schools in india,secondary school in muzaffarpur,middle school in muzaffarpur." />
        <meta name="description" content="Among CBSE School in India Mount Litera is the fastest growing chain of K12 CBSE Schools. So be a part MLZS top primary, Middle, secondary private school in india." />
        <link rel="shortcut icon" href="favicon.ico">  
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
        <!-- Global CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">   
        <!-- Plugins CSS -->    
        <link rel="stylesheet" href="font-awesome/css/font-awesome.css">

        <!-- Theme CSS -->  
        <link rel="stylesheet" href="css/styles.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <style>
            .error-msg{

                color: #fff;
                background-color: #d9534f;
                border-color: #d43f3a;
                padding: 10px;
                text-align: center;
                font-size: inherit;
            }

            .success-msg{

                color: #fff;
                background-color: #5cb85c;
                border-color: #4cae4c;
                padding: 10px;
                text-align: center;
                font-size: inherit;

            }
        </style>
    </head> 

    <body class="news-page">
        <div class="wrapper">
            <!-- ******HEADER****** --> 
            <?php include 'modules/header.php'; ?>
            <!--//header-->

            <!-- ******NAV****** -->
            <?php include 'modules/navbar.php'; ?>
            <!--//main-nav-->

            <!-- ******CONTENT****** --> 
            <div class="content container">

                <header class="page-heading clearfix">
                    <h1 class="heading-title">Contact</h1>
                    <hr/>
                </header> 
                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-md-8 col-sm-7  page-row">                            
                            <h3 class="title">Get in touch</h3>
                            <p>We’d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut erat magna. Aliquam porta sem a lacus imperdiet posuere. Integer semper eget ligula id eleifend. </p>
                            <?php
                            if (isset($_POST["sendMsg"])) {

                                if (!empty($_POST["fullName"]) && !empty($_POST["email"]) && !empty($_POST["phone"]) && !empty($_POST["message"])) {


                                    $emailPattern = "/^\w+((-|\.)\w+)*\@[A-Za-z\d]+((-|\.)[A-Za-z\d]+)*\.[a-zA-Z\d]+$/x";
                                    $phonePattern = "/^\d*$/";
                                    if (!preg_match($emailPattern, $_POST["email"])) {

                                        $Error = "Invalid Email Id...";
                                    } else if (!preg_match($phonePattern, $_POST["phone"])) {

                                        $Error = "Invalid Phone No..";
                                    } else {

                                        $name = preg_replace("[^ a-zA-Z0-9]", "", $_POST["fullName"]);
                                        $email = $_POST["email"];
                                        $phone = $_POST["phone"];
                                        $message = $_POST["message"];

                                        try {

                                            include "classes/DatabaseConnect.php";

                                            $connObj = new DatabaseConnect();

                                            $conn = $connObj->connect();

                                            $sql = "INSERT INTO " . CONTACT . "(name, phone, email, message, ip, dateTime) VALUES(:name, :phone, :email, :message, :ip, :dateTime)";

                                            $stmt = $conn->prepare($sql);

                                            $stmt->bindValue(":name", $name, PDO::PARAM_STR);
                                            $stmt->bindValue(":email", $email, PDO::PARAM_STR);
                                            $stmt->bindValue(":phone", $phone, PDO::PARAM_STR);
                                            $stmt->bindValue(":message", $message, PDO::PARAM_STR);
                                            $stmt->bindValue(":ip", $_SERVER["REMOTE_ADDR"], PDO::PARAM_STR);
                                            $stmt->bindValue(":dateTime", date('Y-m-d H:i:s'), PDO::PARAM_STR);

                                            if ($stmt->execute()) {

                                                $success = "Your message has been recorded.. We will contact you soon..";
                                            }
                                        } catch (PDOException $e) {

                                            echo $e->getMessage();
                                        }
                                    }
                                }
                            }
                            ?>

                            <form method="post" action="">
                                <div class="form-group" id="error">
                                    <?php if (isset($Error)) { ?>

                                        <p class="error-msg"><?php echo $Error; ?></p>
                                        <?php
                                    } else if (isset($success)) {
                                        ?>
                                        <p class="success-msg"><?php echo $success; ?></p>
                                    <?php } ?>
                                </div>
                                <div class="form-group name">
                                    <label for="name">Name<span class="required">*</span></label>
                                    <input id="name" type="text" name="fullName" class="form-control" placeholder="Enter your name">
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input id="email" type="email" name="email" class="form-control" placeholder="Enter your email">
                                </div><!--//form-group-->
                                <div class="form-group phone">
                                    <label for="phone">Phone<span class="required">*</span></label>
                                    <div class="input-group">
                                        <div class="input-group-addon">+91</div>
                                        <input id="phone" type="tel" name="phone" class="form-control" placeholder="Enter your contact number">
                                    </div>
                                </div><!--//form-group-->
                                <div class="form-group message">
                                    <label for="message">Message<span class="required">*</span></label>
                                    <textarea id="message" class="form-control" name="message" rows="6" placeholder="Enter your message here..."></textarea>
                                </div><!--//form-group-->
                                <button type="submit" name="sendMsg" class="btn btn-theme">Send message</button>
                            </form>                  
                        </article><!--//contact-form-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">
                            <section class="widget has-divider">
                                <h3 class="title">Download Prospectus</h3>
                                <p>Donec pulvinar arcu lacus, vel aliquam libero scelerisque a. Cras mi tellus, vulputate eu eleifend at, consectetur fringilla lacus. Nulla ut purus.</p>
                                <a class="btn btn-theme" href="#"><i class="fa fa-download"></i>Download now</a>
                            </section><!--//widget-->   

                            <section class="widget has-divider">
                                <h3 class="title">Postal Address</h3>
                                <p class="adr">
                                    <span class="adr-group">       
                                        <span class="street-address">Mount Litera Zee School</span><br>
                                        <span class="region">Busani Tola, Near Garhara Chowk, Bochaha</span><br>
                                        <span class="postal-code">Muzaffarpur, </span><br>
                                        <span class="country-name">Bihar, India</span>
                                    </span>
                                </p>
                            </section><!--//widget-->     

                            <section class="widget">
                                <h3 class="title">All Enquiries</h3>
                                <p class="tel"><i class="fa fa-phone"></i>Tel: 0800 123 4567</p>
                                <p class="email"><i class="fa fa-envelope"></i>Email: <a href="#">enquires@mlzsmuzaffarpur.in</a></p>
                            </section>   
                        </aside><!--//page-sidebar-->
                    </div><!--//page-row-->
                    <div class="page-row">
                        <article class="map-section">
                            <h3 class="title">How to find us</h3>
                            <div id="map"></div>
                        </article><!--//map-->
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-wrapper--> 
        </div><!--//content-->


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
        <script type="text/javascript">

            function initMap() {
                var myLatLng = {lat: 26.173778, lng: 85.483500};

                // Create a map object and specify the DOM element for display.
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: myLatLng,
                    scrollwheel: true,
                    zoom: 7
                });

                // Create a marker and set its position.
                var marker = new google.maps.Marker({
                    map: map,
                    position: myLatLng,
                    title: 'Mount Lietra Zee School, Muzaffarpur'
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8hqg9T-LQnwfrdX8yymZ1SkXyixjtgBI&callback=initMap">
        </script>
    </body>
</html> 

