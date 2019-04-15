<!DOCTYPE html>
<html lang="en">
    <?php
    include 'views/head.php'
    ?>
    <body>
        <?php
        include 'views/top_nav.php'
        ?>
        <article class="user">
            <div class="user-box">
                <a id="user-foto"><img src="images/user.png" alt="picture"></a><br>
                <div class="username">
                    Stefania
                </div><br>
                <div class="contact">
                    stefania@flowerpower.com
                </div><br>
                <div class="contact">
                    Tara: Romania
                </div>
                <div class="interese">
                    <p>Good knwoledge about:
                        <ul>
                            <li>Computer Science</li>
                            <li>Family</li>
                            <li>Food</li>
                            <li>Business</li>
                        </ul>
                    </p>

                </div>
                <div class="premii">
                    <p>Badges for:</p>
                    <p class="badge">Fastest response</p>
                </div>
            </div>
        </article>

        <?php
        include 'views/footer.php'
        ?>
    </body>

</html>