    <?php
      if (!isset($newsfeed_large)){
        $newsfeed_large = false;
      }
    ?>
    
    <!-- Section News -->
    <section id="section-news" class="bg-white <?php if($page == "Home") echo "section-padding";?>">

      <div class="grid-container"> 
        <div class="grid-x align-center">
          <div class="medium-11 cell">

            <!-- News Nav -->
            <div class="grid-container"> 
              <div class="grid-x align-middle">
                <div class="large-8 cell">
                  <span class="section-title">News</span>
                  <h2>THE WORD</h2>
                </div>
                <div class="large-4 cell">
                  <nav class="news-category-menu">
                    <ul class="menu">
                      <li class="active"><a href="#">Updates</a></li>
                      <li><a href="#">Social</a></li>
                    </ul>
                  </nav>
                </div>
              </div>      
            </div>
            <!-- /News Nav -->


            <?php include ('includes/news-sliders.php'); ?>

            <?php include ('includes/news-feed-medium.php'); ?>

            <?php 
              if ($newsfeed_large == true):
                include('includes/news-feed-large.php');
                include ('includes/news-feed-medium.php');
              endif;
            ?>

          </div>
        </div>
      </div>
    </section>
    <!-- /Section News -->