<?php 
echo "Ketik harga : ";
$input_harga = fopen ("php://stdin","r");
$harga = trim(fgets($input_harga));
echo "Ketik jumlah : ";
$input_jumlah = fopen("php://stdin","r");
$jumlah = trim(fgets($input_jumlah));
$total =$harga * $jumlah;
echo 'Harga = Rp '.number_format($harga,0,',','.')."\n";
echo 'Jumlah = ' . number_format($jumlah, 0, ',', '.') . "\n";
echo 'Total = Rp ' . number_format($total, 0, ',', '.') . "\n";
?>