<?php require "bootstrap.php"; ?>
<!-- Ovde kazem ako se u URL nalazi nesto pod nazivom ili kljucem id onda mi daj ovu funkciju. A ta nas metoda vodi u Class/Posts.php -->
<?php if(isset($_GET['id'])): ?>
<?php $singlPost =  $post->SelectSinglPost("drinks"); ?>

<!-- Ovde kazem ako se u URL nalazi nesto pod nazivom ili kljucem id_beeProduct onda mi daj ovu funkciju. A ta nas metoda vodi u Class/Posts.php -->


<?php elseif(isset($_GET['id_beeProduct'])): ?>
<?php $singlPost = $post->SelectSinglPost("bee_product"); ?>    
<?php endif; ?>

<?php require "View/view.singl.drink.php"; ?>   