<?php

class KontrolaRegistracije extends Registracija{
    private $ime;
    private $sifra;
    private $sifra2;

    public function __construct($ime,$sifra,$sifra2){
        $this->ime=$ime;
        $this->sifra=$sifra;
        $this->sifra2=$sifra2;
    }

    private function PraznoPolje(){
        $rez;
        if(empty($this->ime) || empty($this->sifra) || empty($this->sifra2)){
            $rez=false;
        }
        else {
            $rez=true;
        }
        return $rez;
    }

    private function NepravilnoIme(){
        $rez;
        if(!preg_match("/^[a-zA-Z0-9]*$/",$this->ime)){
            $rez=false;
        }
        else {
            $rez=true;
        }
        return $rez;
    }

    private function FormatSifre(){
        $rez;
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{6,12}$/', $this->sifra)){
            $rez=false;
        }
        else{
            $rez=true;
        }
        return $rez;
    }

    private function PoklapanjeSifre(){
        $rez;
        if($this->sifra!==$this->sifra2){
            $rez=false;
        }
        else{
            $rez=true;
        }
        return $rez;
    }

    private function ZauzetoIme(){
        $rez;
        if(!$this->ProveraKorisnika($this->ime)){
            $rez=false;
        }
        else {
            $rez=true;
        }
        return $rez;
    }

    public function RegistrujKorisnika(){
        if($this->PraznoPolje() == false){
            header("location: ../index.php?error=PraznoPolje");
            exit();
        }
        if($this->NepravilnoIme() == false){
            header("location: ../index.php?error=NepravilnoIme");
            exit();
        }
        if($this->FormatSifre() == false){
            header("location: ../index.php?error=GreskaSifra");
            exit();
        }
        if($this->PoklapanjeSifre() == false){
            header("location: ../index.php?error=NepoklapanjeSifre");
            exit();
        }
        if($this->ZauzetoIme() == false){
            header("location: ../index.php?error=ZauzetoIme");
            exit();
        }
        $this->KreirajKorisnika($this->ime,$this->sifra);
    }

}