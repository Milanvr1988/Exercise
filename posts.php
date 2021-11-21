<?php require "bootstrap.php"; ?>

<?php if(isset($_POST['insert_save'])): ?>
<?php echo $insert_post = $post->InsertPost("bee_product"); ?>
<?php endif; ?>


<?php require "View/view.insert.post.php"; ?>