Product Information System (sistem informasi produk)
Aplikasi web sederhana berbasis PHP untuk mengelola dan menampilkan informasi inventaris produk gudang secara real-time.

Fitur Utama
- **Kalkulasi Total Nilai Aset**: Menghitung akumulasi total nilai aset barang yang ada di gudang secara otomatis.
- **Tabel Inventaris Produk**: Menampilkan daftar produk lengkap dengan ID, nama, kategori, harga, stok, subtotal harga per item, dan deskripsi.
- **Peringatan Stok Kritis**: Menandai baris tabel secara otomatis dengan warna merah jika stok barang kurang dari 3 unit.
- **Format Mata Uang**: Mengubah angka nominal menjadi format Rupiah (`Rp`).

Struktur File
- `index.php` — Halaman utama yang menampilkan ringkasan aset dan tabel inventaris produk.
- `products.php` — Menyimpan data *array* multidimensi yang berisi informasi produk.
- `functions.php` — Berisi fungsi-fungsi pembantu (*helper functions*) seperti kalkulasi total aset, pengecekan stok kritis, dan format Rupiah.

Prasyarat System
- PHP versi 7.4 atau yang lebih baru.
- Web server lokal seperti XAMPP, Laragon, atau LAMP/LEMP stack.

Cara Menjalankan Project
1. **Clone / Download** repository ini ke dalam direktori web server kamu (misalnya `htdocs` untuk XAMPP atau `www` untuk Laragon).
2. Pastikan web server (Apache/Nginx) dan PHP sudah aktif.
3. Buka browser dan akses alamat proyek, contoh:
