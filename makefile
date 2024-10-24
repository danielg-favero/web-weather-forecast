php := application
database := mysql
docker := docker-compose
compose := $(docker) --file docker-compose.yml
docker_exec := $(compose) exec

run:
	$(docker) up

prepare:
	$(docker_exec) $(php) composer install && $(docker_exec) $(php) npm install && $(docker_exec) $(php) chown -R www-data:www-data storage && $(docker_exec) $(php) php artisan key:generate

