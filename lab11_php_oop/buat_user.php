<?php
require_once __DIR__ . '/class/Database.php';

$db = new Database();

$username = 'admin';
$password = password_hash('admin123', PASSWORD_DEFAULT);
$nama = 'Administrator';

$sql = "INSERT INTO users (username, password, nama)
        VALUES ('$username', '$password', '$nama')";

if ($db->query($sql)) {
    echo "USER BERHASIL DIBUAT<br>";
    echo "Username: admin<br>";
    echo "Password: admin123";
} else {
    echo "GAGAL: " . $db->conn->error;
}
