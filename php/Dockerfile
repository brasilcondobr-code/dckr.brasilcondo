# Usamos uma versão específica e estável do PHP com FPM (FastCGI Process Manager)
FROM php:fpm

# Instala dependências do sistema para as extensões PHP
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli opcache \
    && docker-php-ext-enable opcache
