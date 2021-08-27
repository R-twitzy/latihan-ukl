<?php
class Jalur 
{
    public $nama_jalur, $dsp, $spp;
    public function __construct($nama_jalur, $dsp, $spp)
    {
        $this->nama_jalur = $nama_jalur;
        $this->dsp = $dsp;
        $this->spp = $spp;
    }
}

class Mahasiswa 
{
    public $id, $nama, $jalur, $alamat, $pendapatan;

    public function __construct($id, $nama, Jalur $jalur, $alamat, $pendapatan)
    {
        $this->id = $id;
        $this->nama = $nama;
        $this->jalur = $jalur;
        $this->alamat = $alamat;
        $this->pendapatan = $pendapatan;
    }

    public function getBiaya()
    {
        if ($this->pendapatan < 2000000) {
            $biaya = $this->jalur->spp[0] + $this->jalur->dsp[0];
            return $biaya;
        }
        elseif ($this->pendapatan >= 2000000 && $this->pendapatan <= 10000000) {
            $biaya = $this->jalur->spp[1] + $this->jalur->dsp[1];
            return $biaya;
        }
        elseif ($this->pendapatan > 10000000) {
            $biaya = $this->jalur->spp[2] + $this->jalur->dsp[2];
            return $biaya;
        }
    }
}

// create object
$sbmptn = new Jalur("SBMPTN", [5000000, 15000000, 30000000],[500000, 1000000, 2000000]);
$snmptn = new Jalur("SNMPTN", [7000000, 17000000, 35000000],[500000, 1000000, 2000000]);
$mandiri = new Jalur("Mandiri", [10000000, 25000000, 50000000],[1000000, 2000000, 3000000]);


$mahasiswa = [
    new Mahasiswa("1","Mira", $sbmptn, "Sawojajar", 3000000),
    new Mahasiswa("2","Nina", $snmptn, "Kedung Kandang", 10000000),
    new Mahasiswa("3","Oemar", $mandiri, "Ijen", 70000000),
    new Mahasiswa("4","Pena", $sbmptn, "Dinoyo", 5000000),
];

for ($i=0; $i < count($mahasiswa) ; $i++) { 
    echo nl2br("Nama : ".$mahasiswa[$i]->nama."\n");
    echo nl2br("Jalur : ".$mahasiswa[$i]->jalur->nama_jalur."\n");
    echo nl2br("Biaya : ".$mahasiswa[$i]->getBiaya()."\n");
    echo nl2br("------------------------------------\n");
}
?>