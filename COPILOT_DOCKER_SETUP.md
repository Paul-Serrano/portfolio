# Docker Environment Setup - Laravel Portfolio

## Objective

Set up a complete Docker-based development and production environment for a Laravel 12 application.

The repository follows this structure:

```
/backend   → Laravel application
/infra     → Docker configuration
```

Docker must support both:

* Development environment (hot reload, local dev friendly)
* Production environment (optimized, minimal runtime)

---

# Requirements

## General Principles

* Clean separation between app and infrastructure
* No Laravel logic inside Docker configuration
* Fully reproducible environments
* Stateless containers
* Environment-based configuration

---

# Project Structure (target)

```
/backend
    (Laravel project)

/infra
    /docker
        /dev
            docker-compose.yml
            nginx/
            php/
            mysql/
        /prod
            docker-compose.yml
            nginx/
            php/
```

---

# Services Required

## Application Stack

* PHP 8.4 (FPM)
* Nginx
* MySQL or PostgreSQL (prefer PostgreSQL if no preference)
* Composer (inside PHP container)

Optional but recommended:

* Redis (for caching / queues)

---

# Development Environment (/infra/docker/dev)

## docker-compose.yml must include:

### app (php-fpm)

* Mount `/backend` into container
* Install Composer dependencies
* Enable Xdebug (optional but recommended)
* Expose PHP-FPM port internally

### nginx

* Serve Laravel app
* Map port `80:80`
* Point root to `/backend/public`

### database

* Persistent volume
* Exposed port for local access
* Environment variables via `.env.dev`

---

## Dev Requirements

* Hot reload (file sync via volume mount)
* Easy artisan command execution:

  ```
  docker exec app php artisan migrate
  ```
* Logs accessible via docker logs

---

# Production Environment (/infra/docker/prod)

## Requirements

### app (php-fpm)

* Optimized image (no dev dependencies)
* Composer install with `--no-dev --optimize-autoloader`
* No Xdebug
* Read-only filesystem if possible

### nginx

* Optimized config
* Gzip enabled
* Cache headers for static assets

### database

* Externalized configuration via environment variables
* No exposed ports unless needed

---

# Docker Images Strategy

## PHP Image

Use a custom Dockerfile:

* Based on `php:8.4-fpm`
* Install required extensions:

  * pdo
  * pdo_mysql or pdo_pgsql
  * mbstring
  * tokenizer
  * xml
  * curl
  * zip
* Install Composer
* Install Node.js (only if needed for asset build)

---

## Nginx

* Lightweight alpine-based image
* Custom Laravel server config:

  * root: `/backend/public`
  * fallback to `index.php`

---

# Environment Variables

Use separate env files:

```
/infra/docker/dev/.env.dev
/infra/docker/prod/.env.prod
```

Laravel `.env` must be loaded from backend but mapped correctly.

---

# Networking

* All services must be on the same Docker network
* Use service names for internal communication:

  * `app`
  * `db`
  * `nginx`

---

# Volumes

## Dev only

* `/backend:/var/www/html`

## Prod

* No source code volume mounts
* Only built artifacts inside container

---

# Ports

## Dev

* 8080 → nginx
* 5432 → database (optional external access)

## Prod

* 80 → nginx only

---

# Commands

Provide Makefile or scripts for:

```bash
make up
make down
make build
make logs
make artisan
```

These should simplify Docker usage.

---

# Expected Outcome

After setup, the developer should be able to:

### Development

```bash
cd infra/docker/dev
docker-compose up --build
```

Then access:

```
http://localhost:8080
```

### Laravel should work immediately with:

* migrations
* routing
* controllers
* views

---

### Production

```bash
cd infra/docker/prod
docker-compose up --build -d
```

---

# Final Goal

A clean, production-ready Docker setup that:

* isolates infrastructure from application code
* supports Laravel best practices
* is easy to run for any developer
* is scalable for future features (Redis, queues, workers)

The environment must feel like a real SaaS production setup, not a toy project.
