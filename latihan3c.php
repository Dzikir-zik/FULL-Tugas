<?php
function hitungPangkat($angka, $pangkat) {
    if ($pangkat < 0) {
        return "Pangkat harus lebih besar dari atau sama dengan 0";
    } elseif ($pangkat == 0) {
        return 1; // Setiap bilangan pangkat 0 adalah 1
    } else {
        $hasil = 1;
        for ($i = 1; $i <= $pangkat; $i++) {
            $hasil *= $angka;
        }
        return $hasil;
    }
}

// Contoh penggunaan fungsi
$angka = 5;
$pangkat = 4;
$hasil = hitungPangkat($angka, $pangkat);
echo "{$angka} pangkat {$pangkat} = {$hasil}";
?>
