FROM debian:latest

RUN apt update
RUN apt install -y vim wget unzip net-tools curl
RUN apt install -y php-fpm php-mysqli php-gd php-curl php-xml php-mbstring php-zip
EXPOSE 9000
# RUN wget https://wordpress.org/latest.zip
# RUN mkdir -p /var/www/html/
# RUN unzip latest.zip -d /var/www/html/
# RUN chown -R www-data:www-data /var/www/html/wordpress
# RUN rm latest.zip
# COPY ./tools/wp-config.php /var/www/html/wordpress/
COPY ./tools/script.sh /
RUN chmod +x script.sh
RUN ./script.sh
CMD ["php-fpm8.2", "-F"]
