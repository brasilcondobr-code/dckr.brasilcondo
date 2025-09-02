FROM php:fpm

RUN apt-get update && apt-get install -y \
    libzip-dev \
    libonig-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-configure gd --with-jpeg --with-freetype \
    && docker-php-ext-install gd