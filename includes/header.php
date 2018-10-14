<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renewable Industries Canada</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/js/vendor/slick/slick.css">
    <link rel="stylesheet" href="assets/js/vendor/slick/slick-theme.css">
    <link rel="stylesheet" href="assets/css/style.min.css?1">
    
  </head>

  <body>

  <div class="wrapper" id="top">
    <!-- Header -->
    <header id="header" class="site-header">
      <div class="grid-container padding-0">
        <div class="grid-x">
          <div class="cell">
            <div class="top-bar">
              <div class="top-bar-left">
                <!-- Logo -->
                <div class="logo">
                  <a href="index.php">
                    <img src="assets/img/graphics/RIC-icon-outline.svg" alt="RICanada">
                  </a>
                </div>
                <!-- /Logo -->
              </div>

              <div class="top-bar-left show-for-medium">
                <?php include('includes/news-ticker.php');?>
              </div>

              <div class="top-bar-right">

                <ul class="menu align-middle">
                  <li>
                    <!--Language Switcher -->
                    <nav class="language-switcher">
                      <ul>
                        <li class="active"><a href="index.php">EN</a></li>
                        <li><a href="index_fr.php">FR</a></li>
                      </ul>
                    </nav>
                    <!-- /Language Here -->
                  </li>
                  <li>
                    <!-- Burger Menu -->
                    <div class="menu-button" aria-hidden="true">
                      <a href="#" id="open-menu">
                        <div>
                          <span></span><span></span><span></span>
                        </div>
                        MENU
                      </a>
                    </div>
                    <!-- Burger Menu -->
                  </li>
                </ul>
              <div>

            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- /Header -->

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobile-menu">
      <div class="mobile-menu-container">
        <div class="grid-container">
          <div class="grid-x full-height">

            <div class="cell">

              <!-- Search Form -->
              <div class="grid-x align-center">
                <div class="medium-6 large-4 cell">            
                  <div class="search-form">
                    <form action="search.php" role="search" method="get" id="searchform" class="search-form form">
                      <div class="icon-inside icon-search">
                        <input placeholder="Search" type="text" class="input rounded">
                        <button class="arrow"></button>
                      </div>
                    </form>
                  </div>
                  
                </div>
              </div>
              <!-- /Search Form -->
            </div>

            <div class="cell align-self-stretch align-middle">

              <!-- Main Menu -->
              <div class="grid-x align-center">
                <div class="small-12 cell">
                  <?php include('includes/main-menu.php');?>
                </div>
              </div>
              <!-- /Main Menu -->

            </div>

            <div class="cell align-self-bottom">

              <!-- Main Menu Footer-->
              <div class="grid-x align-center ">
                <div class="small-12 cell">
                  <?php include('includes/main-menu-footer.php');?>
                </div>
              </div>
              <!-- /Main Menu Footer-->
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- /Mobile Menu -->

    <?php include('includes/social-share.php'); ?>