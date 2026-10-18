# Sistem Kasir

Aplikasi kasir (point of sale) berbasis web untuk mengelola barang, stok, transaksi penjualan, member, dan laporan toko. Aplikasi dibangun dengan framework CodeIgniter 4 mengikuti pola MVC.

## Fitur

- Login dan logout pengguna dengan level akses, termasuk status akun aktif atau nonaktif
- Dashboard kasir
- Manajemen barang: tambah, ubah, hapus, disertai unggah foto barang
- Manajemen stok barang
- Transaksi penjualan: membuat transaksi, menambah barang ke transaksi, melihat detail, dan mencetak struk
- Manajemen member pelanggan
- Manajemen data kasir dan pengguna aplikasi
- Laporan penjualan dan laporan harian, termasuk versi cetak
- Halaman profil dan tentang

## Teknologi

- PHP 7.4 atau 8.x
- CodeIgniter 4 (composer package codeigniter4/framework)
- MySQL atau MariaDB
- PHPUnit 9 untuk pengujian
- FakerPHP untuk data contoh pada pengujian

## Struktur Proyek

```text
sistem-kasir/
├── app/
│   ├── Config/         # Konfigurasi aplikasi, rute, dan database
│   ├── Controllers/    # Login, Dashboard, Barang, Transaksi, Stok,
│   │                   # Member, Kasir, User, Laporan, LaporanHarian, Profil
│   ├── Models/         # Model barang, transaksi, stok, member, kasir, user, laporan
│   └── Views/          # Tampilan per modul
├── public/             # Document root dan aset publik
├── tests/              # Pengujian PHPUnit
├── writable/           # Folder yang dapat ditulis server (cache, log, sesi)
├── kasir.sql           # Skema dan data awal database
├── composer.json
└── spark               # CLI bawaan CodeIgniter 4
```

## Cara Menjalankan

Prasyarat: PHP, Composer, dan MySQL atau MariaDB (misalnya melalui XAMPP).

1. Instal dependensi:

   ```bash
   composer install
   ```

2. Buat database, lalu impor berkas `kasir.sql`.
3. Atur koneksi database pada `app/Config/Database.php`, atau gunakan berkas `env` di root proyek sebagai `.env` lalu isi nilai konfigurasi yang diperlukan.
4. Jalankan server pengembangan CodeIgniter:

   ```bash
   php spark serve
   ```

5. Buka `http://localhost:8080` di browser. Halaman pertama yang tampil adalah halaman login.

## Pengujian

```bash
php vendor/bin/phpunit
```

atau melalui skrip Composer:

```bash
composer test
```
