<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px;
        }

        th, td {
            border: 2px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
<body>
<h1>Table produk</h1>
<h2>Dzikirullah al rahmad</h2>
<!-- Tampilkan tabel produk -->
<table>
    <tr>
        <th>ID</th>
        <th>PRODUK</th>
        <th>STOK</th>
        <th>HARGA</th>
        <th>JUMLAH</th>
    </tr>
    <tr>
        <td>2</td>
        <td>Diapers</td>
        <td>25</td>
        <td>51.000</td>
        <td><?php echo 25 * 51000; ?></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Bedak</td>
        <td>15</td>
        <td>15.000</td>
        <td><?php echo 15 * 15000; ?></td>
    </tr>
    <tr>
        <td>4</td>
        <td>Minyak telon</td>
        <td>20</td>
        <td>30.000</td>
        <td><?php echo 20 * 30000; ?></td>
    </tr>
    <tr>
        <td>5</td>
        <td>Baby oil</td>
        <td>15</td>
        <td>15.000</td>
        <td><?php echo 15 * 15000; ?></td>
    </tr>
    <tr>
        <td>6</td>
        <td>Baju bayi</td>
        <td>20</td>
        <td>35.000</td>
        <td><?php echo 20 * 35000; ?></td>
    </tr>
    <tr>
        <td>7</td>
        <td>Jumper</td>
        <td>25</td>
        <td>50.000</td>
        <td><?php echo 25 * 50000; ?></td>
    </tr>
</table>

</body>
</html>
