<?php

 class Prijava extends Dbh{
    protected function UlogujKorisnika($ime,$sifra){
        $sql=$this->konekcija()->prepare('SELECT igrac_sifra FROM igraci WHERE igrac_ime = ?;');

        if(!$sql->execute(array($ime))){
             $sql=null;
            header("location: ../index.php?error=NeuspesanQuery");
            exit();
        }
        
         if($sql->rowCount()==0){
             $sql=null;
             header("location: ../index.php?error=KorsnikNijePronadjen");
             exit();
         }

        $hashedPwd=$sql->fetchAll(PDO::FETCH_ASSOC);
        $proveraS= password_verify($sifra,$hashedPwd[0]["igrac_sifra"]);

        if($proveraS == false){
            $sql=null;
            header("location: ../index.php?error=PogresnaSifraPrijava");
            exit();
        }

        else if($proveraS == true){
            $sql=$this->konekcija()->prepare('SELECT * FROM  igraci WHERE igrac_ime = ? ');
            if(!$sql->execute(array($ime))){
                $sql=null;
                header("location: ../index.php?error=NeuspesanQuery");
                exit();
            }
        
         if($sql->rowCount()==0){
             $sql=null;
             header("location: ../index.php?error=KorsnikNijePronadjen");
             exit();
         }

        $korisnik=$sql->fetchAll(PDO::FETCH_ASSOC);
        session_start();
        $_SESSION["igracId"]=$korisnik[0]["igrac_id"];
        $_SESSION["igracIme"]=$korisnik[0]["igrac_ime"];
        $sql=null;
        }
    }
}