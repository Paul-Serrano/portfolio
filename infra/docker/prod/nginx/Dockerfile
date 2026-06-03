FROM nginx:1.27-alpine

COPY infra/docker/prod/nginx/default.conf /etc/nginx/conf.d/default.conf
COPY backend/ /var/www/html

RUN mkdir -p /var/www/html/public \
    && chown -R nginx:nginx /var/www/html