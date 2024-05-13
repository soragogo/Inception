FROM debian:latest

RUN	apt-get update -y && apt-get upgrade -y && \
        apt-get install -y nginx &&\
        apt-get install -y openssl &&\
        apt-get install -y vim  net-tools iputils-ping curl

# nginx SSL
RUN mkdir /etc/nginx/ssl
RUN openssl req -newkey rsa:4096 -x509 -sha256 -days 365 -nodes \
        -out /etc/nginx/ssl/ekamada.pem \
        -keyout /etc/nginx/ssl/ekamada.key \
        -subj "/C=JP/ST=Tokyo/L=Tokyo/O=42 School/OU=ekamada/CN=ekamada/" \
        -addext  "subjectAltName = DNS:localhost, IP:127.0.0.1"
# nginx config
COPY conf/default /etc/nginx/sites-available/default
# Start nginx
ENTRYPOINT ["nginx", "-g", "daemon off;"]
