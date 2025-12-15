# Lab11Web
MUHAMAD SAEFUL RAFII 312410374
# struktur projek
lab11_php_oop/
│── index.php
│── config.php
│── database.php
│── .htaccess
│── artikel/
│     ├── index.php
│     ├── tambah.php
│     ├── ubah.php
│── artikel/
|     ├── index.php
└── template/
      ├── header.php
      ├── footer.php
      └── sidebar.php

Buat database di phpMyAdmin:

Nama database: lab11_php_oop

CREATE TABLE artikel (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255),
    isi TEXT
);

# Class Database (database.php)
<img width="1919" height="1000" alt="image" src="https://github.com/user-attachments/assets/5f2920a6-56d8-4e6c-b1c9-062900e4b943" />

# Routing (.htaccess)
<img width="1392" height="733" alt="image" src="https://github.com/user-attachments/assets/39568198-ad3c-47f9-976c-a6210a766174" />
Routing di index.php

/artikel/index
/artikel/tambah
/artikel/ubah
<img width="774" height="520" alt="image" src="https://github.com/user-attachments/assets/a25c2993-4082-422a-8a70-b810c9524b0d" />
/artikel/hapus
<img width="1919" height="297" alt="image" src="https://github.com/user-attachments/assets/a9753a8d-6917-4d2b-b91e-0928f47f27e2" />
<img width="1919" height="718" alt="image" src="https://github.com/user-attachments/assets/308707ec-c1eb-401f-9f40-3f4f7fbea18a" />

# Template

header.php → judul halaman
footer.php → copyright
sidebar.php → menu navigasi

# penambahan halaman login
<img width="1919" height="1005" alt="image" src="https://github.com/user-attachments/assets/16089506-570e-43c6-a041-c3ca56be4986" />

Fitur login digunakan untuk membatasi akses pengguna ke sistem. Autentikasi dilakukan menggunakan username dan password yang tersimpan di database. Password diamankan dengan hashing bcrypt dan diverifikasi menggunakan password_verify(). Jika login berhasil, pengguna diarahkan ke halaman utama, jika gagal akan muncul pesan kesalahan.
<img width="1919" height="935" alt="image" src="https://github.com/user-attachments/assets/cd576849-fc05-448a-a325-f0782eded82b" />

# logout
<img width="1919" height="1012" alt="image" src="https://github.com/user-attachments/assets/0cfd3641-714d-4a26-a04b-3ace9cd496cd" />




















