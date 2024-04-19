<?php
class Pengguna
{
    public $namaPengguna;
    public $alamatPengguna;
    public $noTelponPengguna;

    function __construct($nama,$alamat,$noTelpon){
        $this->namaPengguna = $nama;
        $this->alamatPengguna = $alamat;
        $this->noTelponPengguna = $noTelpon;
    }
    function getNama()
    {
        return  $this->namaPengguna;
    }

    function getAlamat()
    {
        return $this->alamatPengguna;
    }

    function getNoTelpon()
    {
        return $this->noTelponPengguna;
    }
}

$dosen = new Pengguna ("an","masih mencari","+6229189341294");
$mahasiswa = new Pengguna("aldi", "masih mencari", "+6229294");
echo "====================" . "\n";
echo "DATA DOSEN" . "\n";
echo "____________________" . "\n";
echo "Nama : " . $dosen->getNama() . "\n";
echo "Alamat : " . $dosen->getAlamat() . "\n";
echo "No Telpon : " . $dosen->getNoTelpon() . "\n";
echo "====================" . "\n";
echo "DATA MAHASISWA" . "\n";
echo "____________________" . "\n";
echo "Nama : " . $mahasiswa->getNama() . "\n";
echo "Alamat : " . $mahasiswa->getAlamat() . "\n";
echo "No Telpon : " . $mahasiswa->getNoTelpon() . "\n";
echo "====================" . "\n";
?>