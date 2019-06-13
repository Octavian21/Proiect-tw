<?php
include_once("app/controllers/QuestionController.php");

$questionController = new QuestionController();

$questions = $questionController->getQuestions();

$start = $questionController->getStartButton();

$end = $questionController->getEndButton();

for ($i = $start; $i < $end; $i++) {
    ?>
    <div class="question">
        <div class="question-container">
            <div class="question-body">
                <div class="question-top">
                    <img src="images/user.png" alt="user">
                    <div class="name"> <a href="user.php"> <b> <?php echo ($questions[$i]['id_utilizator']) ?> </b> </a>is asking: </div>
                    <div class="time"> <a href="#"></a> <?php echo ($questions[$i]['data_adaugare']) ?> </div>
                </div>
                <div class="question-content"> <a href="<?php echo "answers.php?question=" . $questions[$i]['id']; ?>"> <?php echo ($questions[$i]['continut']) ?> </a>
                </div>
                <div class="question-bottom">
                    <div class="msg">
                        <img src="images/msg.svg" alt="user">
                        <div class="text"> <?php echo $questionController->model->getNumberAnswers($questions[$i]['id']); ?> </div>
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
    </div>
<?php
}
?>