# Use sudo if USE_SUDO is set to 1
SUDO=$(if $(USE_SUDO),sudo)

up:
	cd srcs && $(SUDO) docker compose up -d --build

down:
	$(SUDO) docker container stop nginx mariadb wordpress
	$(SUDO) docker container rm nginx mariadb wordpress

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
