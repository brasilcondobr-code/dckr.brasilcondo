# Usamos uma versão específica e estável do PHP com FPM (FastCGI Process Manager)
FROM php:fpm

# Instala dependências do sistema para as extensões PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli opcache zip \
    && docker-php-ext-enable opcache \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Instala o Composer globalmente
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
