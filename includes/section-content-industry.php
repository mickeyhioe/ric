<?php

  //Infographic
  $infographic = array(
    array(
      'number'      => '26',
      'description' => 'Production Plants'
    ),       
    array(
      'number'      => '1.8B',
      'description' => 'Litres/Year'
    ),    
    array(
      'number'      => '$3.5B',
      'description' => '/year'
    ),
    array(
      'number'      => '400M',
      'description' => 'Litres/year'
    ),
  );

  $output = '<div class="grid-container">';
  $output .= '<div class="grid-x align-center">';
  foreach(array_keys($infographic) as $num):
    $number = $infographic[$num]['number'];
    $description = $infographic[$num]['description'];

    $output .= '<div class="medium-6 small-11 cell">';
    $output .= '<div class="infographic">';
    $output .= '<div class="number">'.$number.'</div>';
    $output .= '<div class="description">'.$description.'</div>';
    $output .= '</div></div>';

  endforeach;
  $output .= '</div></div>';

  // Section
  $sections = array(
    array(
      'section' => "intro",
      'title'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
      'content' => "
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                    
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>"
    ),
    array(
      'section' => "history",
      'title'   => "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
      'content' => $output
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
    )
  );

  // Background Colour per Section
  $bg_colour = array(
    array(
      'bgcolour'    => 'bg-white',
      'textcolour'  => 'text-black'
    ),       
    array(
      'bgcolour'    => 'bg-light-grey',
      'textcolour'  => 'text-black'
    ),    
    array(
      'bgcolour'    => 'bg-black',
      'textcolour'  => 'text-white'
    ),
  );

  $bg_colour_count = count($bg_colour);


 
?>
      <!-- Section Content Industry -->
      <section id="section-content-industry">

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
          <?php if ($num < 1):?>
          <!-- Top Section -->
          <section class="bg-light-grey section-padding-medium">
            <div class="grid-container">
              <div class="grid-x align-top align-center text-center">
                <div class="large-10 cell">
                  <p><strong>THE BIOECONOMY IS DRIVING THE GROWTH OF CANADA’S LOW CARBON ECONOMY</strong></p>
                  <p>Renewable Industries Canada represents the leaders of our nation’s bioeconomy – producers of renewable fuels and value added products that reduce GHG emissions and provide economic opportunity to the benefit of all Canadians.</p>
                </div>
              </div>
            </div>
          </section>
          <!-- /Top Section -->
          <?php endif;?>


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
        <!-- /Section <?php echo $section_num.' '.$section; ?> -->

        <?php endforeach; ?>

      </section>
          <!-- /Section Content Industry -->