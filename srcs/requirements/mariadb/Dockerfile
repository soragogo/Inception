FROM debian:latest

RUN apt-get update && \
    apt-get install -y mariadb-server

COPY ./tools/script.sh /
COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/


CMD ["/script.sh"]
