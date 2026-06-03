# Render Deployment Guide

This project is ready for Render using the blueprint file at [render.yaml](render.yaml).

## What Was Added

- Render blueprint: [render.yaml](render.yaml)
- Render production image: [Dockerfile.render](Dockerfile.render)
- Nginx template: [infra/render/nginx/nginx.conf.template](infra/render/nginx/nginx.conf.template)
- Supervisor config: [infra/render/supervisor/supervisord.conf](infra/render/supervisor/supervisord.conf)
- Runtime entrypoint: [infra/render/scripts/entrypoint.sh](infra/render/scripts/entrypoint.sh)
- PHP production overrides: [infra/render/php/custom.ini](infra/render/php/custom.ini)

## Deploy On Render

1. Push your repository to GitHub.
2. In Render, create a new Blueprint and select this repository.
3. Render reads [render.yaml](render.yaml) and proposes:
  - `portfolio-web` (Web Service)
4. Confirm and deploy.

## Important Post-Deploy Update

After first deploy, set your real Render URL in `APP_URL`:

- In Render dashboard, open `portfolio-web`.
- Go to Environment.
- Replace `APP_URL` with your actual service URL, for example:
  - `https://portfolio-web-xxxx.onrender.com`
- Trigger a manual deploy.

## Notes

- Migrations run automatically at container startup.
- Production uses SQLite by default to avoid a paid managed database when the app does not need one.
- Default runtime is safe without DB-backed cache/session:
  - `CACHE_STORE=file`
  - `SESSION_DRIVER=file`
  - `QUEUE_CONNECTION=sync`
- If you later add Redis on Render, you can switch these env vars:
  - `SESSION_DRIVER=redis`
  - `CACHE_STORE=redis`
  - `QUEUE_CONNECTION=redis`

## If You Created The Service Manually (No Blueprint)

Set these environment variables on the Render Web Service:

- `APP_ENV=production`
- `APP_DEBUG=false`
- `APP_KEY=<base64 key from php artisan key:generate --show>`
- `APP_URL=https://<your-service>.onrender.com`
- `DB_CONNECTION=sqlite`
- `DB_DATABASE=/var/www/html/database/database.sqlite`
- `CACHE_STORE=file`
- `SESSION_DRIVER=file`
- `QUEUE_CONNECTION=sync`
