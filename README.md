# CodeLara

Konfigurasi Custom Framework CodeIgniter ini saya buat bagi temen-temen yang masih suka dengan CodeIgniter tetapi biar tidak kalah jauh dengan Framework lain seperti Laravel.

## Requirements

* PHP 5.2.4 atau diatasnya
* Twig 1.22.0 atau diatasnya
* Illuminate/database 5.0.28 atau diatasnya
* Illuminate/events 5.0.28 atau diatasnya
* Ramsey/uuid 3.6 atau diatasnya

## Installation

### With Composer

Clone Git Repository
~~~
$ cd /path/to/project
$ git clone https://github.com/guspurwania/CI-Rasa-Laravel.git
~~~

Install Vendor
~~~
$ composer install
~~~

Setup Selesai. Cek Project pada Browser Anda.

### Without Composer

Download manual melalui Github.
Unzip dan install pada folder project Anda.

### Setup .htaccess
~~~
RewriteEngine on
RewriteBase /project/
RewriteCond $1 !^(index\.php|themes|robots\.txt|favicon\.ico)
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php?/$1 [L,QSA]
~~~

## Usage

Berikut merupakan referensi dokumentasi dari package yang digunakan pada CodeLara :
- **[A Simple and Secure Twig integration for CodeIgniter 3.x](https://github.com/kenjis/codeigniter-ss-twig)**
- **[Illuminate Database](https://github.com/illuminate/database)**
- **[Illuminate Events](https://github.com/illuminate/events)**
- **[A fully RESTful server implementation for CodeIgniter using one library, one config file and one controller](https://github.com/chriskacerguis/codeigniter-restserver)**
- **[Simple and Lightweight Auth System for CodeIgniter](https://github.com/benedmunds/CodeIgniter-Ion-Auth)**
