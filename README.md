API code challenge
Use Laravel 7.24, PHP 7.2.5, phpunit

swagger file - swagger.yaml

Structure
Routes - /routes/api.php

Controllers - /app/Http/Controllers/MainController

Models - /app

Instalation
.env - config

composer install

php artisan migrate

php artisan serve

vendor/bin/phpunit --debug

DB
.env - config

DB_CONNECTION=mysql DB_HOST=localhost DB_PORT=3306 DB_DATABASE=tp_db DB_USERNAME=root DB_PASSWORD=

You will also want to update your website URL inside of the APP_URL variable inside the .env file:

APP_URL=http://localhost:8000


Access to the admin panel:
link: http://localhost:8000/admin
email: admin@admin.com
password: password

