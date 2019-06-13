<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<?php include 'app/views/head.php' ?>

<body>
    <?php include 'app/views/top_nav.php' ?>
    <div class="container">
        <?php include 'app/views/panels/left_panel.php' ?>
        <?php include 'app/views/panels/AddQuestionView.php' ?>
    </div>
    <?php include 'app/views/footer.php' ?>
</body>

</html>