down:
	sudo docker container stop srcs-nginx-1 srcs-mariadb-1 srcs-wordpress-1
	sudo docker container rm srcs-nginx-1 srcs-mariadb-1 srcs-wordpress-1

up:
	cd srcs && sudo docker compose up --build
