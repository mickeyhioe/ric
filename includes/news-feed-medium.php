<!-- News Container -->
<div class="grid-container">
  <!-- News Feeds-->
  <div class="news-medium grid-x grid-padding-x">

    <?php
      $news = array(
        array(
          'title'  => "CANADIAN BIOFUELS FACILITIES",
        ),
        array(
          'title'  => "TOTAL ECONOMIC IMPACT ASSESSMENT"
        ),
        array(
          'title'  => "LIFECYCLE ANALYSIS CANOLA BIODIESEL"
        ),
        array(
          'title'  => "CONFERENCE BOARD OF CANADA"
        ),
        array(
          'title'  => "RENEWABLE FUEL STANDARDS WITHIN A LOW..."
        ),
        array(
          'title'  => "ETHANOL’S POTENTIAL CONTRIBUTION TO CANADA"
        ),
      );

      foreach(array_keys($news) as $num):
        $title = $news[$num]['title'];
    ?>
    <!-- News Item -->
    <div class="news-medium-item large-4 medium-6 cell">
      <a href="single.php" class="img" style="background-image: url(https://picsum.photos/1200/800?image=<?php echo rand(600, 1000)?>);"></a>
      <div class="news-content">                
        <div class="news-meta"><span class="category">Report</span> <span class="date">04.2018</span></div>
        <h3><a href="single.php"><?php echo $title;?></a></h3>
      </div>
    </div>
    <!-- /News Item -->
      <?php endforeach; ?>

  </div>
  <!-- /News Feeds -->

</div>
<!-- News Container -->