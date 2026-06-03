FROM composer:2.8 AS vendor

WORKDIR /var/www/html
COPY backend/ /var/www/html

RUN mkdir -p /var/www/html/vendor \
    && if [ -f composer.json ]; then composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader; fi

FROM php:8.4-fpm-alpine

RUN apk add --no-cache \
        icu-dev \
    libxml2-dev \
        libpq-dev \
        libzip-dev \
        oniguruma-dev \
        unzip \
    && docker-php-ext-install -j"$(nproc)" \
        bcmath \
        intl \
        mbstring \
        pdo \
        pdo_pgsql \
        xml \
        zip

WORKDIR /var/www/html

COPY backend/ /var/www/html
COPY --from=vendor /var/www/html/vendor /var/www/html/vendor
COPY infra/docker/prod/php/conf.d/local.ini /usr/local/etc/php/conf.d/local.ini

RUN mkdir -p /var/www/html/storage /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html

USER www-data

CMD ["php-fpm"]