
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
<img width="1907" height="1062" alt="Cuplikan layar 2026-11-09 230545" src="https://github.com/user-attachments/assets/ba5bcf7a-44b4-4169-8e79-fe5b62186369" />
*Tampilan form login panel admin Filament.*

---

### 2. Halaman Daftar Buku (List Books Index)
<img width="1916" height="1077" alt="Cuplikan layar 2026-11-09 231048" src="https://github.com/user-attachments/assets/b1b1e0b7-9695-4da1-82e6-27ad85dbbce0" />
*Tampilan tabel data buku yang sudah di-seed ke database.*

---

### 3. Form Create Book (Tambah Buku Baru)
<img width="1917" height="1078" alt="Cuplikan layar 2026-11-09 231254" src="https://github.com/user-attachments/assets/e648fadb-9f46-4805-b58e-486422427483" />
*Form input untuk menambah data buku baru beserta unggah gambar cover dan deskripsi.*

---

### 4. Fitur Pencarian (Search)
<img width="1917" height="1078" alt="Cuplikan layar 2026-11-09 231228" src="https://github.com/user-attachments/assets/77aeb109-e6a6-4e24-83bf-504f2a155304" />
*Pengujian pencarian data buku berdasarkan kata kunci.*

---

### 5. Filter Data Aktif
<img width="1916" height="1077" alt="Cuplikan layar 2026-11-09 231048" src="https://github.com/user-attachments/assets/b1b1e0b7-9695-4da1-82e6-27ad85dbbce0" />
*Pengujian filter data buku berdasarkan status peminjaman dan tahun terbit.*

---

### 6. Dashboard Widget (Tugas 2)
<img width="1917" height="1078" alt="Cuplikan layar 2026-11-09 230721" src="https://github.com/user-attachments/assets/9ce0c203-1570-4f93-8580-a39404687e0c" />
*Widget statistik ringkasan total buku, author, dan grafik chart status.*

---

## 🚀 Cara Menjalankan Project di Lokal

1. **Clone Repository & Extract:**
   ```bash
   git clone <URL_REPOSITORY_KAMU>
   cd 4524210095-Rofiif-Rizkullah-Hisyam-PBW-A
