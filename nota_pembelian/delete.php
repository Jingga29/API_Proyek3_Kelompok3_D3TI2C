<?php
$koneksi = new mysqli('localhost', 'root', '', 'proyek3');

$id_pembelian = $_POST['id_pembelian'];

$data = mysqli_query($koneksi, "delete from nota_pembelian where id_pembelian='$id_pembelian'");

if ($data) {
    echo json_encode([
        'pesan' => 'Sukses delete'
    ]);
} else {
    echo json_encode([
        'pesan' => 'Gagal delete'
    ]);
}