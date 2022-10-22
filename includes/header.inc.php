
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/prijava.css">
    <title>Document</title>
</head>
<body>
    <header>
            <nav class="nav">
                <a href="../mini-igre/index.php" class="nav-brand">CvijicGames.</a>
            <ul class="nav-menu">
                <?php
                if(isset($_SESSION["igracIme"])){
                    ?>
                <li class="nav-item"> <a href="index.php" class="nav-link">Pocetna</a></li>
                <li class="nav-item"> <a href="#"><?php echo $_SESSION["igracIme"];?></a></li>
                <li class="nav-item"> <a href="includes/odjava.inc.php" class="nav-link">Odjavi se</a></li>
                <?php
                }
                else{
                    ?>
                    <li class="nav-item"> <a href="prijava.php" class="nav-link">Prijavi se</a></li>
                    <li class="nav-item"> <a href="registracija.php" class="nav-link">Registruj se</a></li>
                    <?php
                }
                ?>   
            </ul>
            
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header> <br><br>

    <script src="js/script.js"></script>
</body>
</html>
