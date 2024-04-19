<?php
class Penggun
{
    public $namaPengguna;
    public $alamatPengguna;
    public $noTelponPengguna;

    function setNama($nama)
    {
        $this->namaPengguna = $nama;
    }
    function getNama()
    {
        return  $this->namaPengguna;
    }
    function setAlamat($alamat)
    {
        $this->alamatPengguna = $alamat;
    }
    function getAlamat()
    {
        return $this->alamatPengguna;
    }
    function setNoTelpon($noTelpon)
    {
        $this->noTelponPengguna = $noTelpon;
    }
    function getNoTelpon()
    {
        return $this->noTelponPengguna;
    }
}

$dosen = new Penggun;
$dosen->setNama("Antonio Gasing");
$dosen->setAlamat("England");
$dosen->setNoTelpon("088888888888");
echo "DATA DOSEN" . "\n";
echo "====================" . "\n";
echo "Nama : " . $dosen->getNama() . "\n";
echo "Alamat : " . $dosen->getAlamat() . "\n";
echo "No Telpon : " . $dosen->getNoTelpon() . "\n";
?>