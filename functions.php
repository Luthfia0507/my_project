<?php
function HitungTotalNilaiStok($items) {
    $jumlah = 0;
    foreach ($items as $item) {
        $jumlah += ($item["harga"] * $item["stok"]);
    }
    return $jumlah;
}
function StokKritis($stok){
    return $stok<3;
}
function formatrupiah($angka){
    return "Rp" . number_format($angka, 0, ",", ".");
}
?>