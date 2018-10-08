    <?php
      $page_title ="News";
    ?>
    
    <!-- Section News -->
    <section id="section-news" class="section-padding bg-white">

      <div class="grid-container"> 
        <div class="grid-x align-center">
          <div class="medium-11 cell">

            <!-- News Nav -->
            <div class="grid-container"> 
              <div class="grid-x align-middle">
                <div class="large-8 cell">
                  <span class="section-title"><?php echo $page_title; ?></span>
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


            <!-- News Slider Container -->
            <div class="grid-container section-padding section-padding-small">
              <div class="grid-x grid-padding-x">
                
                <div class="large-8 cell">

                  <div class="news-slider-container">
                    
                    <!-- News Slider -->
                    <div class="news-slider">
                    <?php
                      $news = array(
                        array(
                          'title'  => "FEDERAL CLEAN FUEL STANDARD STATEMENT",                    
                          'image'  => rand(800,1000),
                          'copy'   => "Renewable Industries Canada (RICanada) supports the Government of Canada’s decision to develop regulations for a Federal Clean Fuel…"
                        ),
                        array(
                          'title'  => "GORD MILLER: STAYING THE COURSE",                    
                          'image'  => rand(800,1000),
                          'copy'   => "Ecologist, environmental policy analyst and former Ontario Environment Commissioner Gord Miller has delivered a thorough review of…"
                        ),
                        array(
                          'title'  => "IMPACT ASSESSMENT OF CLEAN FUEL",                    
                          'image'  => rand(800,1000),
                          'copy'   => "The Government of Canada is in the process of designing a Clean Fuel Standard (CFS) with the goal of reducing greenhouse gas…"
                        ),
                        array(
                          'title'  => "ECOFISCAL REPORT CORRECTION",                    
                          'image'  => rand(800,1000),
                          'copy'   => "Environmental disasters — for example, train derailments, tailings pond failures, or oil spills — are infrequent, but also potentially…"
                        ),
                      );
                      foreach(array_keys($news) as $num):
                        $title = $news[$num]['title'];
                        $image = $news[$num]['image'];
                        $copy = $news[$num]['copy'];
                    ?>
                      <!-- News Slider Item -->
                      <div class="news-slider-item">
                        <a href="single.php" class="img" style="background-image: url(https://picsum.photos/1200/800?image=<?php echo $image;?>);"></a>
                        <div class="news-content">                
                          <div class="news-meta"><span class="category">Report</span> <span class="date">04.2018</span></div>
                          <h3><a href="single.php"><?php echo $title;?></a></h3>
                          <p class="excerpt"><?php echo $copy;?></p>
                        </div>
                      </div>
                      <!-- /News Item -->
                    <?php endforeach; ?>

                    </div>
                    <!-- /News Slider -->

                  </div>
                </div>

                <div class="large-4 cell">
                  <div class="news-slider-nav">
                    <?php
                    foreach(array_keys($news) as $num):
                      $title = $news[$num]['title'];
                      $image = $news[$num]['image'];
                    ?>

                    <!-- News Slider Nav Item -->
                    <div class="news-slider-nav-item">
                      <div class="news-slider-nav-item-inner">
                        <div class="img" style="background-image: url(https://picsum.photos/400/400?image=<?php echo $image;?>);"></div>
                        <div class="news-content">                
                          <div class="news-meta"><span class="category">Report</span> <span class="date">04.2018</span></div>
                          <h3><?php echo $title;?></h3>
                        </div>
                      </div>
                    </div>
                    <!-- /News Nav Item -->

                    <?php endforeach; ?>            
                  </div>
                  <a href="#" class="button large outline full-width outline-black">Load More</a>
                </div>
              </div>
            </div>
            <!-- /News Slider Container -->


            <!-- News Container -->
            <div class="grid-container">
              <!-- News -->
              <div class="news-grid grid-x grid-padding-x">

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
                <div class="news-grid-item large-4 medium-6 cell">
                  <a href="single.php" class="img" style="background-image: url(https://picsum.photos/1200/800?image=<?php echo rand(600, 1000)?>);"></a>
                  <div class="news-content">                
                    <div class="news-meta"><span class="category">Report</span> <span class="date">04.2018</span></div>
                    <h3><a href="single.php"><?php echo $title;?></a></h3>
                  </div>
                </div>
                <!-- /News Item -->
                  <?php endforeach; ?>

              </div>
              <!-- /News -->
            
            </div>
            <!-- News Container -->

          </div>
        </div>
      </div>
    </section>
    <!-- /Section News -->