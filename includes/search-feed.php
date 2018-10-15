<!-- Search Container -->
<div class="page-container">

	<div class="grid-container full">

    <!-- Search Feeds-->
    <div class="grid-x">
			<?php
			$news = array(
					array(
					'title'  => "CANADIAN BIOFUELS FACILITIES",
					),
					array(
					'title'  => "TOTAL ECONOMIC IMPACT ASSESSMENT"
					),
					array(
					'title'  => "LIFECYCLE ANALYSIS CANOLA BIODIESEL"
					),
					array(
					'title'  => "CONFERENCE BOARD OF CANADA"
					),
					array(
					'title'  => "RENEWABLE FUEL STANDARDS WITHIN A LOW..."
					),
					array(
					'title'  => "ETHANOL’S POTENTIAL CONTRIBUTION TO CANADA"
					),
			);

			foreach(array_keys($news) as $num):
					$title = $news[$num]['title'];
			?>
			<!-- Search Item -->
			<div class="cell">
				<div class="search-content">                
					<div class="news-meta"><span class="category">Report</span> <span class="date">04.2018</span></div>
					<h3><a href="single.php"><?php echo $title;?></a></h3>
					<p class="excerpt">Renewable Industries Canada (RICanada) supports the Government of Canada’s decision to develop regulations for a Federal Clean Fuel…</p>
				</div>
			</div>
			<!-- /Search Item -->
			<?php endforeach; ?>

    </div>
		<!-- /Search Feeds -->
		
	</div>
	
</div>
<!-- Search Container -->