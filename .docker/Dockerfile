FROM php:7.4-fpm

RUN apt-get update \
    && pecl install psr \
    && docker-php-ext-enable psr \
    && pecl install phalcon \
    && docker-php-ext-enable phalcon

# RUN docker-php-ext-install pdo_mysql \
#    && docker-php-ext-enable pdo_mysql