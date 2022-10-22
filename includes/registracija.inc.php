<?php
// Pomocu isset metode proveravamo da li je korisnik dosao na stranicu
//  registracija.inc.php klikom na dugme ili je pokusao nekim drugim(ilegalnim)
//  putem da prosledi podatke prema bazi
if (isset($_POST["submit"])){
    $ime=$_POST["ime"];
    $sifra=$_POST["sifra"];
    $sifra2=$_POST["sifra2"];
    
    include "../classes/dbh.classes.php";
    include "../classes/registracija.classes.php";
    include "../classes/registracija.contr.classes.php";

    $registracija=new KontrolaRegistracije($ime,$sifra,$sifra2);
    $registracija->RegistrujKorisnika();
    header("location: ../index.php?error=none");
    echo "Uspesno ste se prijavili, da biste nastavili, kliknite na dugme PRIJAVA!";
}