init:
	docker-compose run composer install

test:
	docker-compose run phpunit tests