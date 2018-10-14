<nav class="main-menu">
	<ul class="menu">
		<li <?php if($page == 'Home'){ echo 'class="active"'; }?>><a href="index.php">Home</a></li>
		<li class="has-sub-menu <?php if($page == 'About'){ echo 'active'; }?>"><a href="about.php">About</a>
		<ul class="sub-menu">
			<li <?php if($sub_page == 'Our Story'){ echo 'class="active"'; }?>><a href="about.php">Our Story</a></li>
			<li class="parent <?php if($page == 'About'){ echo 'active'; }?>"><a href="about.php">About</a>
			<li <?php if($sub_page == 'Leadership'){ echo 'class="active"'; }?>><a href="leadership.php">Leadership</a></li>
		</ul>
		</li>
		<li class="has-sub-menu <?php if($page == 'Industries'){ echo 'active'; }?>"><a href="industries.php">Industries</a>
		<ul class="sub-menu">
			<li <?php if($sub_page == 'Overview'){ echo 'class="active"'; }?>><a href="industries.php">Overview</a></li>
			<li class="parent <?php if($page == 'Industries'){ echo 'active'; }?>"><a href="industries.php">Industries</a>
			<li <?php if($sub_page == 'Industry Map'){ echo 'class="active"'; }?>><a href="industry-map.php">Industry Map</a></li>
		</ul>
		</li>
		<li <?php if($page == 'Resources'){ echo 'class="active"'; }?>><a href="resources.php">Resources</a></li>
		<li <?php if($page == 'News'){ echo 'class="active"'; }?>><a href="news.php">News</a></li>
	</ul>
</nav>