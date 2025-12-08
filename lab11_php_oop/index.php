<?php
include "config.php";
include "class/Database.php";
include "class/Form.php";
session_start();

$path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/artikel/index';
 
$segments = explode('/', trim($path, '/'));

$mod = isset($segments[0]) && !empty($segments[0]) ? $segments[0] : 'artikel';
$page = isset($segments[1]) && !empty($segments[1]) ? $segments[1] : 'index';

$file = "module/{$mod}/{$page}.php";

include "template/header.php";

if (file_exists($file)) {
    include $file;
} else {
    echo '<div style="color:red;padding:15px;border:1px solid red;">Modul tidak ditemukan: ' . htmlspecialchars($mod) . '/' . htmlspecialchars($page) . '.php</div>';
}

include "template/footer.php";
?>