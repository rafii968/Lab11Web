<?php
require_once __DIR__ . '/../../class/Database.php';
$db = new Database();

if ($_POST) {
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];

    $db->query("INSERT INTO artikel (judul, isi)
                VALUES ('$judul', '$isi')");

    header("Location: /lab11_php_oop/artikel/index");
    exit;
}
?>

<h3>Tambah Artikel</h3>

<form method="post">
    <input type="text" name="judul" placeholder="Judul" required><br><br>
    <textarea name="isi" placeholder="Isi artikel" rows="5" required></textarea><br><br>
    <button>Simpan</button>
</form>
