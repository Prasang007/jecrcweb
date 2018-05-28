<?php

$sql_query = "SELECT SQL_CALC_FOUND_ROWS * FROM " . NEWS . " ORDER BY newsId DESC LIMIT 0,3";


$newsObj = new FetchDataMain();

$result = array();

$result = $newsObj->fetchData($sql_query);

/*
  echo "<pre>";
  print_r($result);
  echo "</pre>";

 */
?>

<section class="news">
    <h1 class="section-heading text-highlight"><span class="line">Latest News</span></h1>     
    <div class="carousel-controls">
        <a class="prev" href="#news-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
        <a class="next" href="#news-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
    </div><!--//carousel-controls--> 
    <div class="section-content clearfix">
        <div id="news-carousel" class="news-carousel carousel slide">
            <div class="carousel-inner">
                <div class="item active"> 
                    <?php
                    if ($result["rows"]) {

                        foreach ($result["rows"] as $news) {
                            ?>

                            <div class="col-md-4 news-item">
                                <h2 class="title"><a href="news-single.php?newsId=<?php echo $news["newsId"]; ?>&amp;newsTitle=<?php echo $news["title"]; ?>"><?php echo $news["title"]; ?></a></h2>
                                <img class="thumb" src="images/news/<?php echo $news["thumbnail"]; ?>"  width="100" height="100" alt="" />
                                <?php echo substr($news["details"], 0, 100) . "..."; ?>
                                <a class="read-more" href="news-single.php?newsId=<?php echo $news["newsId"]; ?>&amp;newsTitle=<?php echo $news["title"]; ?>">Read more<i class="fa fa-chevron-right"></i></a>                
                            </div><!--//news-item-->


                            <?php
                        }
                    }
                    ?>

                </div><!--//item-->
                <div class="item"> 
                    <?php
                    $sql_query = "SELECT SQL_CALC_FOUND_ROWS * FROM " . NEWS . " ORDER BY newsId DESC LIMIT 3,3";


                    $newsObj = new FetchDataMain();

                    $result = array();

                    $result = $newsObj->fetchData($sql_query);

                    /*
                      echo "<pre>";
                      print_r($result);
                      echo "</pre>";

                     */

                    foreach ($result["rows"] as $news) {
                        ?>

                        <div class="col-md-4 news-item">
                            <h2 class="title"><a href="news-single.php?newsId=<?php echo $news["newsId"]; ?>&amp;newsTitle=<?php echo $news["title"]; ?>"><?php echo $news["title"]; ?></a></h2>
                            <img class="thumb" src="images/news/<?php echo $news["thumbnail"]; ?>"  width="100" height="100" alt="" />
                            <?php echo substr($news["details"], 0, 100) . "..."; ?>
                            <a class="read-more" href="news-single.html">Read more<i class="fa fa-chevron-right"></i></a>                
                        </div><!--//news-item-->


                        <?php
                    }
                    ?>

                </div><!--//item-->
            </div><!--//carousel-inner-->
        </div><!--//news-carousel-->  
    </div><!--//section-content-->     
</section>