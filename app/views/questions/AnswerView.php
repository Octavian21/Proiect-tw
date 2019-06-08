<?php
include_once("app/controllers/AnswerController.php");

$answerController = new AnswerController();

$question = $answerController->getIdQuestion();

$answers = $answerController->getAnswers($question);

$names = $answerController->getNames($question);

$dates = $answerController->getDates($question);

for ($i = 0; $i < count($answers); $i++) {
    ?>
    <div class="question">
        <div class="question-body">
            <div class="question-top">
                <img src="images/user.png" alt="user">
                <div class="name"> <a href="pagina_user.php"><b> <?php echo $names[$i] ?> </b></a> has answered: </div>
                <div class="time"> <a href="#"></a> <?php echo $dates[$i] ?> </div>
            </div>
            <div class="question-content">
                <p><?php echo $answers[$i] ?></p>
            </div>
            <div class="question-bottom">
                <div class="like first">
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
<?php
}
?>