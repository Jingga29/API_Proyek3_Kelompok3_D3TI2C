<?php
$koneksi = new mysqli('localhost', 'root', '', 'proyek3');

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

$id_user = isset($_POST['id_user']) ? $_POST['id_user'] : null;
$tanggal = isset($_POST['tanggal']) ? $_POST['tanggal'] : null;
$jenis_ikan = isset($_POST['jenis_ikan']) ? $_POST['jenis_ikan'] : null;
$lokasi_panen = isset($_POST['lokasi_panen']) ? $_POST['lokasi_panen'] : null;
$pegawai_panen = isset($_POST['pegawai_panen']) ? $_POST['pegawai_panen'] : null;
$keterangan = isset($_POST['keterangan']) ? $_POST['keterangan'] : null;

if ($id_user && $tanggal && $jenis_ikan && $lokasi_panen && $pegawai_panen && $keterangan) {
    $stmt = $koneksi->prepare("INSERT INTO tbl_laporan_harian_panen (id_user, tanggal, jenis_ikan, lokasi_panen, pegawai_panen, keterangan) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("isssss", $id_user, $tanggal, $jenis_ikan, $lokasi_panen, $pegawai_panen, $keterangan);

    if ($stmt->execute()) {
        echo json_encode([
            'pesan' => 'Sukses'
        ]);
    } else {
        echo json_encode([
            'pesan' => 'Gagal'
        ]);
    }

    $stmt->close();
} else {
    echo json_encode([
        'pesan' => 'Data tidak lengkap'
    ]);
}

$koneksi->close();
?>
