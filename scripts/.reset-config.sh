#!/bin/bash

composer install;
php artisan migrate:fresh --seed;
php artisan key:generate;
php artisan passport:install --force;
php artisan passport:client --personal;
php artisan storage:link;
