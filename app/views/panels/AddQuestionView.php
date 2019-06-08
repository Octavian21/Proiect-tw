<?php
include_once("app/controllers/AddQuestionController.php");

$addQuestionController = new AddQuestionController();

$addQuestionController->insertQuestion();


?>
<div class="right-panel">
    <div class="add-question">
        <form onsubmit="onSubmitQuestion(event)" class="add-question-body" id="add-question-form">
            <div class="question-top">
                <img src="images/user.png" alt="user">
                <div class="name">
                    <a href="user.php" style="color:white"> Ask question as
                        <b>
                            <?php
                            if ($_SESSION['login'] == 0)
                                echo $_SESSION['anonim-nume'];
                            else
                                echo ($_SESSION['login-nume']); ?>
                        </b>
                    </a>
                </div>
            </div>
            <select id="add-question-categories" form="add-question-form">
                <option>Food</option>
                <option>Computer Science</option>
                <option>Teenagers</option>
                <option>Family</option>
                <option>Business</option>
                <option>Miscellaneous</option>
                <option>Beauty&Fashion</option>
            </select>

            <textarea class="add-question-text" id="quest" onkeyup="countCharacters(event);" maxlength="1000" minlength="1" spellcheck="true" placeholder="Enter your question here!"></textarea>
            <?php
            if (isset($_SESSION['add-question-error']))
                echo "<span id=\"add-question-error\">" . $_SESSION['add-question-error'] . "</span>";
            ?>
            <div class="add-question-bottom">
                <div class="characters-group">
                    <div id="charactersRemaining">800 </div>
                    <p>characters remaining</p>
                </div>
                <input type="submit" class="submitButton" value="Submit Question!">
            </div>
        </form>
    </div>
</div>

<script>
    function countCharacters(e) {
        var textEntered, countRemaining, counter;
        textEntered = document.getElementById('quest').value;
        counter = (800 - (textEntered.length));
        countRemaining = document.getElementById('charactersRemaining');
        countRemaining.textContent = counter;
    }

    function onSubmitQuestion(event) {

        if (<?php echo 1; ?> == 1) {
            console.log('da');
        }

        event.preventDefault();
        $.ajax({
            type: "POST",
            url: 'add_question.php',
            data: {
                question: $('#quest').val(),
                category: $('#add-question-categories :selected').text()
            },
            success: function(data) {
                window.location.replace("answers.php?question=" + <?php echo $addQuestionController->lastQuestionAdded() + 1; ?>);
            }
        });
    }
</script>