<?php
require_once "products.php";
require_once "functions.php";
$totalNilaiAset = HitungTotalNilaiStok($products);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Product Information System</title>
    <style>
        body {font-family: Arial, sans-serif; margin: 20px; background-color: #f9f9f9;}
        table {width: 100%; border-collapse: collapse; margin-top: 20px; background: #87CEEEB;}
        th, td {border: 1px solid #ddd; padding: 10px; text-align: left;}
        th {background-color: #f2f2f2;}
        .stok-kritis {background-color: #ffcccc; color: #990000; font-weight: bold;}
        .card {background: #fff; padding: 15px; border: 1px solid #ddd; border-radius: 5px; display: inline-block;}
    </style>
</head>
<body>

   <h1>Product Information System</h1>

    <div class="card">
        <h3>Total Nilai Aset Gudang:</h3>
        <h2><?= formatRupiah($totalNilaiAset) ?></h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Subtotal</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <?php 
                    $kritis = StokKritis($product['stok']);
                    $subtotal = $product['harga'] * $product['stok'];
                ?>
                <tr class="<?= $kritis ? 'stok-kritis' : '' ?>">
                    <td><?= htmlspecialchars($product['id']) ?></td>
                    <td><?= htmlspecialchars($product['nama']) ?></td>
                    <td><?= htmlspecialchars($product['kategori']) ?></td>
                    <td><?= formatRupiah($product['harga']) ?></td>
                    <td>
                        <?= $product["stok"] ?>
                        <?= $kritis ? "(kritis!!!)" : "" ?>
                    </td>
                    <td><?= formatrupiah($subtotal) ?></td>
                    <td><?= htmlspecialchars($product['deskripsi']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
