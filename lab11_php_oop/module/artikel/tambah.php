<?php
$db = new Database();
$form = new Form("/lab11_php_oop/artikel/tambah", "Simpan");

// Jika form disubmit
if ($_POST) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];

    // Insert ke database
    $db->insert("artikel", [
        'judul' => $judul,
        'isi' => $isi
    ]);

    echo "<script>alert('Artikel berhasil ditambahkan!'); window.location='/lab11_php_oop/artikel/index';</script>";
}

// Form input
$form->addField("judul", "Judul Artikel");
$form->addField("isi", "Isi Artikel", "textarea");

?>

<h3>Tambah Artikel</h3>
<?php
$form->displayForm();
?>
