<?php

class Barang
{
    public $namaBarang;
    public $hargaBarang;
    public $jumlahBarang;
    public $satuanBarang;

    function __construct($nama, $harga, $jumlah, $satuan)
    {
        $this->namaBarang = $nama;
        $this->hargaBarang = $harga;
        $this->jumlahBarang = $jumlah;
        $this->satuanBarang = $satuan;
    }

    function getNama()
    {
        return $this->namaBarang;
    }

    function getHarga()
    {
        return $this->hargaBarang;
    }

    function getJumlah()
    {
        return $this->jumlahBarang;
    }

    function getSatuan()
    {
        return $this->satuanBarang;
    }

    function hitungTotal()
    {
        return $this->hargaBarang * $this->jumlahBarang;
    }
}

// Menangani input dari pengguna
echo "Masukkan nama barang: ";
$nama = trim(fgets(STDIN));

echo "Masukkan harga barang (Rp): ";
$harga = trim(fgets(STDIN));

echo "Masukkan jumlah barang: ";
$jumlah = trim(fgets(STDIN));

$barang = new Barang($nama, $harga, $jumlah, "pcs");
$total = $barang->hitungTotal();

echo "\n** Tugas Pertemuan 10\n";
echo "** 2205176072 - Muh. Aswad Nugraha\n";
echo "** Program Hitung Total\n";
echo "===============================================\n";
echo "Nama Barang : " . $barang->getNama() . "\n";
echo "Harga Barang : Rp " . number_format($barang->getHarga(), 0, ',', '.') . "\n";
echo "Jumlah Barang : " . $barang->getJumlah() . "\n";
echo "Satuan Barang : " . $barang->getSatuan() . "\n";
echo "===============================================\n";
echo $barang->getNama() . " @ Rp " . number_format($barang->getHarga(), 0, ',', '.') . ' x ' . $barang->getJumlah() . " " . $barang->getSatuan() . "\n";
echo 'Total = Rp ' . number_format($total, 0, ',', '.') . "\n";
?>
