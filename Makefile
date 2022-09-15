DOCKER_CONTAINER=hackaton_2022

DOCKER_ENV = docker/.env

UID = 1000:1000
EXEC_PHP = php
DOCKER_EXEC = docker exec -i -u ${UID}
DOCKER_EXEC_INTERACTIVE = docker exec -it -u ${UID}


ssh:
	$(DOCKER_EXEC_INTERACTIVE) ${DOCKER_CONTAINER} bash

docker-up:
	docker-compose --env-file ${DOCKER_ENV} up -d --remove-orphans