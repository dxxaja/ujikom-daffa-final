# WEB GALLERY

## Tentang Website

project gallery image ini dibuat untuk membuat penyimpanan photo dalam album yang bertujuan untuk mempermudah kita menyari dan juga mengelola photo photo yang bertujuan untuk menyimpan memori kegiatan kita yang berbentuk photo dalam sebuah web, yang dimana dapat membuat, menghapus, like dan komen photo yang kita sudah upload

## Fitur

Untuk Fitur yang dibuat:
- sign up
- log in
- log out
- multiuser
- add poto
- add album
- edit profile
- add comment
- edit comment
- delete comment
- like

## Tampilan Website

![Screenshot (1)](https://github.com/dxxaja/v3-main/assets/126997743/4c2921c9-e05c-418f-99c6-f46301fdf695)
![Screenshot (2)](https://github.com/dxxaja/v3-main/assets/126997743/143db1a0-189d-4677-b725-e5651901c34d)
![Screenshot (3)](https://github.com/dxxaja/v3-main/assets/126997743/af3e5870-3377-4faa-81b8-9693c737e147)

## ERD, Relasi dan UML Use Case

- ERD

![ERD](https://github.com/dxxaja/v3-main/assets/126997743/d7d72b31-c857-41a6-8206-f046e24bf04a)


- Relasi

![RELASI](https://github.com/dxxaja/v3-main/assets/126997743/8a0aabda-68ca-4e32-a1a2-bc6114b82e63)

- UML

![UML](https://github.com/dxxaja/v3-main/assets/126997743/43e63125-5fc1-458a-90a8-b76b1840a7f1)

## Prasyaratan

- PHP 8.1.1 & Web Server (Apache, Lighttpd, atau Nginx)
- Database (PhpMyadmin dengan v11.0.3 atau PostgreSQL)
- Web Browser (Firefox, chrome, Google, Microsoft Edge dll)

## Instalasi
1. Clone Repository
```
https://github.com/Kuro192/UKK_Gallery.git
```

2. Install Composer
```
composer install
```
atau
```
composer update
```

3. Copy .Env
```
copy .env.example .env
```

4. Setting database di .env
```
DB_PORT=3306
DB_DATABASE=baru
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate key
```
php artisan key:generate
```

6. Jalankan migrate dan seeder
```
php artisan migrate --seed
```

7. Buat Storage Link
```
php artisan storage:link
```

8. jangan lupa menginstall NPM
```
npm install
```
lalu jalankan
```
npm run dev
```

8. Jalankan Serve
```
php artisan serve
```
