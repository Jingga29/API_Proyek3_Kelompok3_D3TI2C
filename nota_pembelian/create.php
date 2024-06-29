<?php
$koneksi = new mysqli('localhost','root','','proyek3');

$tanggal = $_POST['tanggal'];
$nama_petani = $_POST['nama_petani'];
$lokasi = $_POST['lokasi'];
$jumlah_ikan = $_POST['jumlah_ikan'];
$harga = $_POST['harga'];
$total = $_POST['total'];

$data = mysqli_query($koneksi, "insert into nota_pembelian set tanggal='$tanggal',nama_petani='$nama_petani',lokasi='$lokasi',jumlah_ikan='$jumlah_ikan',harga='$harga',total='$total'");
if ($data) {
    echo json_encode([
        'pesan' => 'Sukses'
    ]);
} else {
    echo json_encode([
        'pesan' => 'Gagal'
    ]);
}