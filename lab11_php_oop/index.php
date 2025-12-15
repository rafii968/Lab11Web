<?php
session_start();

$path = $_SERVER['REQUEST_URI'];
$path = str_replace('/lab11_php_oop', '', $path);
$path = strtok($path, '?');

$segments = explode('/', trim($path, '/'));

$mod  = $segments[0] ?? 'home';
$page = $segments[1] ?? 'index';

$file = "module/$mod/$page.php";

include "template/header.php";

if (file_exists($file)) {
    include $file;
} else {
    echo "<h3>Halaman tidak ditemukan</h3>";
}
