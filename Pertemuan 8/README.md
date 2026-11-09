# Tugas Praktikum Pemrograman Berbasis Web - Sistem Manajemen Buku (Filament 3)

**Nama:** Rofiif Rizkullah Hisyam  
**NPM:** 4524210095  
**Kelas:** PBW - A  
**Mata Kuliah:** Pemrograman Berbasis Web  
**Dosen Pengampu:** Adi Wahyu Pribadi, S.Si., M.Kom  

---

## 📌 Deskripsi Project
Aplikasi Sistem Manajemen Buku ini dibangun menggunakan **Laravel** dan **Filament 3.x** untuk mengelola data buku, penulis (author), dan kategori secara interaktif. Project ini mencakup fitur CRUD lengkap, validasi form, upload cover gambar, pencarian (search), filter data, serta role-based authorization.

---

## 🛠️ Fitur Utama
1. **Management Authors & Books (CRUD):** Tambah, lihat, edit, dan hapus data penulis serta buku.
2. **Upload Cover Buku:** Fitur unggah file gambar cover dengan editor bawaan Filament.
3. **Pencarian & Filtering:** Pencarian berdasarkan judul/ISBN serta filter status (`available`/`borrowed`), tahun terbit, dan penulis.
4. **Field Description & Categories (Tugas 2):** Penambahan deskripsi buku dan relasi many-to-many dengan tabel Kategori.
5. **Dashboard Widget (Tugas 2):** Widget statistik total buku, total author, serta grafik status peminjaman.
6. **Role-Based Access Control / Policies (Tugas 2):** Pengaturan hak akses user (Admin, Staff, Viewer).

---

## 📷 Screenshot Aplikasi

> **Catatan:** Simpan gambar screenshot kamu di dalam folder `screenshots/` di dalam project.

### 1. Halaman Login Admin
![Halaman Login](screenshots/01-login.png)
*Tampilan form login panel admin Filament.*

---

### 2. Halaman Daftar Buku (List Books Index)
![List Books](screenshots/02-list-books.png)
*Tampilan tabel data buku yang sudah di-seed ke database.*

---

### 3. Form Create Book (Tambah Buku Baru)
![Create Book](screenshots/03-create-book.png)
*Form input untuk menambah data buku baru beserta unggah gambar cover dan deskripsi.*

---

### 4. Fitur Pencarian (Search)
![Fitur Search](screenshots/04-search.png)
*Pengujian pencarian data buku berdasarkan kata kunci.*

---

### 5. Filter Data Aktif
![Fitur Filter](screenshots/05-filter.png)
*Pengujian filter data buku berdasarkan status peminjaman dan tahun terbit.*

---

### 6. Dashboard Widget (Tugas 2)
![Dashboard Widget](screenshots/06-dashboard.png)
*Widget statistik ringkasan total buku, author, dan grafik chart status.*

---

## 🚀 Cara Menjalankan Project di Lokal

1. **Clone Repository & Extract:**
   ```bash
   git clone <URL_REPOSITORY_KAMU>
   cd 4524210095-Rofiif-Rizkullah-Hisyam-PBW-A