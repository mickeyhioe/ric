            <!-- News Slider Container -->
            <div class="grid-container section-padding section-padding-small">
              <div class="grid-x grid-padding-x">
                
                <div class="large-8 cell">

                  <div class="news-large-container">
                    
                    <!-- News Large Slider -->
                    <div class="news-large news-slider vertical-orientation">
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
                      <!-- News Large Item -->
                      <div class="news-large-item slide-item">
                        <a href="single.php" class="img" style="background-image: url(https://picsum.photos/1200/800?image=<?php echo $image;?>);"></a>
                        <div class="news-content">                
                          <div class="news-meta"><span class="category">Report</span> <span class="date">04.2018</span></div>
                          <h3><a href="single.php"><?php echo $title;?></a></h3>
                          <p class="excerpt"><?php echo $copy;?></p>
                        </div>
                      </div>
                      <!-- /News Large Item -->
                    <?php endforeach; ?>

                    </div>
                    <!-- /News Large Slider-->

                  </div>
                </div>

                <div class="large-4 cell">
                  <div class="news-slider-nav show-for-medium">
                    
                    <?php
                    foreach(array_keys($news) as $num):
                      $title = $news[$num]['title'];
                      $image = $news[$num]['image'];
                    ?>

                    <!-- News Small Item -->
                    <div class="news-small-item slide-item">
                      <div class="news-small-item-inner">
                        <div class="img" style="background-image: url(https://picsum.photos/400/400?image=<?php echo $image;?>);"></div>
                        <div class="news-content">                
                          <div class="news-meta">
                            <span class="category">Report</span>
                            <span class="date">04.2018</span>
                          </div>
                          <h3><?php echo $title;?></h3>
                        </div>
                      </div>
                    </div>
                    <!-- /News Small Item -->

                    <?php endforeach; ?>

                  </div>
                  <a href="#" class="button large outline full-width outline-black">Load More</a>
                </div>
              </div>
            </div>
            <!-- /News Large Container -->