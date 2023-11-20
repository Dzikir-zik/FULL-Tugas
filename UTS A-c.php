<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Information</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: auto; /* Untuk memusatkan tabel */
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h1>Table produk</h1>
<h2>Dzikirullah al rahmad</h2>
<?php
// membuat array multidimensi
$oreduk = array(
    array("nama_preduk" => "baju bayi", "stok" => 20, "Harga" => "20.000"),
    array("nama_preduk" => "Diapres", "stok" => 25, "Harga" => "51.000"),
    array("nama_preduk" => "bedak", "stok" => 15, "Harga" => "15.000"),
    array("nama_preduk" => "Minyak telon", "stok" => 20, "Harga" => "30.000"),
);

// menampilkan isi array menggunakan table
echo "<table border='1'>";
echo "<tr><th>Nama Produk</th><th>Stok</th><th>Harga</th></tr>";
foreach ($oreduk as $value) {
    echo "<tr>";
    foreach ($value as $field) {
        echo "<td>$field</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
