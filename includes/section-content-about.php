<?php
  $sections = array(
    array(
      'section' => "intro",
      'title'   => "RICANADA IS A NOT-FOR-PROFIT COALITION OF THE FOREFRONT BIO",
      'content' => "
                    <p>We come together for true progress, in pursuit of a shared vision for Canada⏤a nation poised to rise as a global leader in sustainable abundance. Our mission is to support the Canadian government and stakeholders in catalyzing transformative progress for Canada, to provide policy makers with field expertises and foresights to make informed decisions and take timely actions. </p>

                    <p>Our focus is to accelerate nation-wide adoption of renewable biofuels, biobased products, and clean technologies. Using these technologies can help us get back to the less than 350 parts per mission, which is the threshold that reverses climate change and preserves life as humans have known it. </p>"
    ),
    array(
      'section' => "history",
      'title'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
      'content' => "<ul>
                      <li>This is a list</li>
                      <li>This is a list</li>
                      <li>This is a list</li>
                      <li>This is a list</li>
                    </ul>"
    ),
    array(
      'section' => "mission",
      'title'   => "Donec ullamcorper sem eros, eu suscipit orci viverra ut",
      'content' => "<h3 class='all-caps'>Heading 3</h3>
                    <p>Our focus is to accelerate nation-wide adoption of renewable biofuels, biobased products, and clean technologies. Using these technologies can help us get back to the less than 350 parts per mission, which is the threshold that reverses climate change and preserves life as humans have known it. </p>
                    <h4 class='all-caps'>Heading 4</h4>
                    <ol>
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Consectetur adipiscing elit</li>
                      <li>Iaculis a consectetur ac</li>
                      <li>Mattis quis orci</li>
                      <li>Integer sollicitudin turpis</li>
                      <li>Fringilla luctus</li>
                      <li>Nullam at enim commodo</li>
                    </ol>"
    ),
    array(
      'section' => "vision",
      'title'   => "Aenean lectus diam, iaculis a consectetur ac, mattis quis orci",
      'content' => "<h3 class='all-caps'>This is another Heading 3</h3>
                    <p>We come together for true progress, in pursuit of a shared vision for Canada⏤a nation poised to rise as a global leader in sustainable abundance. Our mission is to support the Canadian government and stakeholders in catalyzing transformative progress for Canada, to provide policy makers with field expertises and foresights to make informed decisions and take timely actions. </p>
                    <ol class='leading-zero secondary-bold all-caps font-size-2'>
                      <li>Lorem ipsum dolor sit amet</li>
                      <li>Consectetur adipiscing elit</li>
                      <li>Iaculis a consectetur ac</li>
                      <li>Mattis quis orci</li>
                      <li>Integer sollicitudin turpis</li>
                      <li>Fringilla luctus</li>
                      <li>Nullam at enim commodo</li>
                    </ol>"
    ),
    array(
      'section' => "governance",
      'title'   => "Integer sollicitudin turpis ut fringilla luctus",
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

        <?php
          foreach(array_keys($sections) as $num):
            $section = $sections[$num]['section'];
            $title = $sections[$num]['title'];
            $content = $sections[$num]['content'];
            $bgcolour =  $bg_colour[$num % $bg_colour_count]['bgcolour'];
            $textcolour =  $bg_colour[$num % $bg_colour_count]['textcolour'];
            $section_num = '0'.($num + 1);
            $first_section = reset($sections)['section'];
            $last_section =  end($sections)['section'];
        ?>

        <!-- Section <?php echo $section_num.' '.$section; ?> -->
        <section id="<?php echo $section; ?>" data-magellan-target="<?php echo $section; ?>" class="section-bg full-height <?php echo $bgcolour.' '.$textcolour;?>">
          <div class="grid-container">
            <div class="grid-x align-top align-center">


              <?php if ($num < 1):?>
              <!-- Sticky Navigation -->
              <div class="large-3 medium-4 cell show-for-large" data-sticky-container>
                <nav class="sticky sticky-nav" data-sticky data-top-anchor="<?php echo $first_section;?>:top" data-btm-anchor="<?php echo $last_section;?>:bottom">
                  <ul class="section-padding" data-magellan>
                    <?php
                      foreach(array_keys($sections) as $number):
                        $section_name = $sections[$number]['section'];
                        $section_number = '0'.($number + 1);
                    ?>
                        <li>
                          <a href="#<?php echo $section_name;?>">
                            <span class="section-name"><?php echo $section_name;?></span>
                            <span class="section-line"></span>
                            <span class="section-number"><?php echo $section_number;?></span>
                          </a>
                        </li>
                    <?php
                      endforeach;
                    ?>
                  </ul>
                </nav>
              </div>
              <!-- /Sticky Navigation -->

              <?php else:?>
              <div class="large-3 medium-4 cell show-for-large"></div>
              <?php endif; ?>

              <div class="large-9 medium-11 cell section-padding ">

                <!-- Section Name -->
                <div class="section-subtitle-container hide-for-medium">
                  <span class="section-name"><?php echo $section; ?></span>
                  <span class="section-line"></span>
                  <span class="section-number"><?php echo $section_num; ?></span>
                </div>
                 <!-- /Section Name -->
                <h2 class="all-caps"><?php echo $title; ?></h2>

                <!-- Content -->
                <div class="grid-container full section-padding">
                  <div class="grid-x">
                    <div class="large-3 medium-4 cell show-for-medium">
                      <div class="section-subtitle-container ">
                        <span class="section-name"><?php echo $section; ?></span>
                        <span class="section-line"></span>
                        <span class="section-number"><?php echo $section_num; ?></span>
                      </div>
                    </div>
                    <div class="large-9 medium-8 cell">
                      <div class="section-content with-line">
                        <?php echo $content; ?>
                      </div>
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