<?php

// Any Global CONSTANT should be defined here... 

#This file has to be included in databaseConnect.php 

# Change DB_DSN  to your Database Name and host to ->> Your Server host IP Address and Port Name <<- 

# Change DB_USERNAME to your Database Username 

# Change DB_PASSWORD to your  Database Password


define("DB_DSN", "mysql:host=localhost;dbname=jecrc");

define("DB_USERNAME", "root");

define("DB_PASSWORD", "");


#defining all tables name here

define("EVENTS", "events");

define("TESTIMO","testimonials");

define("NEWS", "news");

define("CONTACT", "contact");

define("ADMISSION", "admenquiry");

?>
