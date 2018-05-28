<?php
date_default_timezone_set("Asia/calcutta");

$start = isset($_GET["start"]) ? (int) $_GET["start"] : 0;
$row = 10;

include 'classes/FetchDataMain.class.php';
include 'functions/time.display.function.php';




$sql_query = "SELECT SQL_CALC_FOUND_ROWS * FROM " . NEWS . " ORDER BY newsId DESC LIMIT $start,$row";


$newsObj = new FetchDataMain();

$result = array();

$result = $newsObj->fetchData($sql_query);

/*
  echo "<pre>";
  print_r($result);
  echo "</pre>";

 */
?>

<header class="page-heading clearfix">
    <h1 class="heading-title">News</h1>
    <hr/>
</header> 

<?php
if (isset($result)) {
    ?>
    <div class="page-content">
        <div class="row page-row">
            <div class="events-wrapper col-md-8 col-sm-7">  

                <?php
                foreach ($result["rows"] as $news) {
                    ?>
                    <article class="news-item page-row has-divider clearfix row news-list">       
                        <figure class="thumb col-md-2 col-sm-3 col-xs-4">
                            <img class="img-responsive" src="images/news/<?php echo $news["thumbnail"]; ?>"  alt="" />
                        </figure>
                        <div class="details col-md-10 col-sm-9 col-xs-8">
                            <h3 class="title"><a href="news-single.php?newsId=<?php echo $news["newsId"];?>&amp;newsTitle=<?php echo $news["title"]; ?>"><?php echo $news["title"]; ?></a></h3>
                            <?php echo substr($news["details"],0,250)."..."; ?>
                            <br/>
                            <a class="btn btn-theme read-more" href="news-single.php?newsId=<?php echo $news["newsId"];?>&amp;newsTitle=<?php echo $news["title"]; ?>">Read more<i class="fa fa-chevron-right"></i></a>
                        </div>
                    </article><!--//news-item-->

        <?php }
    ?>
                <ul class="pagination col-lg-offset-3">
                    <li><?php if ($start > 0) { ?><a href="news.php?start=<?php echo max($start - $row, 0); ?>">Previous</a><?php } ?></li>

                    <li><?php if ($start + $row < $result["totalRows"]) { ?><a href="news.php?start=<?php echo min($start + $row, $result["totalRows"]); ?>">Next</a> <?php } ?></li>
                </ul>

            </div><!--//events-wrapper-->
            <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">                    
              
                
            </aside>
        </div><!--//page-row-->
    </div><!--//page-content-->

<?php } ?>