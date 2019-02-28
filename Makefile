test-unit:
	vendor/bin/phpunit --testsuite=Unit

install:
	docker-compose up -d
	docker-composer php exec composer install