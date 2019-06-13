<?php

include_once("app/controllers/QuestionAskedController.php");

$questionAskedController = new QuestionAskedController();

$question = $questionAskedController->getQuestion();

$nrQuestions = $questionAskedController->getNumberAnswers();

?>
<div class="question asked">
    <div class="question-body">
        <div class="question-top">
            <img src="images/user.png" alt="user">
            <div class="name"> <a href="pagina_user.php"> <b> <?php echo ($question['id_utilizator']) ?> </b> </a>has asked: </div>
            <div class="time"> <a href="#"></a> <?php echo ($question['data_adaugare']) ?> </div>
        </div>
        <div class="question-content ">
            <p> <?php echo ($question['continut']); ?> </p>
        </div>
        <?php include 'app/views/questions/AnswerFormView.php'; ?>
        <div class="question-bottom">
            <div class="msg">
                <img src="images/msg.svg" alt="user">
                <div class="text"> <?php echo ($nrQuestions); ?> </div>
            </div>
            <div class="like">
                <img src="images/like.svg" alt="user">
                <div class="text"> 45 </div>
            </div>
            <div class="dislike">
                <img src="images/dislake.svg" alt="user">
                <div class="text"> 23 </div>
            </div>
        </div>
    </div>
</div>