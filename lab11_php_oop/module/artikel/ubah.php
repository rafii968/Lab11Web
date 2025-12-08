<?php
$db = new Database();

// Ambil ID dari URL
$id = $_GET['id'];

// Ambil data artikel berdasarkan ID
$data = $db->get("artikel", "id=$id");

$form = new Form("/lab11_php_oop/artikel/ubah?id=$id", "Update");

// Jika form disubmit
if ($_POST) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    $db->update("artikel", [
        'judul' => $judul,
        'isi' => $isi
    ], "id=$id");

    echo "<script>alert('Artikel berhasil diupdate!'); window.location='/lab11_php_oop/artikel/index';</script>";
}

// Isi form dengan data lama
?>

<h3>Ubah Artikel</h3>

<?php
// Field
echo "<form method='POST'>";
echo "<table>";

echo "<tr><td>Judul</td><td><input type='text' name='judul' value='" . $data['judul'] . "'></td></tr>";
echo "<tr><td>Isi</td><td><textarea name='isi' rows='4' cols='30'>" . $data['isi'] . "</textarea></td></tr>";

echo "<tr><td></td><td><input type='submit' value='Update'></td></tr>";

echo "</table>";
echo "</form>";
?>
