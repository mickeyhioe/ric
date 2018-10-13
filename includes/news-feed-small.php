<?php
  $news = array(
    array(
      'cat'   => "Press Release",
      'date'  => "07.2018",
      'title' => "GORD MILLER: STAYING THE COURSE",
      'image' => rand(800,1000),
    ),
    array(
      'cat'   => "Report",
      'date'  => "06.2018",
      'title' => "IMPACT ASSESSMENT OF CLEAN FUEL",
      'image' => rand(800,1000),
    ),
    array(
      'cat'   => "Report",
      'date'  => "05.2018",
      'title' => "ECOFISCAL REPORT CORRECTION",
      'image' => rand(800,1000),
    ),
  );
  
  foreach(array_keys($news) as $num):
    $title = $news[$num]['title'];
    $date = $news[$num]['date'];
    $cat = $news[$num]['cat'];
    $image = $news[$num]['image'];
?>

  <!-- News Small Item -->
  <div class="news-small-item">
    <div class="news-small-item-inner">
      <a class="img" style="background-image: url(https://picsum.photos/400/400?image=<?php echo $image;?>);"></a>
      <div class="news-content">                
        <div class="news-meta">
          <span class="category"><?php echo $cat;?></span>
          <span class="date"><?php echo $date;?></span>
        </div>
        <h3><a href="single.php"><?php echo $title;?></a></h3>
      </div>
    </div>
  </div>
  <!-- /News Small Item -->

<?php endforeach; ?>