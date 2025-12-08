<?php
// Include Database
include_once __DIR__ . '/../../class/Database.php';

// Base URL project
$baseUrl = '/lab11_php_oop';
?>

<h3>Data Artikel</h3>

<a href="<?= $baseUrl; ?>/artikel/tambah">+ Tambah Artikel</a>
<hr>

<?php
// Buat objek DB
$db = new Database();

// Query ambil semua artikel
$sql = "SELECT * FROM artikel ORDER BY id DESC";
$data = $db->query($sql);

// Jika query error
if ($data === false) {
    echo "<div style='color:red;'>Query error!</div>";
    return;
}

// Jika ada data
if (isset($data->num_rows) && $data->num_rows > 0) {

    while ($row = $data->fetch_assoc()) {
        $id = (int) $row['id'];
        $judul = htmlspecialchars($row['judul']);
        $isi = nl2br(htmlspecialchars($row['isi']));

        echo "<div style='margin-bottom:12px;'>";
        echo "<strong>{$judul}</strong><br>";
        echo "<div style='margin:6px 0;'>{$isi}</div>";

        echo "<a href='{$baseUrl}/artikel/ubah?id={$id}'>Ubah</a> | ";
        echo "<a href='{$baseUrl}/artikel/hapus?id={$id}' onclick='return confirm(\"Hapus artikel ini?\");'>Hapus</a>";

        echo "</div><hr>";
    }

} else {
    echo "<p>Belum ada artikel.</p>";
}
?>
