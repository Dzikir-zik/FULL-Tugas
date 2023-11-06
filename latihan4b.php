<?php

$negara_asean = array(
    "Indonesia",
    "Singapura",
    "Malaysia",
    "Brunei",
    "Thailand",
);

echo "Daftar Negara ASEAN awal :\n";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";


$tambahan_negara = array("Laos", "Filipina", "Myanmar");
$negara_asean = array_merge($negara_asean, $tambahan_negara);

echo "Daftar Negara ASEAN baru :\n";
echo "<ul>";
foreach ($negara_asean as $negara) {
    echo "<li>$negara</li>";
}
echo "</ul>";
?>
