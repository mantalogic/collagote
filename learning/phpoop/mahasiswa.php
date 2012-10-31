<?php

class Mahasiswa {
    
    public $telo = 'oke';
    
    function echoName($name){
        echo $name.' '.$this->telo;
    }
    
}

$mahasiswa_var = new Mahasiswa;
$mahasiswa_var->echoName('ujang');

?>