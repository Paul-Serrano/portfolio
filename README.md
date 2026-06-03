# Portfolio Project

Docker-first Laravel portfolio project with local development and Render production deployment.

## Current Status

- Local development stack is running with Docker.
- Production deployment on Render is live.
- Default Laravel starter page is currently used as the landing page.

## Tech Stack

- Laravel 12
- PHP 8.4 (FPM)
- Nginx
- PostgreSQL (local dev)
- Redis (local dev)
- Tailwind CSS 4 + Vite
- Render (production)

## Repository Structure

- backend/: Laravel application
- infra/docker/dev/: Docker files for local development
- infra/docker/prod/: Docker files for production-like local runs
- infra/render/: Render runtime configs (nginx, supervisor, entrypoint)
- Dockerfile.render: Production image used by Render
- render.yaml: Render blueprint
- Makefile: Common local/prod Docker commands

## Prerequisites

- Docker + Docker Compose
- GNU Make
- Git

## Local Development

### 1) Start the stack

Use Make (recommended):

- make up

This starts:

- app (php-fpm)
- nginx
- db (PostgreSQL)
- redis

### 2) Open the app

Use:

- http://127.0.0.1:8080

Note:

- The local dev nginx is HTTP only on port 8080.
- If you open HTTPS on that port, browsers can show ERR_CONNECTION_RESET.

### 3) Useful commands

- Stop: make down
- Rebuild: make build
- Logs: make logs
- Run artisan: make artisan cmd="migrate"
- Run artisan seed: make artisan cmd="db:seed"

## Local Environment Notes

- Main app env file: backend/.env
- Docker dev env file: infra/docker/dev/.env.dev

Important:

- Prefer Make commands because they include the correct Docker env-file wiring.
- Running raw docker-compose commands without --env-file may print warnings about POSTGRES_USER or POSTGRES_DB.

## Production on Render

### Core files used by Render

- render.yaml
- Dockerfile.render
- infra/render/nginx/nginx.conf.template
- infra/render/supervisor/supervisord.conf
- infra/render/scripts/entrypoint.sh

### Deployment model

- Single Render web service running nginx + php-fpm under supervisor.
- Migrations run at startup.
- SQLite is used in production by default for zero-cost persistence setup.

### Required environment variables

Minimum expected values:

- APP_ENV=production
- APP_DEBUG=false
- APP_KEY=<generated key>
- APP_URL=https://<your-render-service>.onrender.com
- DB_CONNECTION=sqlite
- DB_DATABASE=/var/www/html/database/database.sqlite
- CACHE_STORE=file
- SESSION_DRIVER=file
- QUEUE_CONNECTION=sync

## GitHub Auto Redeploy

A workflow exists at .github/workflows/render-redeploy.yml.

Behavior:

- Triggers on push to main
- Calls Render Deploy Hook URL if configured
- Skips gracefully if secret is missing

Required GitHub secret:

- RENDER_DEPLOY_HOOK_URL

## Common Troubleshooting

### Local browser says ERR_CONNECTION_RESET

Most common cause: opening HTTPS locally instead of HTTP.

Use:

- http://127.0.0.1:8080

If needed, clear browser HSTS/forced HTTPS for localhost.

### App not reachable locally

- Check containers: make logs
- Confirm nginx mapping: 8080 -> 80
- Restart stack: make down then make up

### Laravel permission errors in storage or cache

Run from app container:

- make artisan cmd="optimize:clear"

If needed, restart the stack after clearing caches.

### Render deployed but style looks broken

- Ensure APP_URL uses your real HTTPS Render URL.
- Redeploy after changing APP_URL.
- Hard refresh browser to bypass cached assets.

## Additional Project Docs

- COPILOT_DOCKER_SETUP.md
- COPILOT_INSTRUCTIONS.md
- DEPLOY_RENDER.md

## Suggested Next Steps

- Replace default Laravel welcome page with portfolio sections from COPILOT_INSTRUCTIONS.md.
- Move portfolio content into config/portfolio.php for content-driven rendering.
- Add CI checks for PHP linting and basic feature tests.
