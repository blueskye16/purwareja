# GASKAN

- bagian app.js yang error di consolenya gatau lagi kenapa
  udh di delete terus re-build masih sama aja muncul error di inspectnya
- install penutup tag html --> ngeselin jir
- benerin edit password tricky bet anjir
- cari cara biar pas ada elemen dropdown aside ada yg dibuka, dropdownnya juga tetep kebuka (ga nutup)
  - fitur (eye) di categories --> nunjukin ke postingan mana aja dgn kategori yg sesuai + bisa lgsg edit postnya
  - urutan postingannya dari yang terbaru -> done
  - tambah fitur bersihkan pencarian
  - ubah ke bahasa indonesia -> konsisten

- intinya buat bikin pinned post, mesti nyentuh database buat nyimpen value yg mau di pin
  - buat fitur edit navigasi juga sama keliatannya

#### UPDATE 
  - bagian create user uda bisa nambahin ke database
    - [error] kalo ada data yang salah / gasesuai sama validatedData[controller] masih blm bisa nampilin karena pake modal buat nambahin datanya (data dicek pas udh dikirim via controller)

### 
## belum migrasi tabel baru ## ============================================
- benerin nav dulu -> rapihin antara guest / admin
bagian dashboard admin -> ganti jadi langsung ke postingan semua website
  bikin totalan post yang udh dibuat di web desa berapa, kategori berapa
- bikin profile di bagian navigasi -> bagian sini jadi parent klo profile lagi diklik -> hover biru
    - jadi ada profile, artikel (yg dibuat sm adminnya), logout
    - bagian profile nampilin nama, email, jmlh artikel yg uda dibuat, dropdown? nampilin postingan apa aja yg uda dibuat sm adminnya

## kelola navigasi
- nampilin versi mini nav dari guest, bisa diklik tp gabisa ngarah ke urlnya
- coba bikin dimana dari versi mininya bisa diedit langsung (pake klik kanan)

  nav_items feature
  Use a single navigation table (e.g., nav_items) to store the navigation data. This table can have the following columns:
id (primary key)
nav_type (foreign key referencing the nav_type column in posts or categories)
nav_order (foreign key referencing the nav_order column in posts or categories)
parent_id (optional, for nested navigation)
title (the display title for the navigation item)
url (the URL associated with the navigation item)


## home
- milih konten pilihan --> admin

## artikel
- redesign card artikel

## Dashboard
- fitur buat tambah admin via dashboard --> kelola
- fitur tambah kategori
  - butuh lebih mikir, pake fungsi pilih warna buat kategori?
    - kalo gitu perlu dikasih validasi klo ada kategori yg warnanya udah dipake
- ** di bagian index create kategori jadiin input yg notif aja -> nama => slugnya otomatis nambah ke view
- ngeganti badge pake 'toast' dari flowbite, lebih bagus notifnya
  
categories->color


## Notes
- benerin yang passing data dari komponen. liat contohnya dari $title dashboard admin
- [bagian artikel]
- warna text body nya terlalu abu-abu, coba apply style class tapi gaada efek
  - ini baru nambahin satu gambar aja, harus bisa tambahin beberapa gambar di dalem body --> fungsi bodynya masi terbatas

Sekarang
- benerin post individual dulu
- klo udah lanjutin yang post individual dari dashboard admin

*** CODE ***
php artisan route:clear
	bersihin cache -> pas benerin logout
buat tau isi route resource ada apa aja
  php artisan route:list
php artisan migrate:rollback
  undo field / column table yang baru dibikin --> prakteknya

- di bagian routes dropdown uda jalan, tapi pastiin bagian nav gaada rute sama yang lagi jalan biar active-nya ga dobel
  
- composer dump-autoload
  - buat benerin masalah dependencies habis nginstall package
  - suggestion: better pake composer dump-autoload --optimized || composer dump-autoload --classmap-authoritative
    - final option -> ngehapus file composer.lock --> composer intall (restart composer)

- cari tau lebih soal:
- DB::listen(function ($query) {
    // Log the query
    Log::info($query->sql);
});

where and how i should run this code to inspect the error

buat ngeliat error pas migration -> run in chatgpt
  - cari tau juga apa ada extension or somth yg bisa ngebantu ngespesifikasi error -> khususnya buat sql / run migration

### working with blackbox

## view post-category
- bikin input color pallete
- i'm working with laravel and tailwind project. i intend to make some input that give user ability to chose color from some pallete, then it will pass on to the web system. do you have any advice how i make that?

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
