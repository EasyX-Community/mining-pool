#!/bin/bash

docker network create mining-pool

docker-compose down -v

docker-compose up -d

docker-compose exec server php artisan database:rebuild