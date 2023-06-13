setup:
	@make build

build:
	docker compose build && docker compose up -d && docker compose logs -f
stop:
	docker compose stop

composer-update:
	docker exec laravel-app bash -c "composer update"

data:
	docker exec -it laravel-app bash -c "sudo -u devuser /bin/bash"







