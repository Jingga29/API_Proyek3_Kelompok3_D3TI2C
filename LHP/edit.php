<?php
$koneksi = new mysqli('localhost', 'root', '', 'proyek3');

$id_lhp = $_POST['id_lhp'];
$id_user = $_POST['id_user'];
$tanggal = $_POST['tanggal'];
$jenis_ikan = $_POST['jenis_ikan'];
$lokasi_panen = $_POST['lokasi_panen'];
$pegawai_panen = $_POST['pegawai_panen'];
$keterangan = $_POST['keterangan'];
$data = mysqli_query($koneksi, "update tbl_laporan_harian_panen set id_user='$id_user', tanggal='$tanggal', jenis_ikan='$jenis_ikan', lokasi_panen='$lokasi_panen', pegawai_panen='$pegawai_panen', keterangan='$keterangan' where id_lhp='$id_lhp'");

if ($data) {
    echo json_encode([
        'pesan'=>'Sukses Update'
    ]);
}else{
    echo json_encode([
        'pesan'=>'Gagal Update'
    ]);
}
?>