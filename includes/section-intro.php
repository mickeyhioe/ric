    <?php
      if (!isset($page_title)){
        $page_title ="Welcome";
      }
    ?>
    <!-- Section Intro -->
    <section id="section-intro" class="full-height padding-for-fix-header">
      <div class="grid-container">
        <div class="grid-x align-center">
          <div class="medium-11 cell">

            <!-- Slide -->
            <div class="slide slick">
              
              <?php
                  $slides = array(
                      array(
                          'title'     => "OUR CANADA UNLIMITED",
                          'content'   => "Canada is poised to rise as a global leader in sustainable abundance.",
                          'cta'       => "Impact Overview"
                      ),
                      array(
                          'title'     => "OUR CANADA UNLIMITED",
                          'content'   => "Canada is poised to rise as a global leader in sustainable abundance.",
                          'cta'       => "Impact Overview"
                      ),
                      array(
                          'title'     => "OUR CANADA UNLIMITED",
                          'content'   => "Canada is poised to rise as a global leader in sustainable abundance.",
                          'cta'       => "Impact Overview"
                      )
                  );
                  foreach(array_keys($slides) as $num):
                      $title = $slides[$num]['title'];
                      $content = $slides[$num]['content'];
                      $cta = $slides[$num]['cta'];
              ?>
              <div class="grid-container">
                <div class="grid-x align-middle align-center">
                  <div class="xlarge-6 medium-5 medium-order-1 small-order-2 cell">
                    <div class="slide-content">
                      <span class="section-title"><?php echo $page_title; ?></span>
                      <h2 class="h1"><?php echo $title; ?></h2>
                      <p class="intro"><?php echo $content; ?></p>
                      <a href="#" class="button large with-arrow"><span><?php echo $cta; ?></span></a>
                    </div>
                  </div>
                  <div class="xlarge-6 medium-7 medium-order-2 small-order-1 cell">
                    <img src="assets/img/graphics/shield-2.svg" alt="Shield">
                  </div>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
            <!-- /Slide -->

          </div>
        </div>
      </div>

      <!-- Section Bottom -->
      <div class="section-bottom">
        <div class="grid-container">
          <div class="grid-x">
            <div class="cell auto show-for-medium">       
              <!-- Learn More -->
              <div class="learn-more">
                <a class="button bg-black xlarge with-arrow-down margin-0" href="#section-about" rel="slideTo">Learn More <span class="line"></span></a>
              </div>
              <!-- /Learn More -->
            </div>
            <div class="cell auto">
              <?php include('includes/social-follow.php'); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- /Section Bottom -->

    </section>
    <!-- /Section Intro -->