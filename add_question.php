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
                <div class="add-question">
                    <div class="question-image">
                        <img src="images/user.png" alt="user"><b>Ask question as </b><a class="username" href="">Anon</a>
                    </div>
                    <select required>
                        <option value="">Select Categorie</option>
                        <option value="food">Food</option>
                        <option value="computer_science">Computer Science</option>
                        <option value="teenager">Teenagers</option>
                        <option value="family">Family</option>
                        <option value="business">Business</option>
                        <option value="miscellaneous">Miscellaneous</option>
                        <option value="beauty&fashion">Beauty&Fashion</option>
                    </select>

                    <div>
                        <textarea id="quest" maxlength="1000" minlength="1" spellcheck="true"
                            placeholder="Enter your question here!"></textarea>
                    </div>

                    <div class="submitButton-box">
                        <div id="charactersRemaining">1000 </div>
                        <p>characters remaining</p>
                        <script>
                        var el;

                        function countCharacters(e) {
                            var textEntered, countRemaining, counter;
                            textEntered = document.getElementById('quest').value;
                            counter = (1000 - (textEntered.length));
                            countRemaining = document.getElementById('charactersRemaining');
                            countRemaining.textContent = counter;
                        }
                        el = document.getElementById('quest');
                        el.addEventListener('keyup', countCharacters, false);
                        </script>

                        <button onclick="myFunction()" class="submitButton">Submit Question!</button>
                    </div>
                </div>
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