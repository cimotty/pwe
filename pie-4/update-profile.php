<?php
session_start();
include '_includes/db.php';

$db = PWE_DB::connect();

$nama = $_POST['nama'];
$id = $_SESSION['id'];

$query = $db->prepare('UPDATE `anggota` SET `nama` = ? WHERE `id` = ?');
$update = $query->execute([$nama, $id]);

if ($update) {
    header('Location: dashboard.php');
    $_SESSION['nama'] = $nama;
} else {
    header('Location: update-gagal.html');
}
