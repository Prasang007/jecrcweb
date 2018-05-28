<?php
$sql_query = "SELECT SQL_CALC_FOUND_ROWS * FROM " . EVENTS . " ORDER BY date DESC LIMIT 0,7";


$eventObj = new FetchDataMain();

$result = array();

$result = $eventObj->fetchData($sql_query);

/*
  echo "<pre>";
  print_r($result);
  echo "</pre>";

 */
?>

<section class="events">
    <h1 class="section-heading text-highlight"><span class="line">Events</span></h1>
    <div class="section-content">
        <?php
        if ($result) {

            foreach ($result["rows"] as $event) {
                ?>
                <div class="event-item">
                    <p class="date-label">
                        <span class="month"><?php echo monthName($event["date"]); ?></span>
                        <span class="date-number"><?php echo dateNumeric($event["date"]); ?></span>
                    </p>
                    <div class="details">
                        <h2 class="title"><?php echo $event["eventName"]; ?></h2>
                        <p class="time"><i class="fa fa-clock-o"></i><?php echo timeDisplay($event["stime"]) . " - " . timeDisplay($event["etime"]); ?></p>
                        <p class="location"><i class="fa fa-map-marker"></i><?php echo $event["place"]; ?></p>                            
                    </div><!--//details-->
                </div><!--event-item-->  

            <?php }
        } ?>

    </div><!--//section-content-->
</section>