<?php
class warga {
    //variabel global
    var $nama;
    var $alamat;
    //tahap 1
    public function personAwal(){
        echo $nama_lengkap = "Bima wardana";
        echo "<br>";
        echo $alamat = "depok";
    }
    //tahap 2
    public function person(){
        echo $nama_lengkap = $this->nama;
        echo "<br>";
        echo $alamat = $this->alamat;
    }
    public function setPerson(){
        //menggunakan variabel global
        $this->nama = "Nama 1";   
        $this->alamat = "Alamat 1";
    }
    public function person3($nama,$alamat){
        echo $nama_lengkap = $nama;
        echo "<br>";
        echo $alamat = $alamat;
    }
}
?>