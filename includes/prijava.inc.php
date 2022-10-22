<?php
// Pomocu isset metode proveravamo da li je korisnik dosao na stranicu
//  registracija.inc.php klikom na dugme ili je pokusao nekim drugim(ilegalnim)
//  putem da prosledi podatke prema bazi
if (isset($_POST["submit"])){
    $ime=$_POST["ime"];
    $sifra=$_POST["sifra"];
    
    include "../classes/dbh.classes.php";
    include "../classes/prijava.classes.php";
    include "../classes/prijava.contr.classes.php";

    $prijava=new KontrolaPrijave($ime,$sifra);
    $prijava->PrijaviKorisnika();
    header("location: ../index.php?error=nonePrijava");
}