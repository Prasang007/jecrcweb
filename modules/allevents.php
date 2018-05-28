<?php
date_default_timezone_set("Asia/calcutta");

$start = isset($_GET["start"]) ? (int) $_GET["start"] : 0;
$row = 10;

include 'classes/FetchDataMain.class.php';
include 'functions/time.display.function.php';




$sql_query = "SELECT SQL_CALC_FOUND_ROWS * FROM " . EVENTS . " ORDER BY date DESC LIMIT $start,$row";


$eventObj = new FetchDataMain();

$result= array();

$result = $eventObj->fetchData($sql_query);

/*
  echo "<pre>";
  print_r($result);
  echo "</pre>";

 */
?>

<header class="page-heading clearfix">
    <h1 class="heading-title">Events</h1>
    <hr/>
</header> 

<?php
if (isset($result)) {
    ?>
    <div class="page-content">
        <div class="row page-row">
            <div class="events-wrapper col-md-8 col-sm-7">  
                <?php
                foreach ($result["rows"] as $event) {
                    ?>
                    <article class="events-item page-row has-divider clearfix events-list">
                        <div class="date-label-wrapper col-md-1 col-sm-2">
                            <p class="date-label">
                                <span class="month"><?php echo monthName($event["date"]); ?></span>
                                <span class="date-number"><?php echo dateNumeric($event["date"]); ?></span>
                            </p>
                        </div><!--//date-label-wrapper-->
                        <div class="details col-md-11 col-sm-10">
                            <h3 class="title"><?php echo $event["eventName"]; ?></h3>
                            <p class="meta"><span class="time"><i class="fa fa-clock-o"></i><?php echo timeDisplay($event["stime"]) . " - " . timeDisplay($event["etime"]); ?></span><span class="location"><i class="fa fa-map-marker"></i><a href="#"><?php echo $event["place"]; ?></a></span></p>  
                            <p class="desc"><?php echo $event["eventDetails"]; ?></p>                       
                        </div><!--//details-->
                    </article><!--//events-item-->
                <?php } ?>

                <ul class="pagination col-lg-offset-3">
                    <li><?php if($start > 0){ ?><a href="events.php?start=<?php echo max($start - $row, 0); ?>">Previous</a><?php } ?></li>

                    <li><?php if(  $start + $row < $result["totalRows"]) { ?><a href="events.php?start=<?php  echo min ($start + $row, $result["totalRows"]); ?>">Next</a> <?php } ?></li>
                </ul>

            </div><!--//events-wrapper-->
            <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">                    

            </aside>
        </div><!--//page-row-->
    </div><!--//page-content-->
    <?php
}
?>