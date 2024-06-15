#!/bin/bash


# rootユーザーでMariaDBに接続
mariadb -e "CREATE DATABASE $MYSQL_DATABASE"
mariadb -e "CREATE USER '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD'"
mariadb -e "GRANT ALL PRIVILEGES ON $MYSQL_DATABASE.* TO '$MYSQL_USER'@'%'"
mariadb -e "FLUSH PRIVILEGES"

mysqld_safe
