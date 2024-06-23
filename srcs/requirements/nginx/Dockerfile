FROM debian:latest

RUN apt update && apt upgrade && apt install -y \
    nginx vim curl

CMD ["nginx", "-g", "daemon off;"]

