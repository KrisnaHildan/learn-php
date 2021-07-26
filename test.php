<?php
//Menghitung luas dan keliling lingkaran
/*
algoritma
1. Masukan nilai jari-jari
2. Menetapkan nilai phi
3. Hitung luas -> rumus luas
4. Hitung keliling -> rumus keliling
5. Tampil nilai luas da keliling
*/

// Membuat variabel -> r, phi, luas, keliling
$r = 10;
$phi = 3.14;
$luas = $r * $r * $phi;
$keliling = $phi * 2 * $r;
echo "Luas lingkaran: $luas ";
echo "keliling lingkaran: $keliling ";
?>