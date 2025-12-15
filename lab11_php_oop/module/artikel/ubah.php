<?php
require_once __DIR__ . '/../../class/Database.php';
$db = new Database();

$id = $_GET['id'];
$data = $db->query("SELECT * FROM artikel WHERE id=$id")->fetch_assoc();

if ($_POST) {
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];

    $db->query("UPDATE artikel SET judul='$judul', isi='$isi' WHERE id=$id");

    header("Location: /lab11_php_oop/artikel/index");
    exit;
}
?>

<h3>Edit Artikel</h3>

<form method="post">
    <input type="text" name="judul" value="<?= $data['judul'] ?>" required><br><br>
    <textarea name="isi" rows="5" required><?= $data['isi'] ?></textarea><br><br>
    <button>Update</button>
</form>
