#!/bin/bash

CFG_MYSQL_HOST=127.0.0.1

docker network create mining-pool

docker-compose down -v

docker-compose up -d

docker-compose exec server php artisan database:rebuild
