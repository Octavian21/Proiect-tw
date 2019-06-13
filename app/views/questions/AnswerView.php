<?php
include_once("app/controllers/AnswerController.php");

$answerController = new AnswerController();

$names = $answerController->getNames();

$info = $answerController->getInfo();

$answerController->setDislike();

$answerController->setLike();

for ($i = 0; $i < count($info); $i++) {
    ?>
    <div class="question">
        <div class="question-body">
            <div class="question-top">
                <img src="images/user.png" alt="user">
                <div class="name"> <a href="pagina_user.php"><b> <?php echo $names[$i] ?> </b></a> has answered: </div>
                <div class="time"> <a href="#"></a> <?php echo $info[$i]['data_adaugare'] ?> </div>
            </div>
            <div class="question-content">
                <p><?php echo $info[$i]['continut'] ?></p>
            </div>
            <div class="question-bottom">
                <div class="like first">
                    <a href="" onclick="onClickLike(event);"><img src="images/like.svg" alt="user"> </a>
                    <div class="text"> <?php echo $info[$i]['nr_likeuri'] ?> </div>
                </div>
                <div class="dislike">
                    <a href="answers.php?question=69&answer=1" onclick="onClickDislike(event);"><img src="images/dislake.svg" alt="user"> </a>
                    <div class="text"> <?php echo $info[$i]['nr_dislikeuri'] ?> </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>

<script>
    function onClickDislike(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: 'answers.php?question= <?php echo $_GET['question'];  ?> ',
            data: {
                nrDislike: 1,
                dislike: true
            },
            success: function() {
                window.location.reload();
            }
        });
    }

    function onClickLike(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: 'answers.php?question= <?php echo $_GET['question'];  ?> ',
            data: {
                nrLike: 1,
                like: true
            },
            success: function() {
                window.location.reload();
            }
        });
    }
</script>