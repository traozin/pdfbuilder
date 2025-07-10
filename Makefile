.PHONY: artisan composer bash fix-perms migrate seed clear

PHP_CONTAINER=mxgo-php

artisan:
	docker exec -it $(PHP_CONTAINER) php artisan $(args)

composer:
	docker exec -it $(PHP_CONTAINER) composer $(args)

bash:
	docker exec -it $(PHP_CONTAINER) bash

fix-perms:
	docker exec -it $(PHP_CONTAINER) chown -R www-data:www-data storage bootstrap/cache && \
	docker exec -it $(PHP_CONTAINER) chmod -R 775 storage bootstrap/cache

migrate:
	docker exec -it $(PHP_CONTAINER) php artisan migrate

seed:
	docker exec -it $(PHP_CONTAINER) php artisan db:seed

clear:
	docker exec -it $(PHP_CONTAINER) php artisan config:clear && \
	docker exec -it $(PHP_CONTAINER) php artisan route:clear && \
	docker exec -it $(PHP_CONTAINER) php artisan view:clear