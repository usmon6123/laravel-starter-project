<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Proyekt haqida
manager va client o'rtasida savol javoblar qilish uchun test proekt bu.
Laravelni o'rganish davrida qilingan loyiha

## O'rganganlarim

- security(Laravel Breeze)
- Authentication(create Role)
- Authentication(
  grant permission to the role)
- Send email to Laravel.log
- Database connection
- Eloquent ORM
- CRUD
## Baza strukturasi
![](Screenshot_2.png)

## Proyektni o'rnatish
```
composer install
```
```
npm install
```
```
php artisan key:generate
```
```
npm run dev
```
```
php artisan queue:work
```
### .env
* DB_HOST=mysql
* MAIL_MAILER=log
### Foydalanuvchilar
proyektga kirganda login page ochiladi\
default kirish uchun ikkita account mavjud
- Role: manager\
user: manage@company.com\
password: access
 
- Role: client\
  user: client@company.com\
  password: access


