<?php
require_once __DIR__ . '/../../class/Database.php';
$db = new Database();
$data = $db->query("SELECT * FROM artikel ORDER BY id DESC");
?>

<style>
    .artikel-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .btn {
        padding: 8px 14px;
        border-radius: 6px;
        text-decoration: none;
        font-size: 14px;
        color: #fff;
    }

    .btn-add {
        background-color: #2d89ef;
    }

    .card {
        background: #ffffff;
        border-radius: 10px;
        padding: 16px;
        margin-bottom: 15px;
        box-shadow: 0 4px 10px rgba(0,0,0,0.08);
    }

    .card h4 {
        margin: 0 0 8px;
        color: #333;
    }

    .card p {
        margin: 0 0 12px;
        color: #555;
        line-height: 1.5;
    }

    .aksi a {
        margin-right: 10px;
        font-size: 13px;
        color: #2d89ef;
        text-decoration: none;
    }

    .aksi a.hapus {
        color: #e74c3c;
    }

    .aksi a:hover {
        text-decoration: underline;
    }

    .kosong {
        text-align: center;
        color: #777;
        margin-top: 40px;
    }
</style>

<div class="artikel-header">
    <h3>📄 Data Artikel</h3>
    <a href="/lab11_php_oop/artikel/tambah" class="btn btn-add">+ Tambah Artikel</a>
</div>

<?php if ($data && $data->num_rows > 0): ?>
    <?php while ($row = $data->fetch_assoc()): ?>
        <div class="card">
            <h4><?= htmlspecialchars($row['judul']) ?></h4>
            <p><?= nl2br(htmlspecialchars($row['isi'])) ?></p>

            <div class="aksi">
                <a href="/lab11_php_oop/artikel/ubah?id=<?= $row['id'] ?>">✏ Edit</a>
                <a href="/lab11_php_oop/artikel/hapus?id=<?= $row['id'] ?>"
                   class="hapus"
                   onclick="return confirm('Yakin mau hapus artikel ini?')">
                   🗑 Hapus
                </a>
            </div>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <div class="kosong">
        <p>Belum ada artikel.</p>
    </div>
<?php endif; ?>
