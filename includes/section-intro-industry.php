<!-- Section Intro Industry -->
<section id="section-intro-industry">
  <div class="grid-container">
    <div class="grid-x align-center">
      <div class="medium-11 cell">

        <!-- Slide -->
        <div class="industry-slider slide">
          
          <?php
              $slides = array(
                array(
                  'title'     => "PRODUCTION PLANTS",
                  'content'   => "At the end of 2014, there are 26 renewable fuels plants across Canada. This number is poised to rise in the next 5 years.",
                  'date'      => "2018",
                  'image'     => "production-plants.svg",
                ),
                array(
                  'title'     => "LITRES/YEAR",
                  'content'   => "At the end of 2014, there are 26 renewable fuels plants across Canada. This number is poised to rise in the next 5 years.",
                  'date'      => "2018",
                  'image'     => "ghg-reduction.svg",
                ),
                array(
                  'title'     => "PRODUCTION PLANTS",
                  'content'   => "At the end of 2014, there are 26 renewable fuels plants across Canada. This number is poised to rise in the next 5 years.",
                  'date'      => "2018",
                  'image'     => "production-plants.svg",
                ),
                array(
                  'title'     => "LITRES/YEAR",
                  'content'   => "At the end of 2014, there are 26 renewable fuels plants across Canada. This number is poised to rise in the next 5 years.",
                  'date'      => "2018",
                  'image'     => "ghg-reduction.svg",
                ),
              );
              foreach(array_keys($slides) as $num):
                  $title = $slides[$num]['title'];
                  $content = $slides[$num]['content'];
                  $date = $slides[$num]['date'];
                  $image = $slides[$num]['image'];
          ?>
          <div class="grid-container slide-item">
            <div class="grid-x align-middle align-center">
              <div class="small-12 cell text-center">
                <img src="assets/img/graphics/<?php echo $image; ?>" alt="">
                <div class="slide-content">
                  <h2 class="h3 all-caps"><?php echo $title;?></h2>
                  <p><?php echo $content; ?></p>
                </div>
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
            <a class="button bg-black xlarge with-arrow-down margin-0" href="#section-content-industry" rel="slideTo">Learn More <span class="line"></span></a>
          </div>
          <!-- /Learn More -->
        </div>
      </div>
    </div>
  </div>
  <!-- /Section Bottom -->

</section>
<!-- /Section Intro Industry -->