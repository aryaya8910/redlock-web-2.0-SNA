# Image PHP 8.1 and apache webserver
FROM mysql:latest

# Set environtment variable
ENV MYSQL_ALLOW_EMPTY_PASSWORD=1
ENV MYSQL_DATABASE=redlock


# Copy database to docker
COPY redlock-db.sql /docker-entrypoint-initdb.d/