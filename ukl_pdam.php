<?php

class Penggunaan{
    public $jumlah_penggunaan, $biayaAdmin, $tagihan;
    function __construct($jumlah_penggunaan)
    {
        $this->biayaAdmin = 10000;
        $this->jumlah_penggunaan = $jumlah_penggunaan;
        if ($jumlah_penggunaan <= 10) {
            $this->tagihan = 2000;
            $this->jumlah_penggunaan = $jumlah_penggunaan;
        } elseif($jumlah_penggunaan > 10 && $jumlah_penggunaan <= 20) {
             $this->tagihan = 3000;
             $this->jumlah_penggunaan = $jumlah_penggunaan-10;
             $this->biayaAdmin = 10000 + 20000;
        } elseif($jumlah_penggunaan > 20 && $jumlah_penggunaan <= 30){
            $this->tagihan = 4000;
            $this->jumlah_penggunaan = $jumlah_penggunaan-20;
            $this->biayaAdmin = 10000 + 50000;
        } elseif ($jumlah_penggunaan > 30){
            $this->tagihan = 5000;
            $this->jumlah_penggunaan = $jumlah_penggunaan-30;
            $this->biayaAdmin = 10000 + 90000;
        }
    }
}

class Pelanggan{
    public $id, $nama, $penggunaan;
    public function __construct($id, $nama, Penggunaan $penggunaan)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->penggunaan = $penggunaan;
    }
    public function countBiaya()
    {
        $jumlah_penggunaan = $this->penggunaan->jumlah_penggunaan;
        $biayaAdmin = $this->penggunaan->biayaAdmin;
        $tagihan = $this->penggunaan->tagihan;
        
        $jumlah = $jumlah_penggunaan * $tagihan + $biayaAdmin;
        return $jumlah;
    }
}
//create object
$penggunaan_Ali = new Penggunaan (5);
$penggunaan_Budi = new Penggunaan (20);
$penggunaan_Dani = new Penggunaan (12);
$penggunaan_Edi= new Penggunaan (44);
$penggunaan_Umar = new Penggunaan (31);

$Ali = new Pelanggan ("1","Ali",$penggunaan_Ali);
echo nl2br("\n Tagihan ".$Ali->nama." dengan nomor ID ".$Ali->id." sebesar ".$Ali->countBiaya());

$Budi = new Pelanggan ("2","Budi",$penggunaan_Budi);
echo nl2br("\n Tagihan ".$Budi->nama." dengan nomor ID ".$Budi->id." sebesar ".$Budi->countBiaya());

$Dani = new Pelanggan ("3","Dani",$penggunaan_Dani);
echo nl2br("\n Tagihan ".$Dani->nama." dengan nomor ID ".$Dani->id." sebesar ".$Dani->countBiaya());

$Edi = new Pelanggan ("4","Edi",$penggunaan_Edi);
echo nl2br("\n Tagihan ".$Edi->nama." dengan nomor ID ".$Edi->id." sebesar ".$Edi->countBiaya());

$Umar = new Pelanggan ("5","Umar",$penggunaan_Umar);
echo nl2br("\n Tagihan ".$Umar->nama." dengan nomor ID ".$Umar->id." sebesar ".$Umar->countBiaya());


?>