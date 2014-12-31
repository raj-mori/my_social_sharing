<?php
	$title = 'Index Page';
	$meta_desc= '';
	$body_background = '_images/webspasm_bgs/1.jpg';
	
	include '_includes/header.php';
?>

		<div class="content-wrap" id="new-bookmark">
			<!-- start panels section -->
			<div id="first-panel">
				<div class="title-section">
					<h2 class="page-title">Add New Bookmark
						<span class="hide">
							[<a href="#">Hide</a>]
						</span>
					</h2>
				</div>
				<div class="first-panel-content">	
					<div class="title-description">	
						<p>Adding a new bookmark on <a href="">/u/diddy182/keto</a> board</p>
					</div>	
					<div class="index-wrap">	
						<div class="index">
							<h4>Index</h4>
							<ul>
								<li class="fa fa-angle-right"><a href="#panel">Bookmark information</a></li>
								<li class="fa fa-angle-right"><a href="#panel2">Background settings</a></li>
								<li class="fa fa-angle-right"><a href="#panel3">Text settings</a></li>
								<li class="fa fa-angle-right"><a href="#panel4">Final preview</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<form>
				<div class="panel" id="panel">
					<h2 class="board-title">Bookmark Information		
						<span class="hide">
							[<a id="togButton">Hide</a>]
						</span>
					</h2>
					<p>Step One: Enter in an url of the bookmark.</p>
					<div class="bookmark-input-center">
						<div class="input-icon">
							<input type="text" placeholder="http://...">
							<span class="fa fa-external-link"></span>
						</div>
						<div class="input-icon">
							<input type="text" placeholder="Tags">
							<span class="fa fa-tags"></span>
						</div>
						<div class="custom-select">
							<span class="selected">Our Solar System</span>
							<span class="fa fa-caret-down"></span>
							<ul id="select-category">
								<li>Our Solar System</li>
								<li>Keto</li>
								<li>Culinary fruits</li>
								<li>Animals</li>
							</ul>
						</div>
						<input type="checkbox" id="private">
						<label for="private">Private</label>
						<br>
						<p class="center">Or link to another board</p>
						<div class="input-icon">
							<input type="text" placeholder="http://...">
							<span class="fa fa-link"></span>
						</div>
					</div>
				</div>
				
				<div class="panel" id="panel2">
					<h2 class="board-title">Background Settings		
						<span class="hide">
							[<a id="togButton">Hide</a>]
						</span>
					</h2>
					<p>Step Two: Choose a background for the bookmark</p>
					<div class="bookmark-input">
						<div class="choose-image">
							<div class="input-icon">
								<input type="text" placeholder="http://...">
								<span class="fa fa-external-link"></span>
							</div>
							<input type="submit" class="button" value="Get From URL">
						</div>
						<p class="center">Or upload an image from your computer</p>
						<div class="bg-drag-box">
							<p class="center"> + Drag and drop your image here</p>
						</div>
						<div class="bg-colors-select">
							<p>Or select a color</p>
							<a href=""><div style="background-color: white;"></div></a>
							<a href=""><div style="background-color: #ea1010;"></div></a>
							<a href=""><div style="background-color: #f1721d;"></div></a>
							<a href=""><div style="background-color: #fbfb52;"></div></a>
							<a href=""><div style="background-color: #008100;"></div></a>
							<a href=""><div style="background-color: #0000ff;"></div></a>
							<a href=""><div style="background-color: #810082;"></div></a>
							<a href=""><div style="background-color: black;"></div></a>
						</div>
					</div>
					<div class="bookmark-preview">
						<div id="preview1">
							<span>Preview</span>
							<div class="bookmark">
								<a href="#"><img  alt="" src="_images/_board_strips/Sun.png">
								<div class="inner-border"></div></a>
							</div>
							<span class="drag-text">Click to drag</span><div class="zoom-drag"><a href="" class="less">-</a><div class="scroll-container">100%</div><a href="" class="more">+</a></div>
						</div>
					</div>
				</div>

				<div class="panel" id="panel3">
					<h2 class="board-title">Text Settings		
						<span class="hide">
							[<a id="togButton">Hide</a>]
						</span>
					</h2>
					<p>Step Three: Add some text</p>
					<div class="bookmark-input">
						<table class="add-text">
							<tr>
								<th>Text</th>
								<th>Vertical</th>
								<th>Horizontal</th>
								<th>Size</th>
								<th></th>
							</tr>
							<tr>
								<td>
									<input type="text">
								</td>
								<td>
									<div class="custom-select">
										<span class="selected">Middle</span>
										<span class="fa fa-caret-down"></span>
										<ul name="vertical-position">
											<li>Middle</li>
											<li>Top</li>
											<li>Bottom</li>
										</ul>
									</div>
								</td>
								<td>
									<div class="custom-select">
										<span class="selected">Center</span>
										<span class="fa fa-caret-down"></span>
										<ul name="horizontal-position">
											<li>Center</li>
											<li>Left</li>
											<li>Right</li>
										</ul>
									</div>
								</td>
								<td>
									<div class="custom-select">
										<span class="selected">14</span>
										<span class="fa fa-caret-down"></span>
										<ul name="font-size">
											<li>12</li>
											<li>14</li>
											<li>16</li>
											<li>18</li>
											<li>20</li>
											<li>22</li>
											<li>24</li>
											<li>26</li>
										</ul>
									</div>
								</td>
								<td>
									<button class="warning button"><span class="fa fa-times"></span></button>
								</td>
							</tr>
							<tr>
								<td>
									<input type="text">
								</td>
								<td>
									<div class="custom-select">
										<span class="selected">Middle</span>
										<span class="fa fa-caret-down"></span>
										<ul name="vertical-position">
											<li>Middle</li>
											<li>Top</li>
											<li>Bottom</li>
										</ul>
									</div>
								</td>
								<td>
									<div class="custom-select">
										<span class="selected">Center</span>
										<span class="fa fa-caret-down"></span>
										<ul name="horizontal-position">
											<li>Center</li>
											<li>Left</li>
											<li>Right</li>
										</ul>
									</div>
								</td>
								<td>
									<div class="custom-select">
										<span class="selected">14</span>
										<span class="fa fa-caret-down"></span>
										<ul name="font-size">
											<li>12</li>
											<li>14</li>
											<li>16</li>
											<li>18</li>
											<li>20</li>
											<li>22</li>
											<li>24</li>
											<li>26</li>
										</ul>
									</div>
								</td>
								<td>
									<button class="warning button"><span class="fa fa-times"></span></button>
								</td>
							</tr>
							<tr>
								<td colspan="5">
									<a href="" class="button more-text">+ Add More Text</a>
								</td>
							</tr>
						</table>
						
					</div>
					<div class="bookmark-preview">
						<div id="preview2">
							<span>Preview</span>
							<div class="bookmark">
								<a href="#"><img  alt="" src="_images/_board_strips/Sun.png">
									<span class="middle center large">Sun</span>
								<div class="inner-border"></div></a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel last-preview" id="panel4">
					<h2 class="board-title">Final Preview		
						<span class="hide">
							[<a id="togButton">Hide</a>]
						</span>
					</h2>
					<div class="bookmark" id="preview3">
							<a href="#"><img  alt="" src="_images/_board_strips/Sun.png">
								<span class="middle center large">Sun</span>
							<div class="inner-border"></div></a>
						</div>
					<input type="submit" value="Add Bookmark" class="button">
				</div>
			</form>

			<?php include '_includes/footer.php';?>

		</div><!-- End content-wrapper -->
	</body>
</html>