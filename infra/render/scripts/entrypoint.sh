#!/usr/bin/env sh
set -eu

cd /var/www/html

PORT="${PORT:-10000}"
export PORT

envsubst '${PORT}' < /etc/nginx/http.d/default.conf.template > /etc/nginx/http.d/default.conf

mkdir -p storage/framework/{cache,sessions,views} storage/logs bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
chmod -R ug+rwx storage bootstrap/cache

if [ "${DB_CONNECTION:-sqlite}" = "sqlite" ]; then
	SQLITE_PATH="${DB_DATABASE:-/var/www/html/database/database.sqlite}"
	mkdir -p "$(dirname "${SQLITE_PATH}")"
	touch "${SQLITE_PATH}"
	chown www-data:www-data "${SQLITE_PATH}"
fi

php artisan config:clear
php artisan cache:clear || true
php artisan package:discover --ansi || true
php artisan config:cache || true
php artisan route:cache || true
php artisan view:cache || true

php artisan migrate --force || true

exec /usr/bin/supervisord -c /etc/supervisord.conf