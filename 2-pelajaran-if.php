<?php
// IF = jika
// if adalah percabangan yang menentukan apakah suatu kondisi yang ditentukan benar atau salah
// if (kondisi) {
//   kode yang akan dijalankan
// }

// ELSE = jika tidak 
// else {
//   kode yang akan dijalankan
// }

// null adalah kondisi dimana suatu variabel masih kosong;

// Operator aritmatika, operator matematika , angka + - / 
// + / * - % 
// Operator komparasi, membandingkan nilai true / false
// > lebih kecil dari 90 > 100 = false
// < lebih besar dari
// >= lebih kecil sama dengan dari
// <= lebih besar sama dengan dari
// == sama dengan 90 == 91 = false  |  90 == 90 = true
// != tidak sama dengan 90 != 91 = true;

// if(boolean){
// }
//  true / false;
// if (integer){
// }
// langsung dikonversi menjadi
// if(integer != null){
// }

// kondisi pertama, variable nya sudah boolean;
// $sudah_makan = true;
// if ($sudah_makan) {
//     echo "Sudah Makan";
// } else {
//     echo "Belum Makan";
// }

$nilai = 95;
if ($nilai > 90) {
    echo "Nilai anda A";
} else {
    echo "Nilai anda B";
}
echo "Nilai anda C";
