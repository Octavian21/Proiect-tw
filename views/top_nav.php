<div class="top-nav">
    <div class="left">
        <a id="logo" href="index.php"><img src="images/logo.png" alt=""></a>
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
    <div id="menu1" class="right">
        <button onclick="document.getElementById('crtaccount').style.display='block'" class="crtButton">Create
            account</button>
        <button onclick="document.getElementById('login').style.display='block';
                             document.getElementById('menu1').style.display='none'" class="lgnButton">Log In</button>
    </div>
    <div id="menu2" class="right">
        <img src="images/user.png" alt="user">
        <button class="username"><a href="pagina_user.php"> Diana </a></button>
    </div>
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

<div id="login" class="modal">
    <div class="modal-content">
        <!-- schimba div cu form-->
        <div class="account-form" name="loginForm">
            <span onclick="document.getElementById('login').style.display='none'" class="close-button">&times;</span>
            <div class="form-title">WELCOME BACK</div>
            <img class="form-img" src="images/user.png" alt="user">
            <input class="form-field" type="text" name="username" placeholder="Username">
            <input class="form-field" type="password" name="password" placeholder="Password">
            <button onclick="document.getElementById('menu2').style.display='flex';
                                 document.getElementById('login').style.display='none'" class="form-button"
                type="submit">Log In</button>
            <a href="#">Forgot Username/ Password?</a>
        </div>
    </div>
</div>
<div id="crtaccount" class="modal">
    <div class="modal-content">
        <form class="account-form" name="signupForm">
            <span onclick="document.getElementById('crtaccount').style.display='none'"
                class="close-button">&times;</span>
            <div class="form-title">Nice to meet you!</div>
            <img class="form-img" src="images/user.png" alt="user">
            <input class="form-field" type="text" name="email" placeholder="email">
            <input class="form-field" type="text" name="tara" placeholder="country">
            <input class="form-field" type="text" name="username" placeholder="Username">
            <input class="form-field" type="password" name="password" placeholder="Password">
            <input class="form-field" type="password" name="password" placeholder="Confirm password">
            <button class="form-button" type="submit">Sign Up</button>
            <a href="#">Already have an account?</a>
        </form>
    </div>
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
</script>