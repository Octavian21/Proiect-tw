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
                <div class="categories-content">
                    <div class="categories">Categories</div>
                    <a class="categories title" href="namecategory.php"> Beauty&Fashion </a>
                    <a class="categories title" href="namecategory.php"> Business </a>
                    <a class="categories title" href="namecategory.php"> Computer Science </a>
                    <a class="categories title" href="namecategory.php"> Family </a>
                    <a class="categories title" href="namecategory.php"> Food </a>
                    <a class="categories title" href="namecategory.php"> Miscellaneous </a>
                    <a class="categories title" href="namecategory.php"> Teenagers </a>
                </div>
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