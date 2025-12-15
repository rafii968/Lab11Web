<style>
    .home {
        text-align: center;
        padding: 40px 20px;
    }

    .home h1 {
        font-size: 28px;
        margin-bottom: 10px;
        color: #2d89ef;
    }

    .home p {
        font-size: 16px;
        color: #555;
        max-width: 600px;
        margin: 0 auto 30px;
        line-height: 1.6;
    }

    .menu {
        display: flex;
        justify-content: center;
        gap: 20px;
        margin-top: 30px;
    }

    .menu a {
        display: block;
        padding: 16px 24px;
        border-radius: 12px;
        background: #ffffff;
        text-decoration: none;
        color: #333;
        width: 200px;
        box-shadow: 0 6px 14px rgba(0,0,0,0.1);
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .menu a:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    .menu a span {
        display: block;
        font-size: 30px;
        margin-bottom: 10px;
    }
</style>

<div class="home">
    <h1>👋 Selamat Datang</h1>
    <p>
        Ini adalah aplikasi sederhana berbasis <b>PHP OOP Modular</b>.
        Aplikasi ini dibuat untuk latihan konsep routing, OOP, dan CRUD data artikel.
    </p>

    <div class="menu">
        <a href="/lab11_php_oop/artikel/index">
            <span>📄</span>
            Data Artikel
        </a>

        <a href="/lab11_php_oop/artikel/tambah">
            <span>➕</span>
            Tambah Artikel
        </a>
    </div>
</div>
