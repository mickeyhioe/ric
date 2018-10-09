<!-- Main Menu -->
<nav class="main-menu">
    <ul class="menu">
        <li <?php if($page == 'Home'){ echo 'class="active"'; }?>><a href="index.php">Home</a></li>
        <li class="has-sub-menu <?php if($page == 'About'){ echo 'active'; }?>"><a href="about.php">About</a>
        <ul class="sub-menu">
            <li><a href="our-story.php">Our Story</a></li>
            <li><a href="leadership.php">Leadership</a></li>
        </ul>
        </li>
        <li class="has-sub-menu <?php if($page == 'Industries'){ echo 'active'; }?>"><a href="induestries.php">Industries</a>
        <ul class="sub-menu">
            <li><a href="industry-map.php">Industry Map</a></li>
            <li><a href="global-map.php">Global Map</a></li>
        </ul>
        </li>
        <li <?php if($page == 'Resources'){ echo 'class="active"'; }?>><a href="resources.php">Resources</a></li>
        <li <?php if($page == 'News'){ echo 'class="active"'; }?>><a href="news.php">News</a></li>
    </ul>
</nav>
<!-- /Main Menu -->