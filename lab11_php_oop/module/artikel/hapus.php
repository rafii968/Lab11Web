<?php
$db = new Database();

$id = $_GET['id'];

$db->delete("artikel", "id=$id");

echo "<script>
        alert('Artikel berhasil dihapus!');
        window.location='/lab11_php_oop/artikel/index';
      </script>";
?>
