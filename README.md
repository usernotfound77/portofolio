# Ricky Portfolio — Laravel Starter

Starter tampilan portofolio mahasiswa Informatika dengan Laravel Blade, CSS, dan JavaScript vanilla. Paket ini berisi file aplikasi untuk disalin ke proyek Laravel baru; **bukan** instalasi Laravel lengkap dan tidak menyertakan `vendor/`.

## Fitur UI
- Home / hero dengan orbit animasi, floating cards, gradient, dan efek parallax pointer.
- About, Projects, Skills, Experience, Contact.
- Responsive mobile navigation.
- Scroll reveal menggunakan IntersectionObserver.
- Active navigation berdasarkan section.
- Cursor glow, animasi halus, dan dukungan `prefers-reduced-motion`.
- Form kontak dengan validasi Laravel server-side.

## Kebutuhan
- PHP dan Composer yang cocok dengan versi Laravel yang dipilih.
- Node.js opsional (tidak wajib untuk starter ini karena CSS/JS sudah langsung tersedia di `public/`).
- Untuk instalasi baru, Laravel 11/12 membutuhkan PHP 8.2+; cek persyaratan versi yang Anda pilih sebelum membuat proyek.

## Instalasi di Windows / Laragon
Buka Terminal atau PowerShell di folder tempat proyek akan dibuat.

1. Buat proyek Laravel:
   ```powershell
   composer create-project laravel/laravel portfolio-ricky
   ```
2. Masuk ke folder proyek:
   ```powershell
   cd portfolio-ricky
   ```
3. Ekstrak ZIP starter ini, lalu salin file dan folder dari ZIP ke root proyek Laravel dengan mempertahankan strukturnya. Izinkan overwrite `routes/web.php` jika Anda belum punya route lain yang ingin dipertahankan.
4. Pastikan controller berada di `app/Http/Controllers/PortfolioController.php`.
5. Jalankan:
   ```powershell
   php artisan serve
   ```
6. Buka `http://127.0.0.1:8000`.

## Catatan versi PHP
Jika Composer menolak versi PHP saat membuat proyek, cek:
```powershell
php -v
where.exe php
composer --version
```
Gunakan versi Laravel yang kompatibel dengan PHP yang aktif di terminal. Jika Laragon memiliki beberapa versi PHP, pastikan versi CLI yang dipakai Composer sesuai.

## Personalisasi sebelum dipublikasikan
- Ganti nama, email `hello@example.com`, universitas, pengalaman, dan tautan sosial.
- Ubah contoh project agar sesuai dengan proyek nyata. Kartu project saat ini adalah konten contoh dan sudah diberi disclaimer.
- Form kontak memvalidasi data, tetapi belum mengirim email. Konfigurasikan SMTP pada `.env` dan implementasikan `Mail`/Mailable sebelum digunakan di produksi.
- Untuk email yang benar-benar dikirim, jangan menghapus CSRF protection dan jangan menonaktifkan validasi.

## Struktur file
```text
app/Http/Controllers/PortfolioController.php
public/css/portfolio.css
public/js/portfolio.js
resources/views/portfolio.blade.php
routes/web.php
```


## Foto profil
Foto yang diberikan sudah ditempatkan pada `public/images/profile.jpg`. Jika ingin mengganti foto, ganti file tersebut dengan nama yang sama. Foto ditampilkan pada bagian Home dan About. Setelah menyalin file ke proyek Laravel, pastikan gambar berada di `public/images/profile.jpg`.
