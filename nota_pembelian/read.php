<?php
$koneksi = new mysqli('localhost','root','','proyek3');
$query = mysqli_query($koneksi, "select * from nota_pembelian");
$data = mysqli_fetch_all($query, MYSQLI_ASSOC);
echo json_encode($data);