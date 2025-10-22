git clone  https://github.com/rsshakil/laravel-jwt.git
cd ~access directory
open  your  docker
docker
docker compose build
docker compose up -d
docker compose down

to run  command in php
docker exec -it laravel-app bash

Laravel: http://localhost:8000

phpMyAdmin: http://localhost:8080

Server: mysql

Username: laravel

Password: secret



update env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=secret