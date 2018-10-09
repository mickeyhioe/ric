<?php
  $sections = array(
    array(
      'section' => "intro",
      'title'   => "RICANADA IS A NOT-FOR-PROFIT COALITION OF THE FOREFRONT BIO",
      'content' => "<p>We come together for true progress, in pursuit of a shared vision for Canada⏤a nation poised to rise as a global leader in sustainable abundance. Our mission is to support the Canadian government and stakeholders in catalyzing transformative progress for Canada, to provide policy makers with field expertises and foresights to make informed decisions and take timely actions. </p>
      <p>Our focus is to accelerate nation-wide adoption of renewable biofuels, biobased products, and clean technologies. Using these technologies can help us get back to the less than 350 parts per mission, which is the threshold that reverses climate change and preserves life as humans have known it. </p>"
    ),
    array(
      'section' => "history",
      'title'   => "RICANADA IS A NOT-FOR-PROFIT COALITION OF THE FOREFRONT BIO",
      'content' => "<p>We come together for true progress, in pursuit of a shared vision for Canada⏤a nation poised to rise as a global leader in sustainable abundance. Our mission is to support the Canadian government and stakeholders in catalyzing transformative progress for Canada, to provide policy makers with field expertises and foresights to make informed decisions and take timely actions. </p>
      <p>Our focus is to accelerate nation-wide adoption of renewable biofuels, biobased products, and clean technologies. Using these technologies can help us get back to the less than 350 parts per mission, which is the threshold that reverses climate change and preserves life as humans have known it. </p>"
    ),
    array(
      'section' => "mission",
      'title'   => "RICANADA IS A NOT-FOR-PROFIT COALITION OF THE FOREFRONT BIO",
      'content' => "<p>We come together for true progress, in pursuit of a shared vision for Canada⏤a nation poised to rise as a global leader in sustainable abundance. Our mission is to support the Canadian government and stakeholders in catalyzing transformative progress for Canada, to provide policy makers with field expertises and foresights to make informed decisions and take timely actions. </p>
      <p>Our focus is to accelerate nation-wide adoption of renewable biofuels, biobased products, and clean technologies. Using these technologies can help us get back to the less than 350 parts per mission, which is the threshold that reverses climate change and preserves life as humans have known it. </p>"
    ),
    array(
      'section' => "vision",
      'title'   => "RICANADA IS A NOT-FOR-PROFIT COALITION OF THE FOREFRONT BIO",
      'content' => "<p>We come together for true progress, in pursuit of a shared vision for Canada⏤a nation poised to rise as a global leader in sustainable abundance. Our mission is to support the Canadian government and stakeholders in catalyzing transformative progress for Canada, to provide policy makers with field expertises and foresights to make informed decisions and take timely actions. </p>
      <p>Our focus is to accelerate nation-wide adoption of renewable biofuels, biobased products, and clean technologies. Using these technologies can help us get back to the less than 350 parts per mission, which is the threshold that reverses climate change and preserves life as humans have known it. </p>"
    ),
    array(
      'section' => "governance",
      'title'   => "RICANADA IS A NOT-FOR-PROFIT COALITION OF THE FOREFRONT BIO",
      'content' => "<p>We come together for true progress, in pursuit of a shared vision for Canada⏤a nation poised to rise as a global leader in sustainable abundance. Our mission is to support the Canadian government and stakeholders in catalyzing transformative progress for Canada, to provide policy makers with field expertises and foresights to make informed decisions and take timely actions. </p>
      <p>Our focus is to accelerate nation-wide adoption of renewable biofuels, biobased products, and clean technologies. Using these technologies can help us get back to the less than 350 parts per mission, which is the threshold that reverses climate change and preserves life as humans have known it. </p>"
    )
  );

  // Background Colour per Section
  $bg_colour = array(          
    array(
      'bgcolour'    => 'bg-light-grey',
      'textcolour'  => 'text-black'
    ),
    array(
      'bgcolour'    => 'bg-white',
      'textcolour'  => 'text-black'
    ),
    array(
      'bgcolour'    => 'bg-black',
      'textcolour'  => 'text-white'
    ),
  );

  $bg_colour_count = count($bg_colour);
?>
<!-- Section Content About -->
<section id="section-content-about">


      <!-- Sticky Navigation -->
      <div class="large-3 cell" data-sticky-container>
        <nav class="sticky" data-sticky data-top-anchor="section-content-about:top" data-btm-anchor="governance:bottom">
          <ul class="section-padding" data-magellan style=" list-style-type: none; top: 0; margin: 0; padding-left: 40px; background: white">
            <?php 
              foreach(array_keys($sections) as $num):
                $section = $sections[$num]['section'];
                echo '<li><a href="#'.$section.'">'.$section.'</a></li>';
              endforeach;
            ?>
          </ul>
        </nav>
      </div>
      <!-- /Sticky Navigation -->


        <?php
          foreach(array_keys($sections) as $num):
            $section = $sections[$num]['section'];
            $title = $sections[$num]['title'];
            $content = $sections[$num]['content'];
            $bgcolour =  $bg_colour[$num % $bg_colour_count]['bgcolour'];
            $textcolour =  $bg_colour[$num % $bg_colour_count]['textcolour'];
            $section_num = $num + 1;
        ?>

        <!-- Section <?php echo $section_num.' '.$section; ?> -->
        <section id="<?php echo $section; ?>" data-magellan-target="<?php echo $section; ?>" class="section-bg section-padding full-height <?php echo $bgcolour.' '.$textcolour;?>">
          <div class="grid-container">
            <div class="grid-x align-right align-middle">
              <div class="large-9 cell">
                <h2 class=""><?php echo $title; ?></h2>

                <!-- Content -->
                <div class="grid-container section-padding">
                  <div class="grid-x">
                    <div class="large-3 cell">
                      <?php echo $section; ?> <?php echo '0'.$section_num; ?>
                    </div>
                    <div class="large-9 cell">
                      <?php echo $content; ?>
                    </div>
                  </div>
                </div>
                <!-- Content -->

              </div>
            </div>
          </div>
        </section>
        <!-- /Section 1: Intro -->

        <?php endforeach; ?>




</section>
    <!-- /Section Content About -->