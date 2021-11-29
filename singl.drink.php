<?php require "bootstrap.php"; ?>
<?php if(isset($_GET['id'])): ?>
<?php $singlPost =  $post_model->SelectSinglPost($_GET['id']); ?>



<?php elseif(isset($_GET['id_beeProduct'])): ?>
<?php $singlPost = $post_modelbee->SelectSinglPost($_GET['id_beeProduct']); ?>    
<?php endif; ?>

<?php require "View/view.singl.drink.php"; ?>   