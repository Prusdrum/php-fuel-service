test-unit:
	vendor/bin/phpunit --testsuite=Unit

install:
	docker-compose up -d --build
	docker-compose exec php composer install