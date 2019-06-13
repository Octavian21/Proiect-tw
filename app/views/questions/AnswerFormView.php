<?php
include_once("app/controllers/AnswerFormController.php");
$answerFormController = new AnswerFormController();
$answerFormController->insertAnswer();
?>

<form onsubmit="onSubmitAnswer(event)" id="answer-form" class="answer-form">
    <textarea id="answer-form-message" rows="12" cols="60" placeholder="Type your answer here"></textarea>

    <?php
    if (isset($_SESSION['answerform-error'])) {
        echo "<span id=\"answerform-error\">" . $_SESSION['answerform-error'] . "</span>";
    } ?>

    <input type="submit" value="Answer">
</form>

<script>
    function onSubmitAnswer(event) {

        let question = <?php echo $_SESSION['question'] ?>;

        event.preventDefault();
        $.ajax({
            type: "POST",
            url: 'answers.php?question=' + question,
            data: {
                message: $('#answer-form-message').val()
            },
            success: function(data) {
                window.location.reload();
            }
        });
    }
</script>