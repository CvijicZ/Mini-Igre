<?php

class KontrolaPrijave extends Prijava{
    private $ime;
    private $sifra;
    

    public function __construct($ime,$sifra){
        $this->ime=$ime;
        $this->sifra=$sifra;
        
    }

    
    public function PrijaviKorisnika(){
        if($this->PraznoPolje() == false){
            header("location: ../index.php?error=PraznoPolje");
            exit();
        }
        $this->UlogujKorisnika($this->ime,$this->sifra);
}

private function PraznoPolje(){
    $rez;
    if(empty($this->ime) || empty($this->sifra)){
        $rez=false;
    }
    else {
        $rez=true;
    }
    return $rez;
}
}