# 🎀 PHP Modular — Praktikum Pemrograman Web

<p align="center">
  <img src="https://capsule-render.vercel.app/api?type=soft&color=FFC0CB&height=200&section=header&text=PHP%20MODULAR&fontSize=48&fontColor=FFFFFF&animation=fadeIn&fontAlignY=40&desc=Modularization%20%7C%20Routing%20%7C%20CRUD&descAlignY=65&descSize=18" width="100%" />
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-Modular-DB7093?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-Database-FFB6C1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/VS%20Code-Editor-FFC0CB?style=for-the-badge&logo=visualstudiocode&logoColor=white" />
  <img src="https://img.shields.io/badge/XAMPP-Local%20Server-F48FB1?style=for-the-badge&logo=xampp&logoColor=white" />
</p>

<p align="center">
  <i>୨୧ Learning to build structured, reusable, and organized PHP applications. ୨୧</i>
</p>

---

## 🌷 Student Profile

| | Information |
|---|---|
| 👩🏻‍🎓 **Nama** | Nabila Fawwaz Nurliah |
| 🏷️ **Kelas** | I251B |
| 📚 **Mata Kuliah** | Pemrograman Web |
| 📝 **Praktikum** | PHP Modular |

---

## 💌 About This Project

Praktikum PHP Modular merupakan kegiatan pembelajaran pemrograman web yang bertujuan untuk memahami konsep modularisasi dalam PHP.

Dalam praktikum ini, program dibuat dengan memisahkan kode ke dalam file dan folder berdasarkan fungsi masing-masing. Pendekatan modular digunakan agar kode program lebih terstruktur, mudah dipahami, dapat digunakan kembali, dan lebih mudah dikembangkan.

Praktikum ini mencakup penggunaan `include` dan `require`, pembuatan template halaman, routing, whitelist routing, helper functions, serta integrasi PHP dengan database MySQL melalui implementasi CRUD (Create, Read, Update, Delete) pada data barang.

---

## 🎀 Practicum Objectives

- Memahami penggunaan `include` dan `require` dalam PHP.
- Memahami konsep modularisasi pada pemrograman PHP.
- Memisahkan struktur tampilan menggunakan template.
- Membuat sistem routing menggunakan parameter `page`.
- Memahami konsep whitelist routing.
- Mengelompokkan file program ke dalam folder modular.
- Membuat dan menggunakan helper functions.
- Menghubungkan PHP dengan database MySQL.
- Mengimplementasikan CRUD untuk pengelolaan data barang.

---

## 🩷 Technologies Used

| Technology | Description |
|---|---|
| 🐘 PHP | Bahasa pemrograman sisi server |
| 🗄️ MySQL | Database untuk menyimpan data barang |
| 🌸 HTML | Struktur halaman web |
| 🎨 CSS | Styling dan tampilan halaman |
| 🧁 Visual Studio Code | Editor untuk menulis kode |
| 🖥️ XAMPP | Local server dan layanan MySQL |
| 🌐 Git & GitHub | Version control dan penyimpanan project |

---

## ✨ Practicum Materials

### 1. Include & Require

Mempelajari cara memanggil file PHP lain ke dalam sebuah program menggunakan `include` dan `require`.

Tujuannya adalah mengurangi penulisan kode berulang serta memungkinkan file yang sudah dibuat digunakan kembali.

### 2. Template PHP

Menggunakan file terpisah untuk mengatur struktur tampilan halaman, seperti:

- `header.php` — Bagian header dan navigasi.
- `footer.php` — Bagian footer halaman.
- File halaman — Bagian isi konten masing-masing halaman.

### 3. Routing

Menggunakan `index.php` sebagai pusat navigasi aplikasi dengan memanfaatkan parameter `page` untuk menentukan halaman yang akan ditampilkan.

### 4. Whitelist Routing

Menggunakan daftar route yang telah ditentukan untuk membatasi halaman yang dapat diakses melalui sistem routing.

### 5. Modularization

Memisahkan file program berdasarkan fungsi dan kegunaannya ke dalam folder seperti `config`, `functions`, `modules`, dan `views`.

### 6. Helper Functions

Membuat fungsi bantuan yang dapat digunakan kembali dalam beberapa bagian program, seperti fungsi format Rupiah, perhitungan diskon, validasi email, dan ringkasan teks.

### 7. CRUD Database

Mengimplementasikan operasi pengelolaan data barang yang meliputi:

- **Create:** Menambahkan data barang.
- **Read:** Menampilkan data barang.
- **Update:** Mengubah data barang.
- **Delete:** Menghapus data barang.

---

## 📂 Project Structure

```text
praktikum-10-php-modular/
│
├── config/
│   └── database.php
│
├── functions/
│   └── helpers.php
│
├── modules/
│   ├── user/
│   │   ├── list.php
│   │   └── add.php
│   │
│   └── barang/
│       ├── list.php
│       ├── tambah.php
│       ├── ubah.php
│       └── hapus.php
│
├── views/
│   ├── dashboard.php
│   └── 404.php
│
├── screenshots/
│
├── header.php
├── footer.php
├── home.php
├── about.php
├── kontak.php
├── index.php
├── style.css
├── pesan.php
├── contoh-panggil.php
├── uji-include.php
├── uji-require.php
├── latihan-function.php
├── uji-helper.php
└── README.md
```

---

## 🧁 Folder & File Description

| Folder/File | Description |
|---|---|
| `config/` | Menyimpan konfigurasi program, termasuk koneksi database. |
| `database.php` | Menghubungkan program PHP dengan database MySQL. |
| `functions/` | Menyimpan fungsi bantuan yang digunakan dalam program. |
| `helpers.php` | Berisi fungsi format Rupiah, diskon, validasi email, dan ringkasan teks. |
| `modules/user/` | Berisi modul halaman pengguna. |
| `modules/barang/` | Berisi modul pengelolaan data barang. |
| `list.php` | Menampilkan data barang dari database. |
| `tambah.php` | Menambahkan data barang baru. |
| `ubah.php` | Mengubah data barang yang sudah tersedia. |
| `hapus.php` | Menghapus data barang dari database. |
| `views/` | Menyimpan halaman tampilan utama dan halaman error. |
| `dashboard.php` | Menampilkan halaman dashboard aplikasi. |
| `404.php` | Menampilkan halaman ketika route tidak ditemukan. |
| `header.php` | Menampilkan bagian header dan navigasi halaman. |
| `footer.php` | Menampilkan bagian footer halaman. |
| `index.php` | Menjadi pusat routing aplikasi. |
| `style.css` | Mengatur tampilan dan desain halaman. |
| `pesan.php` | File untuk pengujian pemanggilan file PHP. |
| `uji-include.php` | Menguji penggunaan include. |
| `uji-require.php` | Menguji penggunaan require. |
| `latihan-function.php` | Berisi latihan penggunaan function PHP. |
| `uji-helper.php` | Menguji fungsi-fungsi helper yang dibuat. |
| `screenshots/` | Menyimpan dokumentasi tangkapan layar praktikum. |
| `README.md` | Dokumentasi project. |

---

## 💗 Features

### 🌸 1. Dashboard

Dashboard merupakan halaman utama aplikasi yang dapat diakses melalui `index.php`. Halaman ini menampilkan sambutan dan navigasi menuju modul aplikasi.

### 🎀 2. Routing System

Routing digunakan untuk mengatur halaman yang ditampilkan berdasarkan parameter URL.

Contoh:

```text
index.php?page=dashboard
```

```text
index.php?page=user/list
```

```text
index.php?page=barang/list
```

### 🛡️ 3. Whitelist Routing

Whitelist routing digunakan untuk memastikan bahwa halaman yang dipanggil hanya berasal dari daftar route yang telah ditentukan dalam program.

### 🛍️ 4. Data Barang

Aplikasi menyediakan halaman untuk menampilkan dan mengelola data barang yang tersimpan di database.

### 💌 5. CRUD Operations

| Operation | Function |
|---|---|
| Create | Menambahkan data barang ke database. |
| Read | Menampilkan data barang yang tersimpan. |
| Update | Mengubah informasi data barang. |
| Delete | Menghapus data barang. |

### 🪄 6. Helper Functions

Fungsi bantuan digunakan untuk mempermudah pengolahan data dan menghindari penulisan kode yang sama berulang kali.

---

## 🪷 Helper Functions

| Function | Description |
|---|---|
| `formatRupiah($angka)` | Mengubah angka menjadi format mata uang Rupiah. |
| `hitungDiskon($harga, $diskon)` | Menghitung harga setelah diskon. |
| `validasiEmail($email)` | Memvalidasi format alamat email. |
| `ringkasTeks($teks, $panjang)` | Membatasi panjang teks dan menambahkan tanda titik jika teks terlalu panjang. |

Contoh penggunaan:

```php
formatRupiah(150000);
```

```php
hitungDiskon(100000, 20);
```

```php
validasiEmail("test@gmail.com");
```

```php
ringkasTeks("Contoh teks panjang...", 25);
```

---

## 🗄️ Database Configuration

Praktikum menggunakan database MySQL yang dijalankan melalui XAMPP.

| Detail | Value |
|---|---|
| Database | `latihan1` |
| Table | `data_barang` |
| Connection | MySQL |
| Server | localhost |
| Username | root |

### Table `data_barang`

| Column | Description |
|---|---|
| `id_barang` | ID barang |
| `kategori` | Kategori barang |
| `nama` | Nama barang |
| `gambar` | Nama atau informasi gambar |
| `harga_beli` | Harga pembelian barang |
| `harga_jual` | Harga penjualan barang |
| `stok` | Jumlah stok barang |

---

## 🚀 How to Run the Project

### 1. Start XAMPP

Jalankan Apache dan MySQL melalui XAMPP Control Panel.

### 2. Open the Project

Buka folder `praktikum-10-php-modular` melalui Visual Studio Code.

### 3. Run PHP Server

Buka Terminal pada folder project, lalu jalankan:

```powershell
& "C:\xampp\php\php.exe" -S localhost:8000
```

### 4. Open Browser

Buka browser dan akses:

```text
http://localhost:8000/index.php
```

### 5. Access Data Barang

Untuk membuka halaman data barang:

```text
http://localhost:8000/index.php?page=barang/list
```

Untuk membuka halaman tambah barang:

```text
http://localhost:8000/index.php?page=barang/add
```

---

## 📸 Practicum Documentation

Dokumentasi praktikum disimpan dalam folder `screenshots/`. Dokumentasi berisi tangkapan layar kode program, proses pengerjaan, konfigurasi, dan hasil pengujian.

### 📂 Documentation Contents

| No. | Documentation | Description |
|---|---|---|
| 01 | Include & Require | Dokumentasi file dan hasil pengujian include dan require. |
| 02 | PHP Server | Dokumentasi menjalankan PHP server. |
| 03 | Template | Dokumentasi header, footer, dan halaman template. |
| 04 | CSS | Dokumentasi styling halaman aplikasi. |
| 05 | Function | Dokumentasi latihan dan hasil function PHP. |
| 06 | Dashboard | Dokumentasi halaman dashboard. |
| 07 | Routing | Dokumentasi implementasi sistem routing. |
| 08 | Whitelist Routing | Dokumentasi daftar route yang diperbolehkan. |
| 09 | Error Handling | Dokumentasi halaman 404 dan pengujian route tidak valid. |
| 10 | User Module | Dokumentasi modul pengguna. |
| 11 | Barang Module | Dokumentasi halaman data barang. |
| 12 | CRUD | Dokumentasi tambah, tampil, edit, dan hapus data. |
| 13 | Database | Dokumentasi database MySQL dan tabel data barang. |
| 14 | Helper Functions | Dokumentasi pengujian fungsi bantuan. |

---

## 🌼 Learning Outcomes

Setelah menyelesaikan praktikum ini, beberapa konsep yang dipelajari meliputi:

- Memahami struktur program PHP modular.
- Menggunakan file PHP secara terpisah melalui `include` dan `require`.
- Membuat struktur tampilan menggunakan template.
- Mengimplementasikan routing dan whitelist routing.
- Mengelompokkan program berdasarkan modul.
- Membuat dan menggunakan helper functions.
- Menghubungkan PHP dengan database MySQL.
- Melakukan pengelolaan data menggunakan CRUD.
- Menguji program melalui browser dan PHP server lokal.

---

## 🎓 Conclusion

Praktikum PHP Modular memberikan pemahaman mengenai cara menyusun program PHP secara modular dan terstruktur. Dengan memisahkan file berdasarkan fungsi, menggunakan routing, template, helper functions, dan mengintegrasikan database MySQL, program dapat disusun menjadi lebih terorganisir serta lebih mudah dipahami dan dikembangkan.

Praktikum ini juga menjadi latihan dalam menggabungkan beberapa konsep pemrograman web ke dalam satu aplikasi sederhana.

---

<p align="center">
  <img src="https://capsule-render.vercel.app/api?type=soft&color=FFC0CB&height=120&section=footer&text=Thank%20You%20%F0%9F%8C%B8&fontColor=FFFFFF&fontSize=35" width="100%" />
</p>

<p align="center">
  <i>୨୧ Made with love while learning PHP Modular ୨୧</i>
</p>
