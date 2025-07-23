# BukuNest Php + Laravel
 <div align="center">

# **📚 BukuNest**

*Platform laravel modern untuk manajemen perpustakaan online.  
Dirancang agar pengembang dapat dengan mudah membangun aplikasi perpustakaan digital interaktif.*

[![last commit](https://img.shields.io/badge/last%20commit-today-brightgreen)](#)
[![Laravel](https://img.shields.io/badge/Laravel-12-red?logo=laravel)](#)
[![MySQL](https://img.shields.io/badge/MySQL-Relational%20DB-blue?logo=mysql)](#)

*Built with the tools and technologies:*

![Laravel](https://img.shields.io/badge/Laravel-F05340?logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?logo=mysql&logoColor=white)
![JWT](https://img.shields.io/badge/JWT-000000?logo=json-web-tokens&logoColor=white)
![Blade](https://img.shields.io/badge/Blade-FF2D20?logo=laravel&logoColor=white)

</div>


## 🎯 Fitur Unggulan

- 🔐 **Login, Register & Logout** (Auth bawaan Laravel + role admin/user).
- 📚 **CRUD Buku:** Tambah, ubah, hapus, dan tampilkan list buku + upload cover.
- 🏷️ **CRUD Genre:** Tambah, ubah, hapus genre buku.
- 👤 **Profile User:** Update profil dan ganti password.
- 💬 **Fitur Komentar:** Pengguna bisa komentar di detail buku.
- 🛡️ **Middleware Role:** 
  - Public (bisa lihat list & detail buku/genre)
  - Auth User (akses komentar & profil)
  - Admin (akses dashboard & CRUD)
- 🔗 **Relasi Lengkap:** User, Book, Genre, Comment.


---

## 🎬 **Video Presentasi**

👉 Klik gambar di bawah untuk menonton demo lengkap aplikasi BukuNest:

[![Tonton Video Presentasi]()


---

## 🧭 **Struktur Fitur & Routing Utama**

| Fitur              | Endpoint / Route                          | Proteksi                  |
|-------------------|--------------------------------------------|--------------------------|
| Home              | `/`                                       | Public                   |
| List Buku         | `/books`                                   | Public                   |
| Detail Buku       | `/books/{id}`                              | Public                   |
| List Genre        | `/genres`                                  | Public                   |
| Detail Genre      | `/genres/{id}`                             | Public                   |
| Tambah Komentar   | `/books/{id}/comments`                    | Auth User                |
| Admin Dashboard   | `/admin`                                   | Admin                    |
| CRUD Buku         | `/admin/books`                             | Admin                    |
| CRUD Genre        | `/admin/genres`                            | Admin                    |
| Update Profile    | `/profile`                                 | Auth User                |
| Update Password   | `/profile/password`                        | Auth User                |


---

## 🖼️ **Galeri Tampilan & API**

### 🔐 Auth

**Form Login**
![Login](./images/login.png)

**Form Register**
![Register](./images/register.png)


---

### 📚 Admin Dashboard & Buku

**Dashboard Admin**
![Dashboard](./images/admin%20dashboard.png)

**Tambah Buku**
![Tambah Buku](./images/add%20book.png)

**Edit Buku**
![Edit Buku](./images/edit%20book.png)


---

### 🏷️ Genre

**List Genre**
![List Genre](./images/list%20genre.png)

**Tambah Genre**
![Tambah Genre](./images/add%20genre.png)


---

### 💬 Komentar & Detail Buku

**Detail Buku + Komentar**
![Detail Buku](./images/detail%20book.png)


---

### 👤 Profile

**Edit Profil**
![Edit Profile](./images/edit%20profile.png)


---

## ✅ **Kesimpulan (Bahasa sehari-hari)**

> “Ini adalah proyek akhir saya bernama **BukuNest**.  
> Isinya ada fitur CRUD buku & genre, login register, komentar, dan profile user.  
> Ada dashboard admin juga supaya mudah ngatur data.  
> Terima kasih sudah menonton!”


---

@christian J Hutahaean
