FROM debian:latest

RUN apt update && apt upgrade && apt install -y \
    nginx vim curl

COPY ./conf/default /etc/nginx/sites-available/.

CMD ["nginx", "-g", "daemon off;"]

