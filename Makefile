


debian:
	docker run -it --rm --name my_debian --network inception debian bash

build:
	cd srcs && sudo docker-compose build


up:
	cd srcs && sudo docker-compose build --no-cache
	cd srcs && sudo docker-compose up -d

en:
	docker exec -it srcs-nginx-1 bin/bash
ew:
	docker exec -it srcs-wordpress-1 bin/bash
em:
	docker exec -it srcs-mariadb-1 bin/bash

down:
	cd srcs && docker-compose down

env:
	docker exec srcs-nginx-1 env

rmv:
	docker volume rm srcs_mariadb srcs_wordpress

log:
	cd srcs && docker-compose logs

