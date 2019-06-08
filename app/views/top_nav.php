<div class="top-nav">
    <div class="left">
        <a onclick="onClose()" id="logo" href="index.php"><img src="images/logo.png" alt=""></a>
        <div class="mobile-menu">
            <button onclick="document.getElementById('mobile-dropMenu').style.display='flex'">&#9776;</button>
        </div>

        <div class="dropMenu">
            Questions and Answers?
            <ul>
                <li> <a href="categories.php"> Categories </a> </li>
                <li> <a href="filters.php"> Without answer </a> </li>
                <li> <a href="filters.php"> Without badge </a> </li>
                <li> <a href="filters.php"> Popular </a> </li>
            </ul>
        </div>
    </div>

    <?php include 'app/views/LoginView.php' ?>

    <?php include 'app/views/CreateAccountView.php' ?>

    <?php include 'app/views/ForgotView.php' ?>

    <?php
    if (isset($_SESSION['login'])) {
        if ($_SESSION['login'] == 0) {
            ?>
            <div id="menu1" class="right">
                <button onclick="document.getElementById('crtaccount').style.display='block'" class="crtButton">Create
                    account</button>
                <button onclick="document.getElementById('login').style.display = 'block'" class="lgnButton">
                    Log In</button>
            </div>
        <?php } else { ?>
            <div id="menu2" class="right">
                <img src="images/user.png" alt="user">
                <button class="username"><a href="user.php">
                        <?php
                        if (isset($_SESSION['login-nume']))
                            echo ($_SESSION['login-nume']); ?> </a></button>
                <button class="lgnButton"> <a href="logout.php">Logout</a> </button>
            </div>
        <?php }
} ?>
</div>

<div id="mobile-dropMenu">
    <button id="qa">Questions and Answers?</button>
    <ul id="qa-submeniu">
        <li> <a href="categories.php"> Categories </a> </li>
        <li> <a href="withoutanswer.php"> Without answer </a> </li>
        <li> <a href="withoutbadge.php"> Without badge </a> </li>
        <li> <a href="popular.php"> Popular </a> </li>
    </ul>
    <button onclick="document.getElementById('crtaccount').style.display='block'">Create account</button>
    <button onclick="document.getElementById('login').style.display='block';
                                             document.getElementById('menu1').style.display='none'">Log In</button>
</div>

<script>
    var modal1 = document.getElementById('login');
    var modal2 = document.getElementById('crtaccount');
    var qa = document.getElementById('qa');

    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = 'none';
        }

        if (event.target == modal2) {
            modal2.style.display = 'none';
        }

        if (event.target == qa) {
            var submeniu = document.getElementById('qa-submeniu');
            if (submeniu.style.display == 'none')
                submeniu.style.display = 'block';
            else
                submeniu.style.display = 'none';
        }
    }

    function onClose() {
        document.getElementById('add-question-error').remove();
        $.ajax({
            type: "GET",
            url: "app/unset_error.php",
            data: null
        });
    }
</script>