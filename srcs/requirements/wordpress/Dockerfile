FROM debian:latest

RUN apt update
RUN apt install -y vim wget unzip net-tools
RUN apt install -y php-fpm php-mysqli php-gd php-curl php-xml php-mbstring php-zip
RUN wget https://wordpress.org/latest.zip
RUN mkdir -p /var/www/html/
RUN unzip latest.zip -d /var/www/html/
RUN chown -R www-data:www-data /var/www/html/wordpress
RUN rm latest.zip
RUN echo "listen=0.0.0.0:9000" >> /etc/php/8.2/fpm/pool.d/www.conf
EXPOSE 9000

CMD ["php-fpm8.2", "-F"]
