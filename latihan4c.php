<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN dan Ibukotanya</title>
</head>

<body>
<h2>Daftar Negara ASEAN dan Ibukotanya :</h2>

<?php
$asean_countries = array(
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
);

foreach ($asean_countries as $country => $capital) {
    echo "• $country : $capital<br>";
}
?>
</body>
</html>
