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
   - `portfolio-db` (PostgreSQL)
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
- Sessions, cache, and queue are configured to use database storage.
- If you later add Redis on Render, you can switch these env vars:
  - `SESSION_DRIVER=redis`
  - `CACHE_STORE=redis`
  - `QUEUE_CONNECTION=redis`
