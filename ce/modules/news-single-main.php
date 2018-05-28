<?php
if (isset($_GET["newsId"])) {

    date_default_timezone_set("Asia/calcutta");

    include 'classes/DatabaseConnect.php';
    include 'functions/time.display.function.php';


    $id = (int) preg_replace("[^0-9]", "", $_GET["newsId"]);

    $connObj = new DatabaseConnect();

    $conn = $connObj->connect();

    $sql = "SELECT * FROM " . NEWS . " WHERE newsId = :id";

    $stmt = $conn->prepare($sql);

    $stmt->bindValue(":id", $id, PDO::PARAM_INT);

    $stmt->execute();

    $news = $stmt->fetch(PDO::FETCH_ASSOC);

    /*
      echo "<pre>";
      print_r($news);
      echo "</pre>";
     */

    if ($news) {
        ?>
        <header class="page-heading clearfix">
            <h1 class="heading-title"><?php echo $news["title"]; ?></h1>
            <hr/>
        </header> 
        <div class="page-content">
            <div class="row page-row">
                <div class="news-wrapper col-md-8 col-sm-7">                         

                    <article class="news-item">
                        <p class="meta text-muted">By: <a href="#">Admin</a> | Posted on: <?php echo DisplayTime($news["postDateTime"]); ?></p>
                        <p class="featured-image"><img class="img-responsive" src="images/news/<?php echo $news["thumbnail"]; ?>" alt="" /></p>
                        <?php echo $news["details"]; ?>                     
                    </article><!--//news-item-->
                </div><!--//news-wrapper-->
                <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1 col-xs-12">                    

                </aside>
            </div><!--//page-row-->
        </div><!--//page-content-->

        <?php
    }
}
?>
