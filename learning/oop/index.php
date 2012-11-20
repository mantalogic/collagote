<?php 
    
    /**
    * Path to the org directory.
    */
    define('ORG', realpath(__DIR__.'/org/').DIRECTORY_SEPARATOR);
    //define('ORG', "org/");
    
    /**
    * Path to the classes directory.
    */
    define('CLASSES', realpath(__DIR__.'/org/classes/').DIRECTORY_SEPARATOR);
    
    require_once CLASSES."mahasiswa.php";
    //require_once CLASSES."autoloader.php";
    
    $mahasiswa = new Org\Classes\Util_Mahasiswa("Arif Setyawan","BCT Block EE no 1","Informatika","2009");
    echo $mahasiswa->getMasaStudi()."<br/>";
    
    $detail = $mahasiswa->getMyDetail();
    echo $detail->nama."<br/>";
    echo $detail->alamat."<br/>";
    echo $detail->jurusan."<br/>";
    
?>