# Laravel message system


<p align="center"><img src="https://www.hypertechnologyweb.com/content/images/2022/07/logo_laravel-1.png" height="100px"> </p>

This is my implementation to resolve DelemOcio technical trial [Link](https://github.com/DelemOcio/prueba-tecnica-laravel)

This implementation is made with Laravel with Laravel Breeze and basic authentication (to save time). As herouku has dropped the free plan this year, it has not been deployed on that service. 

Also, it is worth mentioning that only the requested functionality has been developed.

## Ussage
To run this implementation you can use the followings commands:

```bash
composer install # to install dependencies
php artisan migration --seed # to create database folders and seed them
php artisan serve # to start the server

```

## Database diagram

<p align="center"><img src="https://github.com/IgorMy/Laravel-message-system/blob/master/github_images/database.png" width="700px"> </p>


## Users:

```
prueba@prueba.com - 12345678
prueba2@prueba.com - 12345678
prueba3@prueba.com - 12345678
```

## Some extra images
<p align="center"><img src="https://github.com/IgorMy/Laravel-message-system/blob/master/github_images/2022-09-18_13-43.png" width="700px"> </p>
<p align="center"><img src="https://github.com/IgorMy/Laravel-message-system/blob/master/github_images/2022-09-18_13-45.png" width="700px"> </p>

## Time spent on development
- Reading the document and setting up the database diagram: 16.30 min
- Creating a new laravel project with laravel breeze: 7.15 min
- Creating all migrations: 11.20 min
- Creating all seeders: 10 min
- Creating the seervices view: 20 min (Yes, I know, a lost the time perception with tailwindcss)
- Creating the create service logic: 7.20 min
- Creating single service representation: 13 min
- Creating message creation: 15 min (A bit too much due to basic problems with linux and storage)

Total: 01:50:50

(Note: Github repository creation/decoration not counted)

## Mising things

- CRUD implementation for all models.
- As this implementation is made to only solve the problems, there are a lot of functionality that is lost as delete,edit services, messages. Custom messages to show errors or success and more.
- Unit tests.
- Better auth system with JWT and cookies.
- Ajax for pagination and better Front End implementation.
- And much more.
