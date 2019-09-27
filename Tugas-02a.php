<?php
//soal
echo "36 Hari = 12 Pekerja";
echo "<br>";
echo "X Hari = 24 Pekerja";
echo "<br>";
echo "X = ...?";
echo "<br>";
echo "Jawaban :";
echo "<br>";

//deklarasi
$hari = 36;
$pekerja = 12;
$tmbh_pekerja = 24;

//rumus
echo "$hari x $pekerja = n x $tmbh_pekerja";
$hasil_1 = $hari * $pekerja;
echo "<br>";
echo "$hasil_1 = $tmbh_pekerja n";
echo "<br>";
echo "n = $hasil_1 / $tmbh_pekerja";
$hasil_2 = $hasil_1 / $tmbh_pekerja;
echo "<br>";
echo "n = $hasil_2";
echo "<br>";

echo "<b>Jadi, 1 unit rumah dengan menggunakan $tmbh_pekerja orang pekerja adalah <b>$hasil_2</b> hari";
?>
