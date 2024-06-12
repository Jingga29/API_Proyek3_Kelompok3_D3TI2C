<?php
$koneksi = new mysqli('localhost', 'root', '', 'proyek3');

$id_lhp = $_POST['id_lhp'];

$data = mysqli_query($koneksi, "delete from tbl_laporan_harian_panen where id_lhp='$id_lhp'");

if ($data) {
    echo json_encode([
        'pesan'=>'Sukses delete'
    ]);
}else{
    echo json_encode([
        'pesan'=>'Gagal delete'
    ]);
}
?>