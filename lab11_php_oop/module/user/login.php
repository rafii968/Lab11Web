<?php


// WAJIB: load Database class
require_once __DIR__ . '/../../class/Database.php';

if (isset($_SESSION['is_login'])) {
    header('Location: /lab11_php_oop/artikel/index');
    exit;
}

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $db = new Database();

    $username = $db->escape($_POST['username']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='{$username}' LIMIT 1";
    $result = $db->query($sql);
    $user = $result ? $result->fetch_assoc() : null;

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['is_login'] = true;
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama'] = $user['nama'];

        header('Location: /lab11_php_oop/artikel/index');
        exit;
    } else {
        $message = "Username atau password salah";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h3>Login User</h3>

<?php if ($message): ?>
<p style="color:red"><?= $message ?></p>
<?php endif; ?>

<form method="post">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Login</button>
</form>

</body>
</html>
