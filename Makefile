down:
	sudo docker container stop nginx mariadb wordpress
	sudo docker container rm nginx mariadb wordpress

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
	docker volume rm mariadb wordpress

log:
	cd srcs && docker-compose logs
