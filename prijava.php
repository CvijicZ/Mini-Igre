<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "includes/header.inc.php";?>
    <title>Document</title>
</head>
<body> 
    <section class="section-prijava">
        <div class="prijava">
            <h4>PRIJAVI SE</h4><br>
            <form action="includes/prijava.inc.php" method="post">
            <label for="ime">Ime</label>
            <br>
            <input type="text" name="ime">
            <br><br>
            <label for="sifra">Sifra</label>
            <br>
            <input type="password" name="sifra">
            <br><br><br>
            <button type="submit" name="submit">PRIJAVI SE</button>
        </form>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>