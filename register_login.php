<?php require "bootstrap.php"; ?>

<?php if(isset($_POST['reg_button'])): ?>
    <?php echo $register->registerUser(); ?>
<?php elseif(isset($_POST['log_button'])): ?>
    <?php echo $register->loginUser(); ?>
<?php endif; ?>

<?php require "View/view.register.login.php"; ?>