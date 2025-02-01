up:
	cd srcs && sudo docker compose up -d --build

down:
	sudo docker container stop nginx mariadb wordpress
	sudo docker container rm nginx mariadb wordpress

up:
	cd srcs && docker compose up --build

en:
	docker exec -it nginx bin/bash
ew:
	docker exec -it wordpress bin/bash
em:
	docker exec -it mariadb bin/bash


env:
	docker exec nginx env

rm:
	cd srcs && docker compose down -v --rmi 'all'

log:
	cd srcs && docker-compose logs
