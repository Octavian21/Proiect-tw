<?php
include_once("app/controllers/ForgotController.php");
$forgotController = new ForgotController();
$forgotController->setPassword();
?>

<script>
    $(document).ready(function() {
        $('#forgot-form').on('submit', function(e) {

        });
    });
</script>

<div id="forgot" class="modal">
    <div class="modal-content">
        <form onsubmit="onSubmitReset(event)" class="account-form" id="forgot-form">
            <span onclick="onCloseReset()" class="close-button">&times;</span>
            <div class="form-title">FORGOT PASSWORD</div>
            <input class="form-field" type="text" id="forgot-username" placeholder="Username">
            <input class="form-field" type="text" id="forgot-email" placeholder="email">

            <?php
            if (isset($_SESSION['forgot-error'])) {
                echo "<span id=\"forgot-error\">" . $_SESSION['forgot-error'] . "</span>";
                ?>
                <script>
                    document.getElementById('forgot').style.display = 'block';
                </script>

            <?php } ?>

            <input class="form-button" type="submit" value="Reset">
        </form>
    </div>
</div>

<script>
    function onCloseReset() {
        document.getElementById('forgot').style.display = 'none';
        document.getElementById('login').style.display = 'none';
        document.getElementById('forgot-error').remove();

        $.ajax({
            type: "GET",
            url: "app/unset_error.php",
            data: null
        });
    }

    function onSubmitReset(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: 'index.php',
            data: {
                username: $('#forgot-username').val(),
                email: $('#forgot-email').val(),
                forgot: true
            },
            success: function(data) {
                window.location.reload();
            }
        });
    }
</script>