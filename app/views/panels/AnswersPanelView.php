<?php
include_once("app/controllers/AnswersPanelController.php");

$answersPanelController = new AnswersPanelController();

$error = $answersPanelController->getError();

if ($error) {
    ?>
    <div class="right-panel">
        <a class="ask" href="add_question.php">Ask a question</a>
        <div class="container-questions">
            <?php include 'app/views/questions/QuestionAskedView.php' ?>
            <?php include 'app/views/questions/AnswerView.php' ?>
        </div>
        <?php include 'app/views/button.php' ?>
    </div>
<?php
} else { ?>
    <div class="right-panel">
        <a class="ask" href="add_question.php">Ask a question</a>

        <div class="question">
            <div class="question-body">
                <?php echo ("NU a fost gasit niciun rezultat"); ?>
            </div>
        </div>
    </div>
<?php
} ?>