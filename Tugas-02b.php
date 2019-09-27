<?php
//soal
echo "Jual = 80000";
echo "<br>";
echo "Beli = 50000";
echo "<br>";
echo "Keuntungan = ...?";
echo "<br>";
echo "Jawaban :";
echo "<br>";

//deklarasi
$jual = 80000;
$beli = 50000;

//keuntungan
echo "= Harga Jual - Harga Beli";
echo "<br>";
echo "= $jual - $beli";
echo "<br>";

$untung = $jual - $beli;
echo "= $untung";
echo "<br>";

//Persentase Keuntungan
echo "= (Keuntungan / Harga Beli) x 100%";
echo "<br>";
echo "= ($untung / $beli) x 100%";
echo "<br>";
$persentase = ($untung / $beli) * 100;
echo "= $persentase %";
echo "<br>";
echo "<br>";
echo "<b>Jadi Keuntungan Putri dalam membeli boneka yaitu $persentase%.</b>";

?>