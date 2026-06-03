DEV_COMPOSE = docker-compose --env-file infra/docker/dev/.env.dev -f infra/docker/dev/docker-compose.yml
PROD_COMPOSE = docker-compose --env-file infra/docker/prod/.env.prod -f infra/docker/prod/docker-compose.yml

.PHONY: up down build logs artisan prod-up prod-down prod-build prod-logs

up:
	$(DEV_COMPOSE) up --build -d

down:
	$(DEV_COMPOSE) down

build:
	$(DEV_COMPOSE) build

logs:
	$(DEV_COMPOSE) logs -f --tail=200

artisan:
	$(DEV_COMPOSE) exec app php artisan $(cmd)

prod-up:
	$(PROD_COMPOSE) up --build -d

prod-down:
	$(PROD_COMPOSE) down

prod-build:
	$(PROD_COMPOSE) build

prod-logs:
	$(PROD_COMPOSE) logs -f --tail=200