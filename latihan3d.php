<?php
function faktorial($a) {
    if ($a == 0) {
        return 1;
    } else {
        return $a * faktorial($a - 1);
    }
}

$angka = 5; // Ganti angka sesuai dengan yang Anda inginkan
$hasil = faktorial($angka);
echo "Faktorial dari $angka adalah $hasil";
?>