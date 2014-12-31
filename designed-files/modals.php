<?php
	$title = 'Index Page';
	$meta_desc= '';
	$body_background = '_images/webspasm_bgs/1.jpg';
	
	include '_includes/header.php';
	?>

<div class="content-wrap">
<h2 class="center">Bookmark</h2>

<div class="modal remove">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Remove Bookmark</h3>
	<p>Are you sure you want to delete this bookmark?</p>
	<form action="" id="delete-bookmark">
		<input type="submit" value="Delete Bookmark" id="delete-bookmark-submit" class="button">
	</form>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>


<h2 class="center">Remove Board </h2>

<div class="modal remove">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Remove Board</h3>
	<p>Are you sure you want to delete this board?</p>
	<form action="" id="delete-board">
		<input type="submit" value="Remove Board" id="delete-board-submit" class="button">
	</form>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>

<h2 class="center">Remove Panel</h2>

<div class="modal remove">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Remove Panel</h3>
	<p>Are you sure you want to delete this panel?</p>
	<form action="" id="delete-panel">
		<input type="submit" value="Remove Panel" id="delete-panel-submit" class="button">
	</form>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>

<h2 class="center">Unfollow Bookmark</h2>

<div class="modal unfollow">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Unfollow [BOARD]</h3>
	<p>Are you sure you want to unfollow BOARD NAME?</p>
	<form action="" id="unfollow-board">
		<input type="submit" value="Unfollow Board" id="unfollow-board-submit" class="button">
	</form>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>

<h2 class="center">Unfollow User</h2>

<div class="modal unfollow">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Unfollow [USER]</h3>
	<p>Are you sure you want to unfollow USERNAME?</p>
	<form action="" id="unfollow-user">
		<input type="submit" value="Unfollow User" id="unfollow-user-submit" class="button">
	</form>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>



<h2 class="center">Change/add Password</h2>

<div class="modal" id="change-password">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Update Board Password</h3>
	<p>Change board password.</p>
	<form action="" id="change-password-form">
		<div class="input-icon">
			<input type="password" placeholder="Old Board Password">
			<span class="fa fa-lock"></span>
		</div>
		
		<div class="input-icon">
			<input type="password" placeholder="New Board Password">
			<span class="fa fa-lock"></span>
		</div>
		
		<div class="input-icon">
			<input type="password" placeholder="New Board Password Again">
			<span class="fa fa-lock"></span>
		</div>
		
		<input type="submit" value="Update Password" class="button">
		<input type="submit" value="Remove Password" class="button">
	</form>
	<?php  
		include '_includes/tiny_footer.php'; 
	?>
</div>


<h2 class="center">Create new board</h2>

<div class="modal">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Create New Board</h3>
	<form action="" id="create-board">
		<div class="input-icon">
			<input type="text" placeholder="Board Title">
			<span class="fa fa-lock"></span>
		</div>
		<label class="board-name">webspasm.com/u/diddy182/board-title</label>
		<textarea placeholder="Board Information"></textarea>
		<input type="checkbox" id="private"><label for="private">Private</label><br>
		<div class="input-icon">
			<input type="password" placeholder="Board Password">
			<span class="fa fa-lock"></span>
		</div>
		<div class="input-icon">
			<input type="password" placeholder="Board Password Again">
			<span class="fa fa-lock"></span>
		</div>
		<input type="submit" value="Create Board" class="button">
	</form>
	<?php  
	include '_includes/tiny_footer.php'; 
	?>
</div>


<h2 class="center">Board password </h2>

<div class="modal">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Enter Board Password</h3>
	<p>This board requires a password to view.</p>
	<form action="" id="private-board-pass">
		<div class="input-icon">
			<input type="password" id="private-password">
			<span class="fa fa-lock"></span>
		</div>
		<input type="submit" value="Enter Password" id="private-board-submit" class="button">
		<input type="checkbox" id="remember"><label for="remember">Remember This Computer</label>
	</form>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>

<h2 class="center">Login box</h2>

<div class="modal">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Login</h3>
	<p>Please login to continue.</p>
	<form action="" id="login-form">
		<div class="input-icon">
			<input type="text" placeholder="Username">
			<span class="fa fa-user"></span>
		</div>
		<label class="wrong-input">We couldn't find anyone by that username.</label>
		<div class="input-icon wrong-input">
			<input type="password" placeholder="Password">
			<span class="fa fa-lock"></span>
		</div>
		<label class="wrong-input">Try a different password.</label><br>
		<span class="left"><input type="checkbox" id="stay-signed"><label for="stay-signed">Stay Signed In</label></span>
		<span class="right"><a href="" class="forgot-pass">Forgot Password?</a></span>
		<input type="submit" id="log-in-submit" value="Log In!" class="button">
	</form>
	<p class="center">
		<span class="small">Or create an account today for free!</span><br>
		<a href="" class="sign-up button">Sign Up!</a>
	</p>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>

<h2 class="center">Forgot password</h2>

<div class="modal">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Forgot Password</h3>
	<p>Enter in your email to reset your password.</p>
	<form action="" id="forgot-password-form">
		<div class="input-icon">
			<input type="text" id="forgot-password">
			<span class="fa fa-envelope-o"></span>
		</div>
		<input type="submit" id="forgot-password-submit" value="Reset Password" class="button">
	</form>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>

<h2 class="center">Forgot password2</h2>

<div class="modal">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Password Reset</h3>
	<p>We have sent you an email with a way to reset your password. Please check your email. If you don't receive an email within 24 hours please contact support. Make sure to check your spam box. </p>
	<p class="center">	
		<a href="" class="button">Okay</a>
		<a href="" class="button">Contact Support</a>
	</p>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>

<h2 class="center">Enable adult content</h2>

<div class="modal">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Enable Adult Content</h3>
	<p>This Site is for adults only! By entering this Site, you agree to the following terms and conditions: You certify that you are 18 years of age or older, and are not offended by sexually explicit imagery. You agree that you will not permit any person(s) under 18 years of age to have access to any of the materials contained within this Site.</p>
	<p class="center">	
		<a href="" class="button">Yes I am 18+</a>
		<a href="" class="button warning">No I'm not 18 yet</a>
	</p>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>

<h2 class="center">Sign up</h2>

<div class="modal" id="sign-up">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Sign Up</h3>
	<p>Become an addict today!</p>
	<form action="" id="create-account">
		<div class="input-icon">
			<input type="text" placeholder="Username">
			<span class="fa fa-user"></span>
		</div>

		<div class="input-icon">
			<input type="password" placeholder="Password">
			<span class="fa fa-lock"></span>
		</div>

		<div class="input-icon">
			<input type="password" placeholder="Password Again">
			<span class="fa fa-lock"></span>
		</div>

		<div class="input-icon">
			<input type="text" placeholder="Email">
			<span class="fa fa-envelope-o"></span>
		</div>

		<input type="checkbox" id="terms-agree"><label for="terms-agree">I agree to <a href="/terms.php">Webspasm's Terms</a></label>
		<input type="submit" id="create-account-submit" value="Create an Account!" class="button">
	</form>
	<p class="center">
		<span class="small">Or if you already have an account:</span><br>
		<a href="" class="sign-up button">Login</a>
	</p>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>

<h2 class="center">Account settings</h2>

<div class="modal" id="account-settings">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Account Settings</h3>
	<form action="">
		<div class="input-icon">
			<input type="text" placeholder="Email" id="email">
			<span class="fa fa-envelope-o"></span>
		</div>
		<ul>
			<li>
				<input type="checkbox" id="enable-adult">
				<label for="enable-adult">Enable Adult Content</label>
			</li>
			<li>
				<input type="checkbox" id="user-private">
				<label for="user-private">Make My User Page Private</label>
				<div class="input-icon">
					<input type="password" placeholder="Board Password">
					<span class="fa fa-lock"></span>
				</div>
				<div class="input-icon">
					<input type="password" placeholder="Board Password Again">
					<span class="fa fa-lock"></span>
				</div>
			</li>
			<li>
				<a href="">Change Password</a>
			</li>
			<li>
				<a href="">Change User Bookmark Background</a>
			</li>
		</ul>
		<input type="submit" value="Save Changes" class="button save">
	</form>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>

<h2 class="center">Report</h2>

<div class="modal report">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Report</h3>
	<form action="">
		<input type="submit" value="Spam" class="button">
		<input type="submit" value="Doesn't Belong" class="button">
		<input type="submit" value="Bug/Problem" class="button">
		<input type="submit" value="Illegal/Inappropriate" class="button">
		<input type="submit" value="Other" class="button">
		<textarea></textarea>
		<input type="submit" value="Send report" id="report-submit" class="button">
	</form>
	<?php  include '_includes/tiny_footer.php'; ?>
</div>

<h2 class="center">Report Sent</h2>

<div class="modal">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Report sent</h3>
	<p>Your report has been sent to the mods. They will take a look at it as soon as possible. Thank you!</p>
	<button class="button warning close">Close</button>
	<?php  
		include '_includes/tiny_footer.php'; 
	?>
</div>

<h2 class="center">Change Password</h2>

<div class="modal">
	<a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
	<p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
	<h3>Change Your Password</h3>
	<form action="">
		<div class="input-icon">
			<input type="password" placeholder="Old Password">
			<span class="fa fa-lock"></span>
		</div>
		
		<div class="input-icon">
			<input type="password" placeholder="New Password">
			<span class="fa fa-lock"></span>
		</div>
		
		<div class="input-icon">
			<input type="password" placeholder="New Password Again">
			<span class="fa fa-lock"></span>
		</div>
		
		<input type="submit" value="Update Password" class="button">
	</form>
	<?php  
		include '_includes/tiny_footer.php'; 
	?>
</div>




</div>

</body>
</html>