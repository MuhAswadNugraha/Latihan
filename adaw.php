<?php
class HitungTotal
{
    public $namaBarang;
    public $hargaBarang;
    public $jumlah;
    public $satuan;

    function __construct($namaBarang, $hargaBarang, $jumlah, $satuan)
    {
        $this->namaBarang = $namaBarang;
        $this->hargaBarang = $hargaBarang;
        $this->jumlah = $jumlah;
        $this->satuan = $satuan;
    }
    function totalHarga()
    {
        $total = $this->hargaBarang * $this->jumlah;
        echo "**  Muhamad Aldi Febrian\n";
        echo "** Program Hitung Total\n";
        echo "===============================\n";
        echo "Nama Barang : {$this->namaBarang}\n";
        echo "Harga Barang : {$this->hargaBarang}\n";
        echo "Jumlah : {$this->jumlah}\n";
        echo "Satuan : {$this->satuan}\n";
        echo "===========================\n";
        echo "{$this->namaBarang} Rp.".number_format($this->hargaBarang) . " x {$this->jumlah}{$this->satuan}\n";
        echo "Total = Rp {$total}\n";
    }
}
$barang = new HitungTotal("Paku Payung", 3000, 20, "pcs");
$barang->totalHarga();
?>