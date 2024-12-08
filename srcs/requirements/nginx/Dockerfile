FROM debian:bookworm

RUN apt update && apt upgrade && apt install -y \
    nginx openssl

# レビュー前に削除する
RUN apt install -y vim curl

RUN mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
        -out /etc/nginx/ssl/ekamada.pem \
        -keyout /etc/nginx/ssl/ekamada.key \
        -subj "/C=JP/ST=Tokyo/L=Tokyo/O=42 School/OU=ekamada/CN=ekamada/" 

COPY ./conf/default /etc/nginx/sites-available/.

CMD ["nginx", "-g", "daemon off;"]

