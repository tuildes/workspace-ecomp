 docker run --name back \
 -e MARIADB_RANDOM_ROOT_PASSWORD=yes \
 -e MARIADB_USER=gfrehse \
 -e MARIADB_DATABASE=juntos \
 -e MARIADB_PASSWORD=12345 \
 -p 3306:3306 \
 -d mariadb:10.10
