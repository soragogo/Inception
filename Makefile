


debian:
	docker run -it --rm --name my_debian --network inception debian bash

up:
	cd srcs && sudo docker-compose up --build -d

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
