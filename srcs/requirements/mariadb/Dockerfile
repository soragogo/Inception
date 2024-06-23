FROM debian:latest

RUN apt update && apt upgrade && apt install -y \
    mariadb-server

COPY conf/50-server.cnf /etc/mysql/mariadb.conf.d/.
COPY tools/init.sql /etx/mysql/init.sql

RUN mkdir /run/mysqld

CMD ["mysqld_safe"]
