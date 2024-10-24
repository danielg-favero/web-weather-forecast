FROM php:8.3-fpm-alpine3.20

# Adicionar depedências na imagem
RUN apk add --no-cache \
    bash \
    curl \
    libpng-dev \
    libzip-dev \
    zlib-dev

# Adicionar depedências do PHP
RUN docker-php-ext-install gd \
    && docker-php-ext-install zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apk add --no-cache nodejs npm

WORKDIR /var/www

EXPOSE 9000
