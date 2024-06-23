down:
	sudo docker container stop srcs-nginx-1 srcs-mariadb-1 srcs-wordpress-1
	sudo docker container rm srcs-nginx-1 srcs-mariadb-1 srcs-wordpress-1

up:
	cd srcs && sudo docker compose up --build

en:
	docker exec -it nginx bin/bash
ew:
	docker exec -it wordpress bin/bash
em:
	docker exec -it mariadb bin/bash


env:
	docker exec nginx env

rmv:
	docker volume rm srcs_mariadb srcs_wordpress

log:
	cd srcs && docker-compose logs
