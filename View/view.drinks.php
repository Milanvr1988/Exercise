<?php require "Partials/header.php"; ?>
<div class="container">
<div class="row">
<?php foreach($allDrinks as $drink ): ?>
    <!-- Ovde preko a taga saljem na URL kljuv pod nazivom id koji je povezan sa tabelom drink u bazi i od svakog podatka u bazi trazim njegov id. -->
    <a href="singl.drink.php?id=<?php  echo $drink->id; ?>" class="nav-link">
        <div class="col-3" >
            <div class="card" style="width: 14rem;">
                <img src=" <?php echo $drink->picture; ?> " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo $drink->title; ?> </h5>
                    <p class="card-text"> <?php echo $drink->description; ?> </p>
                </div>
            </div>
        </div>
    </a>
<?php endforeach; ?>
</div>
</div>
<?php require "Partials/footer.php"; ?>