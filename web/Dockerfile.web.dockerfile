# use image PHP 8.1 and apache webserver
FROM php:8.1-apache

# Copy index.php to docker folder
COPY ./index.php /var/www/html

# Update repository latest for get latest mysqli extension
RUN apt update -y

# Install mysqli extension
RUN docker-php-ext-install mysqli

# Settings access control list for ownership 'u' and 'g' set to www-data
RUN chown -R www-data:www-data /var/www/html

# Settings for remove permission 'w' and 'x' for others
RUN chmod -R o-wx /var/www/html