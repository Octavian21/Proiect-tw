<?php
include_once("app/controllers/ButtonController.php");

$buttonController = new ButtonController();

$startButton = $buttonController->getStartLeftButton();

$endButton =  $buttonController->getEndRightButton();

$noResults = $buttonController->noResults();

if ($noResults == 1) {
    ?>
    <div class="buttons">
        <a class="buttons-left-right" href="<?php echo "index.php?button=" . ($startButton - 5 < 0 ? 1 : $startButton - 5) ?>"> <img src="images/arrow_left.svg" alt=""> </a>
        <?php
        for ($i = $startButton; $i < $endButton; $i++) {
            ?>
            <a class="bttn" href="<?php echo "index.php?button=" . $i ?>"> <?php echo ($i) ?> </a>
        <?php } ?>
        <a class="buttons-left-right" href="<?php echo "index.php?button=" . ($endButton) ?>"> <img src="images/arrow_rightx.svg" alt=""> </a>
    </div>
<?php } else { ?>
    <div class="question">
        <div class="question-body">
            <?php echo ("NU a fost gasit niciun rezultat"); ?>
        </div>
    </div>
<?php }
?>