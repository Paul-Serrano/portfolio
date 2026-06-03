FROM php:8.4-fpm

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        git \
        unzip \
        libonig-dev \
        libpq-dev \
        libzip-dev \
        libxml2-dev \
        libicu-dev \
    && docker-php-ext-install -j"$(nproc)" \
        bcmath \
        intl \
        mbstring \
        pdo \
        pdo_pgsql \
        xml \
        zip \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2.8 /usr/bin/composer /usr/bin/composer
COPY infra/docker/dev/php/conf.d/local.ini /usr/local/etc/php/conf.d/local.ini
COPY infra/docker/dev/php/conf.d/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /var/www/html