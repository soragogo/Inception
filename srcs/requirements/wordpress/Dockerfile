FROM debian:bookworm


RUN apt update -y && apt upgrade -y && apt install -y \
    php-fpm php-mysqli curl mariadb-client

COPY ./conf/www.conf /etc/php/8.2/fpm/pool.d/.
COPY tools/script.sh .
RUN chmod +x script.sh
ENTRYPOINT ["./script.sh"]
