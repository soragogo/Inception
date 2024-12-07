FROM debian:bookworm

RUN apt update && apt upgrade && apt install -y \
    php-fpm php-mysqli

## レビュー前に削除する
RUN apt install -y curl

COPY ./conf/www.conf /etc/php/8.2/fpm/pool.d/.
COPY tools/script.sh .
RUN chmod +x script.sh
ENTRYPOINT ["./script.sh"]
