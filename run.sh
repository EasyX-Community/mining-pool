#!/bin/bash

CFG_MYSQL_HOST=127.0.0.1

function getContainerHealth {
  docker inspect --format "{{json .State.Health.Status }}" $1
}

function waitContainer {
  while STATUS=$(getContainerHealth $1); [ $STATUS != "\"healthy\"" ]; do 
    if [ $STATUS == "\"unhealthy\"" ]; then
      echo "Failed!"
      exit -1
    fi
    printf .
    lf=$'\n'
    sleep 1
  done
  printf "$lf"
}

docker network create mining-pool

docker-compose down -v

docker-compose up -d

waitContainer database

docker-compose exec server php artisan database:rebuild

function getContainerHealth {
  docker inspect --format "{{json .State.Health.Status }}" $1
}

function waitContainer {
  while STATUS=$(getContainerHealth $1); [ $STATUS != "\"healthy\"" ]; do 
    if [ $STATUS == "\"unhealthy\"" ]; then
      echo "Failed!"
      exit -1
    fi
    printf .
    lf=$'\n'
    sleep 1
  done
  printf "$lf"
}