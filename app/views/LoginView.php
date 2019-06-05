<?php
include_once("app/controllers/LoginController.php");
$loginController = new LoginController();
$loginController->login();
?>

<div id="login" class="modal">
    <div class="modal-content">
        <form onsubmit="onSubmitLogin(event)" class="account-form" id="login-form">
            <span onclick="onCloseLogin();" class="close-button">&times;</span>
            <div class="form-title">WELCOME BACK</div>
            <img class="form-img" src="images/user.png" alt="user">
            <input class="form-field" type="text" id="login-username" placeholder="Username">
            <input class="form-field" type="password" id="login-password" placeholder="Password">
            <?php
            if (isset($_SESSION['login-error'])) {
                echo "<span id=\"login-error\">" . $_SESSION['login-error'] . "</span>";
                ?>
                <script>
                    document.getElementById('login').style.display = 'block';
                </script>

            <?php } ?>
            <input class="form-button" type="submit" value="Log In">
            <button onclick="document.getElementById('forgot').style.display = 'block'; document.getElementById('login').style.display='none'; onCloseLogin();" class="forgot-pass"> <a href="#">Forgot Password?</a> </button>
        </form>
    </div>
</div>
<script>
    function onCloseLogin() {
        document.getElementById('login').style.display = 'none';
        document.getElementById('login-error').remove();

        $.ajax({
            type: "GET",
            url: "app/unset_error.php",
            data: null
        });
    }

    function onSubmitLogin(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: {
                username: $('#login-username').val(),
                password: $('#login-password').val(),
                login: true
            },
            success: function(data) {
                window.location.reload();
            }
        });
    }
</script>