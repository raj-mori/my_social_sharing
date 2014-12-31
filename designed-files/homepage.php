<?php

	$title = 'Webspasm - The Backbone of the Internet!';
	$meta_desc= 'Webspasm - The backbone of the internet!';
	$body_background=null;
	
	include '_includes/header.php';

?>

		<div id="home-wrap">
			<!--home_main_content-->
			<div id="home_sec">
				<h1 class="index-logo"><a href="index.php"><img src="_images/webspasm-logo-large.png" alt="Home"></a></h1>
			
				<!--MAIN SEARCH START-->
				<div id="main-search">
					<form action="#" method="get">
						<input type="text" name="search" placeholder="Find Something New..." autofocus="autofocus">
						<div class="home-search-buttons">
							<button class="main-button">SEARCH</button> 
							<button class="main-button">RANDOM</button>
						</div>
					</form>
				</div>
				<!--MAIN SEARCH END-->
				
				<!--feed-content start-->
				<div class="feed-container">
					<p class="recent-search-title">Recent Searches <span class="sort">[<a href="">Sort</a>]</span></p>
					<ul class="feed-tags">
						<li class="tag-s10"><a href="">food</a>,</li>
						<li class="tag-s8"><a href="">keto guide</a>,</li>
						<li class="tag-s7"><a href="">oranges</a>,</li>
						<li class="tag-s4"><a href="">reddit</a>,</li>
						<li class="tag-s1"><a href="">how to guess correctly</a>,</li>
						<li class="tag-s3"><a href="">favorite fruit</a>,</li>
						<li class="tag-s1"><a href="">tag cloud</a>,</li>
						<li class="tag-s2"><a href="">favorite sauces</a></li>
						<li class="tag-s8"><a href="">frogger</a>,</li>
						<li class="tag-s1"><a href="">1940s video games</a>,</li>
						<li class="tag-s6"><a href="">best types of food</a>,</li>
						<li class="tag-s9"><a href="">color of zebras</a>,</li>
						<li class="tag-s4"><a href="">our sun</a></li>
					</ul>
					<p class="feed-title">Live Feed <span class="enable-adult">[<a href="#">Enable Adult Content</a>]</span></p>

					<div class="feed-box">
						<div class="feed-content">
							<span class="time">5 mins ago</span>
							<p class="feed-name">Keto Diet</p>
							<p><a href="/b/keto-diet">/b/keto-diet</a></p>
						</div>
						<div class="bookmark feed-img">
							<a href="#" title="Keto Diet - Bookmark"><img  alt="" src="_images/_board_strips/Keto-Diet.png"><span class="stripe bottom left">Keto Diet</span>
							<div class="inner-border"></div></a>
						</div>
						<p class="feed-by"><a href="#">Keto Diet</a> created by <a href="#">Diddy182</a></p>	
					</div>

					<div class="feed-box">
						<div class="feed-content">
							<span class="time">15 mins ago</span>
							<p class="feed-name">Culinary Fruits</p>
							<p><a href="http://worldshealthiesfoods.com">/b/culinary-fruits</a></p>
						</div>
						<div class="bookmark feed-img">
							<a href="#" title="Culinary Fruits - Bookmark"><img  alt="" src="_images/_board_strips/Culinary-Fruits.png"><span class="stripe bottom left">Culinary Fruits</span>
							<div class="inner-border"></div></a>
						</div>
						<p class="feed-by"><a href="#">Culinary Fruits</a> created by <a href="#">xcrazy14</a></p>
					</div>

					<div class="feed-box">
						<div class="feed-content">
							<span class="time">18 mins ago</span>
							<p class="feed-name">Avocado</p>
							<p><a href="http://en.wikipedia.org/wiki/Avocado">en.wikipedia.org</a></p>
						</div>
						<div class="bookmark feed-img">
							<a href="#" title="Avocado - Bookmark"><img  alt="" src="_images/_board_strips/Avocado.png"><span class="center middle large">Avocado</span>
							<div class="inner-border"></div></a>
						</div>
						<p class="feed-by">Added to <a href="#">Keto</a> by <a href="#">Diddy182</a></p>
					</div>
						
					<div class="feed-box">
						<div class="feed-content">
							<span class="time">21 hrs ago</span>
							<p class="feed-name">Goji Berry</p>
							<p><a href="http://en.wikipedia.org/wiki/Goji">en.wikipedia.org</a></p>
						</div>
						<div class="bookmark feed-img">
							<a href="#" title="Goji Berry - Bookmark"><img  alt="" src="_images/_board_strips/Goji-Berry.png"><span class="center middle large">Goji Berries</span>
							<div class="inner-border"></div></a>
						</div>
						<p class="feed-by">Added to <a href="#">My Favorites</a> by <a href="#">x1444</a></p>
					</div>	

					<div class="feed-box">
						<div class="feed-content">
							<span class="time">5 days ago</span>
							<p class="feed-name">Diddy182</p>
							<p><a href="">/u/diddy182</a></p>
						</div>
						<div class="bookmark feed-img">
							<a href="#" title="Diddy182 - User"><img  alt="" src="_images/_board_strips/user-bg.png"><span class="center middle stripe">Diddy182</span>
							<div class="inner-border"></div></a>
						</div>
						<p class="feed-by"><a href="#">Diddy182</a> has signed up!</p>
					</div>
				</div><!--feed-container-->
			</div><!--home-sec-->
		</div><!--home-wrap end-->

	<?php
	// Home footer contents here with JS included
	include '_includes/home_footer.php';
	?>
		
		
		
	