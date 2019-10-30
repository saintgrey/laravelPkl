<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Biz

Sebuah Web jual beli dan forum peternak sapi

- Pengunjung bisa membuat akun dengan cara klik tombol [daftar](http://localhost:8000/register) pada halaman awal dan memasukkan nama, email, dan password.
- Pengunjung yang sudah memiliki akun bisa langsung login dengan cara klik tombol [masuk](http://localhost:8000/login) pada halaman awal dan memasukkan email dan password yang sudah didaftarkan
- Pengunjung bisa melihat data sapi yang telah diupload oleh pengunjung
- Admin bisa login menggunakan akun yang sudah terdaftar pada [halaman ini](http://localhost:8000/login/admin).
- Pengguna bisa menambah, mengubah, menghapus, dan melihat data Sapi pada menu list [destinasi](http://localhost:8000/list).

## Cara Install

- Clone repositori di PC anda.
- Buka terminal dan masuk kedalam folder laravelpkl, dan jalankan "composer install"
- Buat file ".env" dengan isi yang menyalin dari file ".env.example"
- Jalankan "php artisan migrate" pada terminal
- Jalankan "php artisan db:seed --class=UsersTableSeeder && php artisan db:seed --class=JenisSapi" pada terminal
- Jalakan "php artisan serve" pada terminal, dan buka [http://localhost:8000](http://localhost:8000) pada browser anda
