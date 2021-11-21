<?php require "bootstrap.php"; ?>

<?php $allDrinks = $post->SelectAllPost("drinks"); ?>

<?php require "View/view.drinks.php"; ?>
