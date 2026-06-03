#!/usr/bin/env sh
set -eu

cd /var/www/html

PORT="${PORT:-10000}"
export PORT

envsubst '${PORT}' < /etc/nginx/http.d/default.conf.template > /etc/nginx/http.d/default.conf

mkdir -p storage/framework/{cache,sessions,views} storage/logs bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache
chmod -R ug+rwx storage bootstrap/cache

php artisan config:clear
php artisan cache:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

php artisan migrate --force || true

exec /usr/bin/supervisord -c /etc/supervisord.conf