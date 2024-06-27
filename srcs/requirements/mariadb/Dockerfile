FROM debian:latest

RUN apt update && apt upgrade && apt install -y \
    mariadb-server

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY tools/script.sh .
RUN chmod +x script.sh

RUN mkdir /run/mysqld



ENTRYPOINT ["./script.sh"]
