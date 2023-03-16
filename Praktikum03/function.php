<?php 

// Buat Fungsi 
function hitungUmur($thn_lahir) {
    $thn_sekarang = 2023;
    // Hitung umur
    $umur = $thn_sekarang - $thn_lahir;
    // Panggil umur
    return $umur;
}
echo hitungUmur(2004);

?>