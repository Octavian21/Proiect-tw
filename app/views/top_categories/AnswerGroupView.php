<?php
include_once("app/controllers/AnswerGroupController.php");

$answerGroupController = new AnswerGroupController();

$answersHour = $answerGroupController->getAnswers('hour');

$answersWeek = $answerGroupController->getAnswers('week');

$answersMonth = $answerGroupController->getAnswers('month');

?>

<div class="category_group">
	<div class="subtitle"> Latest hour
		<?php for ($i = 0; $i < count($answersHour); $i++) { ?>
			<div class="answer">
				<img src="images/user.png" alt="user">
				<a class="name" href="pagina_user.php">
					<b> <?php echo ($answersHour[$i]['id_utilizator']) ?>
					</b></a> has answered to <a class="answ-color" href="<?php echo "answers.php?question=" . $answersHour[$i]['id_intrebare']; ?>">a question</a>.
			</div>
		<?php }  ?>
	</div>
</div>

<div class="category_group">
	<div class="subtitle"> Latest week
		<?php for ($i = 0; $i < count($answersWeek); $i++) { ?>
			<div class="answer">
				<img src="images/user.png" alt="user">
				<a class="name" href="pagina_user.php">
					<b> <?php echo ($answersWeek[$i]['id_utilizator']) ?>
					</b></a> has answered to <a class="answ-color" href="<?php echo "answers.php?question=" . $answersWeek[$i]['id_intrebare']; ?>">a question</a>.
			</div>
		<?php }  ?>
	</div>
</div>

<div class="category_group">
	<div class="subtitle"> Latest month
		<?php for ($i = 0; $i < count($answersMonth); $i++) { ?>
			<div class="answer">
				<img src="images/user.png" alt="user">
				<a class="name" href="pagina_user.php">
					<b> <?php echo ($answersMonth[$i]['id_utilizator']) ?>
					</b></a> has answered to <a class="answ-color" href="<?php echo "answers.php?question=" . $answersMonth[$i]['id_intrebare']; ?>">a question</a>.
			</div>
		<?php }  ?>
	</div>
</div>