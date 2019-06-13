<?php
include_once("app/controllers/CreateAccountController.php");
$createAccountController = new CreateAccountController();
$createAccountController->createAccount();
?>

<div id="crtaccount" class="modal">
    <div class="modal-content">
        <form onsubmit="onSubmitCreateAccount(event)" class="account-form" id="signup-form">
            <span onclick="onCloseCreateAccount()" class="close-button">&times;</span>
            <div class="form-title">Nice to meet you!</div>
            <img class="form-img" src="images/user.png" alt="user">
            <input class="form-field" type="text" id="crtaccount-email" placeholder="email">
            <input class="form-field" type="text" id="crtaccount-tara" placeholder="country">
            <input class="form-field" type="text" id="crtaccount-username" placeholder="Username">
            <input class="form-field" type="password" id="crtaccount-password" placeholder="Password">
            <input class="form-field" type="password" id="crtaccount-newpassword" placeholder="Confirm password">

            <?php
            if (isset($_SESSION['crtaccount-error'])) {
                echo "<span id=\"crtaccount-error\">" . $_SESSION['crtaccount-error'] . "</span>";
                ?>
                <script>
                    document.getElementById('crtaccount').style.display = 'block';
                </script>

            <?php } ?>

            <input class="form-button" type="submit" value="Sign up">
        </form>
    </div>
</div>

<script>
    function onCloseCreateAccount() {
        document.getElementById('crtaccount').style.display = 'none';
        document.getElementById('crtaccount-error').remove();

        $.ajax({
            type: "GET",
            url: "app/unset_error.php",
            data: null
        });
    }

    function onSubmitCreateAccount(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: {
                email: $('#crtaccount-email').val(),
                tara: $('#crtaccount-tara').val(),
                username: $('#crtaccount-username').val(),
                password: $('#crtaccount-password').val(),
                newpassword: $('#crtaccount-newpassword').val(),
                crtaccount: true
            },
            success: function(data) {
                window.location.reload();
            }
        });
    }
</script>