<?php
	$title = 'Index Page';
	$meta_desc= '';
	$body_background = '_images/webspasm_bgs/1.jpg';
	
	include '_includes/header.php';
?>

	<!--panels content-->
	<div class="content-wrap board-edit" id="board">
			<div id="first-panel">
				<form>
					<div class="title-section">
						<h2 class="page-title"><input type="text" value="Keto Diet" placeholder="Board Title" name="board-title">
							<span class="hide">
								[<a href="#">Hide</a>]
							</span>
						</h2>
					</div>	
				
					<div class="first-panel-content">	
						<div class="title-description">	
							<p>Created by <a href="">Diddy182</a></p>
						</div>	
						
						<div class="sidebar">
							<div class="bookmark">
								<a href="#"><img  alt="" src="_images/_board_strips/Keto-Diet.png"><span class="stripe bottom left">Keto Diet</span>
								<div class="inner-border"></div></a>
							</div>
							<p class="followers">188 followers</p>
						</div>
						<div class="panel-info">
							<h2 class="board-info">Board Information</h2>
							<div class="board-info-edit">
								<textarea placeholder="Board description" name="" >
A Ketogenic Diet is any diet that causes ketones to be produced by the liver, shifting the body’s metabolism away from glucose towards fat utilization.

Typically on a moderate to high carb diet, the body will prefer glucose for fuel (usually from dietary carbs), but by restricting carbs, the body will prefer fat for fuel. By inducing ketosis, a series of adaptations will take place.
								</textarea>
								<div class="editor-bar">
									<div class="editor-icons">
										<a href="" class="fa fa-bold"></a><a href="" class="fa fa-italic"></a><a href="" class="fa fa-underline"></a>
										<a href="" class="fa fa-list-ul"></a><a href="" class="fa fa-chain"></a>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="index-wrap">	
								<div class="index">
									<h4>Index</h4>
									<ul>
										<li class="fa fa-angle-right"><a href="#panel">Education &amp; Information</a></li>
										<li class="fa fa-angle-right"><a href="#panel2">Large Recipes Websites</a></li>
										<li class="fa fa-angle-right"><a href="#panel3">Popular Recipes</a></li>
										<li class="fa fa-angle-right"><a href="#panel4">Cheat Sheets</a></li>
										<li class="fa fa-angle-right"><a href="#panel5">5th Link</a></li>
									</ul>
								</div>
							</div>
								
							<span class="rev">Revised Sept 14th, 2015</span>
					
						</div>
				
						<div class="sidebar related board-settings">
							<h2><strong>Board Settings</strong></h2>
							<ul>
								<li class="fa fa-image"><a href="">Edit Background</a></li>
								<li class="fa fa-lock"><a href="">Edit Password</a></li>
								<li class="fa fa-bookmark"><a href="">Add Bookmark</a></li>
								<li class="fa fa-plus-square"><a href="">Add Panel</a></li>
								<li class="fa fa-close"><a href="">Delete Board</a></li>
								<li class="fa fa-save"><a href="">Save Changes</a></li>
							</ul>
						</div>
					</div>
				</form>
			</div><!-- End first-panel section-->
		
			<!--start individual panels -->
			<div id="panel" class="panel">
				<h2 class="board-title">A -> G
					<span class="hide">
						[<a id="togButton">Hide</a>]
					</span>
				</h2>
				<div class="bookmarks">
					<div class="image-wrap">
						<div class="bookmark">
							<a href="#" title="Cantaloupe - Bookmark"><img  alt="" src="_images/_board_strips/Cantaloupe.png"><span class="middle center large">Cantaloupe</span>
							<div class="inner-border"></div></a>
						</div>
					</div>
				</div>
			</div><!--end panel content-->
		
			<div id="panel2" class="panel">
				<h2 class="board-title">H -> M
					<span class="hide">
						[<a id="togButton1">Hide</a>]
					</span>
				</h2>
				<div class="bookmarks">
					<div class="image-wrap">
						<div class="bookmark">
							<a href="#" title="Lemon - Bookmark"><img  alt="" src="_images/_board_strips/Lemon.png"><span class="middle center large">Lemon</span>
							<div class="inner-border"></div></a>
						</div>
					</div>
					<div class="image-wrap">
						<div class="bookmark">
							<a href="#" title="Lime - Bookmark"><img  alt="" src="_images/_board_strips/Lime.png"><span class="middle center large">Lime</span>
							<div class="inner-border"></div></a>
						</div>
					</div>
				</div>
			</div> <!--end panel content-->
		
			<div id="panel3" class="panel">
				
				<h2 class="board-title">N -> S
					<span class="hide">
						[<a id="togButton2">Hide</a>]
					</span>
				</h2>
				<div class="bookmarks"></div>
			</div><!--end panel content-->
		
			<div id="panel4" class="panel">
				<h2 class="board-title">T -> Z
					<span class="hide">
						[<a id="togButton3">Hide</a>]
					</span>
				</h2>
				<div class="bookmarks">
					<div class="image-wrap">
						<div class="bookmark">
							<a href="#" title="Watermelon - Bookmark"><img  alt="" src="_images/_board_strips/Watermelon.png"><span class="middle center large">Watermelon</span>
							<div class="inner-border"></div></a>
						</div>
					</div>
				</div>
			</div><!--end individual panels -->

			<?php include '_includes/footer.php';?>
	
		</div>
	</body>
</html>