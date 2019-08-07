FROM php:7.2.7-fpm-alpine3.7

# Initial set-up
RUN apk update; \
    apk upgrade;

# Install plugins needed for MySQL access
RUN docker-php-ext-install mysqli pdo_mysql