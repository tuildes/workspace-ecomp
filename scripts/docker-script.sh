 docker run --name back \
 -e MARIADB_RANDOM_ROOT_PASSWORD=yes \
 -e MARIADB_USER=gfrehse \
 -e MARIADB_DATABASE=laravel \
 -e MARIADB_PASSWORD=12345 \
 -p 3310:3310 \
 -d mariadb:10.10
