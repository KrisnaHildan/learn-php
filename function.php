<?php
/**
 * function / method / fungsi = blok kode yg akan dijalankan ketika dipanggil
 * blok kode -> kumpulan baris kode yg diapit oleh tanda { }
 * 
 */

 echo "memakai masker"
 echo " menyabun tangan"
 echo " mengurangi mobilitas"

 function prokes(){
    echo "memakai masker"
    echo " menyabun tangan"
    echo " mengurangi mobilitas"
 }

 function makan($nama_makanan){
     echo "cuci tangan"
     echo "baca doa"
     echo "masukkan $nama_makanan"
     echo "kunyah $nama_makanan"
     echo " telan $nama_makanan"

 }
 //echo prokes
 echo makan ("burger");
 echo makan ("soto");
?>