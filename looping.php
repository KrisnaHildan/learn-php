<?php
/**
 * looping (perulangan) -> mengulang baris kode perintah
 * 
 * type of looping -> for, while, do.. while
 * 
 * Konsep looping : 
 * 1. titik awal
 * 2. kondisi
 * 3. perubahan nilai
 * 
 * selama kondisinya benarr looping akan berlanjut
 * saat kondisi salah, looping akan berhenti
 */

 // case 1 : menampilkan bilangan kelipatan 7 mulai dari -70 sampai 100
// $start = -70;
// for ($i=$start; $i < 100 ; $i+=7) {
//     echo "$i ";
// }
// case 2
//$person = [
    ["name" => "gofar", "address", => "madrid", "age" => 40]
    ["name" => "kaizo", "address", => "saturnus", "age" => 80]
    ["name" => "kokochi", "address", => "pluto", "age" => 40]

];
// string nama = "jack";
// system.out.println ("nama saya: " + nama)
// echo $person[0] ['name']." ".$person[0 ['address']." ".$person[0]['age']." | ";
// echo $person[1] ['name']." ".$person[1] ['address']." ".$person[1]['age']." | ";
// echo $person[2] ['name']." ".$person[2] ['address']." ".$person[1]['age']." | ";


// menampilkan isi dalam array person
# count digunakan untuk mengetahui jumlah array(java-> .length)
for ($i=$i=0; $i < count ($person); $i++) {
    echo $person[$i]['name']. " ".$person[$i]['address']. " ".$person[$i]['age']. " | ";
}

?>