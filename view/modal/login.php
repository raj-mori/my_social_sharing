<div class="modal">
    <a href="" class="close-button" title="Close"><img src="_images/modal-close.png" alt="X" class="close-button"></a>
    <p class="modal-logo"><img src="_images/modal-logo.png" alt="Webspasm"></p>
    <h3>Login</h3>
    <p <?php if(isset($_POST['force']) && $_POST['force'] == 'false') {?> style="display:none;" <?php }?>>Please login to continue.</p>
    <form action="ajax/user" id="login-form" method="post">
        <input type="hidden" name="method" value="login">
        <div class="input-icon">
            <input type="text" placeholder="Username" name="username" class="required">
            <span class="fa fa-user"></span>
        </div>
        <label class="wrong-input" style="display:none;" name="username">We couldn't find anyone by that username.</label>
        <div class="input-icon">
            <input type="password" placeholder="Password" name="password" class="required">
            <span class="fa fa-lock"></span>
        </div>
        <label class="wrong-input" style="display:none;" name="password">Try a different password.</label><br>
        <span class="left"><input type="checkbox" id="stay-signed" name="stay_signed" value="true"><label for="stay-signed">Stay Signed In</label></span>
        <span class="right"><a href="" class="forgot-pass">Forgot Password?</a></span>
        <input type="submit" id="log-in-submit" value="Log In!" class="button">
    </form>
    <p class="center">
        <span class="small">Or create an account today for free!</span><br>
        <a href="" class="sign-up button">Sign Up!</a>
    </p>
    <?php include '../_includes/tiny_footer.php'; ?>
</div>

<script>
    $('#login-form').ajaxForm({
        beforeSubmit: function(arr, form, options) {
            return CheckForm(form);
        },
        success: function(data) {
            data = JSON.parse(data);
            error = ParseModalReturn(data)
        }
    });
</script>