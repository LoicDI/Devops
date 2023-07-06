FROM php:8.1-apache
RUN docker-php-ext-install mysqli
COPY ./Simple-PHP-Web-App/ /var/www/html/