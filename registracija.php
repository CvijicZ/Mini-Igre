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
    <section class="section-register">
        <div class="registracija">
                <h4>Registruj se</h4>
                <br>
                <form action="includes/registracija.inc.php" method="post">
                    <label for="ime">Ime</label>
                    <br>
                    <input type="text" name="ime">
                    <br><br>
                    <label for="password">Sifra</label>
                    <br>
                    <input type="password" name="sifra">
                    <br><br>
                    <label for="password">Ponovite sifru</label>
                    <br>
                    <input type="password" name="sifra2">
                    <br><br>
                    <button type="submit" name="submit">SING UP</button>
                </form>
        </div>
    </section>
    <script src="js/script.js"></script>
</body>
</html>