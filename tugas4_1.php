<?php

$hargaBeli=8000;
$hargaJual=7500;
$keuntungan=300;

$jmlKambing= round(($hargaBeli-$hargaJual)/$keuntungan);

echo "Harga Beli = Rp. ", $hargaBeli,"<br>";
echo "Harga Jual = Rp. ", $hargaJual,"<br>";
echo "Keuntungan = Rp. ", $keuntungan,"<br>";
echo "Berapa Jumlah kambing yang dibeli? Jawaban: ", $jmlKambing, " ekor";


?>