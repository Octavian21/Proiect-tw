<!DOCTYPE html>
<html lang="en">
    <?php
    include 'views/head.php'
    ?>
    <body id="body">
        <?php
            include 'views/top_nav.php'
            ?>
        <div class="container">
            <div class="left-side">
                <div class="search-bar">
                    <input type="text" placeholder="Find answers and questions">
                    <img src="images/search.svg" alt="search">
                </div>
                <?php
                    include 'views/top_left.php'
                    ?>
            </div>

            <div class="right-side">
                <a class="ask" href="add_question.php">Ask a question</a>
                <div class="popular-content">
                    <div class="popular-body">
                        <div class="popular results"> Results for <b>How to learn python bla bla bla bla</b></div>
                        <div class="box-popular"> 10 results </div>
                    </div>
                </div>
                <div class="container-questions">
                    <?php
                    include 'views/question.php'
                    ?>
                    <?php
                    include 'views/question.php'
                    ?>
                    <?php
                    include 'views/question.php'
                    ?>
                </div>
                <?php
                    include 'views/button.php'
                    ?>
            </div>
        </div>
        <?php
            include 'views/footer.php'
            ?>

    <?php
        include 'model/login.php'
        ?>
    </body>

</html>