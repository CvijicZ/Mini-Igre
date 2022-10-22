<?php

 class Registracija extends Dbh{
     protected function ProveraKorisnika($ime){
         $sql=$this->konekcija()->prepare('SELECT igrac_ime FROM igraci WHERE igrac_ime=?');
         if(!$sql->execute(array($ime))){
             $sql=null;
             header("location: ../index.php?error=ZauzetoKorisnickoIme");
             exit();
         }
         $rezultatProvere;
         if($sql->rowCount() >0){
             $rezultatProvere=false;
         }
         else {
             $rezultatProvere=true;
         }
         return $rezultatProvere;

     }
     protected function KreirajKorisnika($ime,$sifra){
         $sql=$this->konekcija()->prepare('INSERT INTO igraci (igrac_ime,igrac_sifra) VALUES(?,?)');
         $hashedPwd=password_hash($sifra, PASSWORD_DEFAULT);

         if(!$sql->execute(array($ime,$hashedPwd))){
             $sql=null;
             header("location: ../index.php?error=NeuspesanQuery");
             exit();
         }
         $sql=null;
     }

}