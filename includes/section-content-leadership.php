<?php
  // Partners
  $partners = array(
    array(
      'date'    => "08.2018",
      'company' => "Greenfield",
      'logo'    => "greenfield-logo.png",
      'content' => "Greenfield bio lorem ipsum dolor sit amet, con sec te tur adipis cing elit, sed do eius mod tempor incidi dunt ut lab ore et dol ore magna aliqua. Ut enim ad minim ve niamea, nostrud exercitation ullamco laboris nisi ut aliquip ex eas.",
      'url'     => "http://www.greenfield.com/"
    ),
    array(
      'date'    => "08.2018",
      'company' => "Biox Corp",
      'logo'    => "biox-logo.png",
      'content' => "Biox Corp. bio lorem ipsum dolor sit amet, con sec te tur adipis cing elit, sed do eius mod tempor incidi dunt ut lab ore et dol ore magna aliqua. Ut enim ad minim ve niamea, nostrud exercitation ullamco laboris nisi ut aliquip ex eas.",
      'url'     => "http://www.worldenergy.net/"
    ),
    array(
      'date'    => "08.2018",
      'company' => "IGPC",
      'logo'    => "igpc-logo.png",
      'content' => "IGPC Corp. bio lorem ipsum dolor sit amet, con sec te tur adipis cing elit, sed do eius mod tempor incidi dunt ut lab ore et dol ore magna aliqua. Ut enim ad minim ve niamea, nostrud exercitation ullamco laboris nisi ut aliquip ex eas.",
      'url'     => "https://www.igpc.ca/"
    )
  );

  // Board of Directors
  $boards = array(          
    array(
      'title'    => 'Chair',
      'name'     => 'Jim Grey',
      'position' => 'Chief Executive Officer',
      'company'  => 'IGPC Ethanol, Inc.',
      'linkedin' => 'http://linkedin.com',
      'image'    => 'jim-grey.png',
      'bio'      => '<p>Communications expert with close to two decades of leadership experience in public policy, community outreach, advocacy, media relations, and corporate communications. Senior and executive roles in government and crown corporations, industry associations, and the private sector. Past President and active Board Member of Renewable Industries Canada. Now at Greenfield Global — a world leader in specialty alcohols and Canada’s largest ethanol producer.</p>
      <p>Lorem ipsum dolor sit amet, con sec te tur adipis cing elit, sed do eius mod tempor incidi dunt ut lab ore et dol ore magna aliqua. Ut enim ad minim ve niamea, nostrud exercitation ullamco laboris nisi ut aliquip ex eas. Lorem ipsum dolor sit amet, con sec te tur adipis cing elit, sed do eius mod tempor incidi dunt ut lab ore et dol ore magna aliqua. Ut enim ad minim ve niamea, nostrud exercitation ullamco laboris nisi ut aliquip ex eas. Lorem ipsum dolor sit amet, con sec te tur adipis cing elit, sed do eius mod tempor incidi dunt ut lab ore et dol ore magna aliqua. Ut enim ad minim ve niamea, nostrud exercitation ullamco laboris nisi ut aliquip ex eas.</p>'
    ),
    array(
      'title'    => 'Vice Chair',
      'name'     => 'Scott Lewis',
      'position' => 'Executive Vice-President',
      'company'  => 'BIOX Corporation',
      'linkedin' => 'http://linkedin.com',
      'image'    => 'scott-lewis.png',
      'bio'      => '<p>Communications expert with close to two decades of leadership experience in public policy, community outreach, advocacy, media relations, and corporate communications. Senior and executive roles in government and crown corporations, industry associations, and the private sector. Past President and active Board Member of Renewable Industries Canada. Now at Greenfield Global — a world leader in specialty alcohols and Canada’s largest ethanol producer.</p>
      <p>Lorem ipsum dolor sit amet, con sec te tur adipis cing elit, sed do eius mod tempor incidi dunt ut lab ore et dol ore magna aliqua. Ut enim ad minim ve niamea, nostrud exercitation ullamco laboris nisi ut aliquip ex eas. Lorem ipsum dolor sit amet, con sec te tur adipis cing elit, sed do eius mod tempor incidi dunt ut lab ore et dol ore magna aliqua. Ut enim ad minim ve niamea, nostrud exercitation ullamco laboris nisi ut aliquip ex eas. Lorem ipsum dolor sit amet, con sec te tur adipis cing elit, sed do eius mod tempor incidi dunt ut lab ore et dol ore magna aliqua. Ut enim ad minim ve niamea, nostrud exercitation ullamco laboris nisi ut aliquip ex eas.</p>'
    ),
    array(
      'title'    => 'Board Member',
      'name'     => 'Andrea Kent',
      'position' => 'Vice-President, Governtment & PR',
      'company'  => 'Greenfield Global, Inc.',
      'linkedin' => 'http://linkedin.com',
      'image'    => 'andrea-kent.png',
      'bio'      => '<p>Communications expert with close to two decades of leadership experience in public policy, community outreach, advocacy, media relations, and corporate communications. Senior and executive roles in government and crown corporations, industry associations, and the private sector. Past President and active Board Member of Renewable Industries Canada. Now at Greenfield Global — a world leader in specialty alcohols and Canada’s largest ethanol producer.</p>
      <p>Lorem ipsum dolor sit amet, con sec te tur adipis cing elit, sed do eius mod tempor incidi dunt ut lab ore et dol ore magna aliqua. Ut enim ad minim ve niamea, nostrud exercitation ullamco laboris nisi ut aliquip ex eas. Lorem ipsum dolor sit amet, con sec te tur adipis cing elit, sed do eius mod tempor incidi dunt ut lab ore et dol ore magna aliqua. Ut enim ad minim ve niamea, nostrud exercitation ullamco laboris nisi ut aliquip ex eas. Lorem ipsum dolor sit amet, con sec te tur adipis cing elit, sed do eius mod tempor incidi dunt ut lab ore et dol ore magna aliqua. Ut enim ad minim ve niamea, nostrud exercitation ullamco laboris nisi ut aliquip ex eas.</p>'
    ),
  );
?>
  <!-- Section Partners -->
  <section id="section-content-partners">
    <div class="grid-container"> 
      <div class="grid-x align-center">
        <div class="medium-11 cell">

          <!-- Partners Container -->
          <div class="grid-container">
            <!-- Partners -->
            <div class="partner-grid grid-x grid-padding-x align-center">
              <?php
                foreach(array_keys($partners) as $num):
                  $date = $partners[$num]['date'];
                  $company = $partners[$num]['company'];
                  $logo = $partners[$num]['logo'];
                  $content = $partners[$num]['content'];
                  $url = $partners[$num]['url'];
              ?>
                <!-- Partner Item -->
                <div class="partner-grid-item large-4 medium-6 cell">
                  <!-- Partner Meta -->
                  <div class="partner-meta">
                      <span class="category">Partner since</span>
                      <span class="date"><?php echo $date;?></span>
                  </div>
                  <!-- /Partner Meta -->
                  
                  <!-- Partner Image & Content -->
                  <a href="<?php echo $url;?>" title="<?php echo $company;?>" class="img" style="background-image: url('assets/img/<?php echo $logo;?>');" target="_blank"></a>
                  <div class="partner-content"> 
                    <p><?php echo $content;?></p>
                    <a href="<?php echo $url;?>" target="_blank" class="with-line">Visit Website</a>
                  </div>
                  <!-- /Partner Image & Content -->
                  
                </div>
                <!-- /Partner Item -->
              <?php endforeach; ?>
            </div>
            <!-- /Partners -->
          </div>
          <!-- /Partners Container -->

        </div>
      </div>
    </div>
  </section>
  <!-- /Section Partners -->

  <!-- Section Board of Directors -->
  <section id="section-content-boards" class="section-padding">
    <div class="grid-container"> 
      <div class="grid-x align-center">
        <div class="medium-11 cell">
          
          <div class="grid-container">
            <h2 class="all-caps">Board of Directors</h2>
          </div>

          <div class="grid-container section-padding">
            <div class="board-grid grid-x grid-padding-x grid-padding-y align-center">

            <?php
              foreach(array_keys($boards) as $num):
                $title = $boards[$num]['title'];
                $name = $boards[$num]['name'];
                $position = $boards[$num]['position'];
                $company = $boards[$num]['company'];
                $linkedin = $boards[$num]['linkedin'];
                $image = $boards[$num]['image'];
                $bio = $boards[$num]['bio'];
                $id = 'section-'.$num;
                $bio_id = 'section-bio-'.$num;
            ?>
              <!-- Board Bio Item Expanded -->
              <div id="<?php echo $bio_id; ?>" class="board-bio-item large-12 cell">

                <div class="grid-container full">
                  <div class="grid-x grid-padding-y grid-padding-x">

                    <div class="large-6 medium-6 cell">

                      <div class="board-bio-img-container">
                        <!-- Image -->
                        <div class="board-img" style="background-image: url('assets/img/<?php echo $image;?>');"></div>
                        <!-- /Image -->

                        <!-- Info -->
                        <div class="board-content">
                          <a href="#<?php echo $id; ?>" class="close float-right hide-for-medium"><i class="far fa-2x fa-times-circle"></i></a>               
                          <div class="board-meta">
                            <span class="category"><?php echo $title;?></span> 
                            <span class="date">04.2018</span>
                          </div>
                          <h3 class="all-caps"><?php echo $name;?></h3>
                          <div class="board-info">
                            <strong><?php echo $company;?></strong><br>
                            <?php echo $position;?></strong>
                            <a href="<?php echo $linkedin;?>">Linkedin</a>
                          </div>
                        </div>
                        <!-- /Info -->
                      </div>
                      
                    </div>

                    <div class="large-6 medium-6 cell">
                      <!-- Bio -->
                      <div class="board-bio-content">
                        <div class="text-right show-for-medium">
                          <a href="#<?php echo $id; ?>" class="close"><i class="far fa-2x fa-times-circle"></i></a>
                        </div>
                        <div class="board-bio-copy">
                          <?php echo $bio;?>
                        </div>
                      </div>
                      <!-- /Bio -->
                    </div>

                  </div>
                </div>

              </div>
              <!-- /Board Bio Item Expanded -->
            <?php endforeach; ?>


            <?php
              foreach(array_keys($boards) as $number):
                $title = $boards[$number]['title'];
                $name = $boards[$number]['name'];
                $position = $boards[$number]['position'];
                $company = $boards[$number]['company'];
                $linkedin = $boards[$number]['linkedin'];
                $image = $boards[$number]['image'];
                $bio = $boards[$number]['bio'];
                $id = 'section-'.$number;
                $bio_id = 'section-bio-'.$number;
            ?>

            <!-- Board Item -->
            <div id="<?php echo $id; ?>" class="board-grid-item large-4 medium-6 cell" data-equalizer="meta" data-equalize-by-row="true">

                <!-- Meta -->
                <div class="board-meta" data-equalizer-watch="meta">
                  <span class="category"><?php echo $title;?></span> 
                  <span class="date">04.2018</span>
                </div>
                <!-- /Meta -->

                <!-- Image -->
                <a href="#<?php echo $bio_id; ?>" class="open-bio board-img" style="background-image: url('assets/img/<?php echo $image;?>');"></a>
                 <!-- /Image -->

                <!-- Content -->
                <div class="board-content" data-equalizer-watch>            
                  <h3 class="all-caps"><?php echo $name;?></h3>
                  <div class="board-info">
                    <strong><?php echo $company;?></strong><br>
                    <?php echo $position;?></strong>
                    <a href="#<?php echo $bio_id; ?>" class="open-bio">Bio</a>
                  </div>
                </div>
                <!-- /Content -->

              </div>
              <!-- /Board Item -->

              <?php endforeach; ?>


            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- /Section Content Board of Directors -->