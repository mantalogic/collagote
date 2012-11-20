<?php

namespace Org\Classes;

include_once "imahasiswa.php";

class Mahasiswa implements IMahasiswa{
    
    private $nama;
    private $alamat;
    private $jurusan;
    private $th_masuk;
    
    public function setNama($nama){$this->nama = $nama;}
    public function getNama(){return $this->nama;}
    public function setAlamat($alamat){$this->alamat = $alamat;}
    public function getAlamat(){return $this->alamat;}
    public function setJurusan($jurusan){$this->jurusan = $jurusan;}
    public function getJurusan(){return $this->jurusan;}
    public function setMasuk($th_masuk){$this->th_masuk = $th_masuk;}
    public function getMasuk(){return $this->th_masuk;}
    
    public function kalkulasiMasaStudi(){
        $current_year = date("Y"); //2012
        $th_masuk = $this->getMasuk();
        $range = $current_year - $th_masuk;
        return $range;
    }
    
    public function getMasaStudi(){
        return null;
    }
    
}

class Util_Mahasiswa extends Mahasiswa{
    
    public function __construct($nama=null, $alamat=null, $jurusan=null, $th_masuk=null){
        
        if($nama!=NULL){
            $this->setNama($nama);
        }
        if($alamat!=NULL){
            $this->setAlamat($alamat);
        }
        if($jurusan!=NULL){
            $this->setJurusan($jurusan);
        }
        if($th_masuk!=NULL){
            $this->setMasuk($th_masuk);
        }
        
    }

    public function getMasaStudi(){
        return $this->kalkulasiMasaStudi();
    }
    
    public function getMyDetail(){
        $data = array("nama"=>$this->getNama(),"jurusan"=>$this->getJurusan(),"alamat"=>$this->getAlamat());
        
        return (object) $data;
    }
    
}

?>