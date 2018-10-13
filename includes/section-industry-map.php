    <!-- Section Industry Map -->
    <section id="section-industry-map" class="padding-for-fix-header">
      <div class="grid-container full">
        <div class="grid-x">
          <div class="large-12 cell">
            <div class="map-container" style="background-image:url('assets/img/map.jpg');"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section Industry Map -->

    <!-- Section Industry Search -->
    <section id="section-industry-search" class="bg-black section-padding-medium">
      <div class="grid-container">
        <div class="grid-x align-center align-middle">
          <div class="large-4 cell">
            <h3 class="text-white all-caps">USE OUR INDUSTRY MAP<br> TO FIND THE INFO YOU NEED</h3>
          </div>
          <div class="large-8 cell">
            <form action="search.php" role="search" method="get" id="searchform" class="search-form form">
              <div class="icon-inside icon-search icon-white">
                <input placeholder="Type your search here" type="text" class="input rounded white-border">
                <button class="arrow white"></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- /Section Industry Search -->

    <!-- Section Industry List -->
    <section id="section-industry-list" class="section-padding">
      <div class="grid-container">
        <div class="grid-x align-center align-middle">
          <div class="large-12 cell">
            <div class="news-meta">
              <span class="category">Last updated</span> 
              <span class="date">2018</span>
            </div>
            <h3 class="all-caps">LIST OF FACILITIES</h3>
          </div>
          <div class="large-12 cell">
            <!-- Table -->
            <div class="table-scroll">
              <table class="industry-list stack">
                <tbody>
                <?php 
                  $icons = Array(
                    'green-acriculture-red',
                    'green-fuels-red',
                    'green-products-red',
                    'green-tech-red',
                    'green-waste-red'
                  );
                  for ($i=0; $i<9; $i++):
                    $icon = $icons[$i % 5];
                ?>
                  <tr>
                    <td><img src="assets/img/map_icons/red_icons/<?php echo $icon;?>.svg" class="icon"></td>
                    <td>Archer Daniels Midland</td>
                    <td>Lloyminster, AB, Canada</td>
                    <td>Green agriculture</td>
                  </tr>
                <?php endfor;?>
                </tbody>
              </table>
            </div>
            <!-- /Table -->
          </div>
        </div>
      </div>
    </section>
    <!-- /Section Industry Search -->

