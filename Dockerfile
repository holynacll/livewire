FROM php:7.4-fpm-alpine as app_base
RUN docker-php-ext-install pdo pdo_mysql
# Install Composer
RUN curl https://getcomposer.org/installer | php
RUN mv composer.phar /usr/bin/composer

