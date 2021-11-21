<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija / Logovanje</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


</head>
<body>
<div class="jumbotron">
  <h1 class="display-4 text-center">Logovanje / Registracija</h1>
  <hr>
  <p class="text-center text-success high-15px" > Registrujte se potpuno besplatno i ostvarite pravo na DODATNI POPUST </p>
</div>
<div class="container">
<div class="row">
        <a href="index.php"> <img src="pictures/slika-nazad2.png" alt=""></a>
</div><br><br>

</div>
<div class="container">
    <div class="row">
        <div class="col">
        <p class="text-center"> Loguj se </p>
            <form action="register_login.php" method="post">
                <?php if($register->loginPopUp):?>
                    <div class="alert alert-primary" role="alert">
                        Netacan e-mail ili password. Pokusajte ponovo.
                    </div>
                <?php endif; ?>
                <input type="email" name="log_email" placeholder="E-mail" class="form-control" required><br>
                <input type="password" name="log_password" placeholder="lozinka" class="form-control" required><br>
                <button type="submit" name="log_button" class="btn btn-success"> Loguj se </button>
            </form>
        </div>
        <div class="col">
        <p class="text-center"> Registruj se </p>
            <form action="register_login.php" method="post">

            <?php if($register->registerPopUp): ?>
                    <div class="alert alert-primary" role="alert">
                        Uspesno ste se registrovali. Logujte se.
                    </div>
                <?php elseif($register->alertForm): ?>
                    <div class="alert alert-primary" role="alert">
                        Polja: ime, prezime i e-mail moraju da sadrze najmanje 3 a najvise 30 karaktera. Pokusajte ponovo.
                    </div>
                <?php endif; ?>

                <input type="text" name="register_name" placeholder="ime" class="form-control" required><br>
                <input type="text" name="register_surname" placeholder="prezime" class="form-control" required><br>
                <input type="email" name="register_email" placeholder="E-mail" class="form-control" required><br>
                <input type="password" name="register_password" placeholder="lozinka" class="form-control" required><br>
                <button type="submit" name="reg_button" class="btn btn-success"> Registruj se </button>
            </form>
        </div>

    </div>
</div>


</body>
</html>
