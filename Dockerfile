# Imagem do docker https://hub.docker.com/_/php
#FROM php:7-1-rc-apache ??
FROM php:7.1-apache 

# Instalar algumas coisas ao dar o build na imagem (criar o container)
RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80 80
