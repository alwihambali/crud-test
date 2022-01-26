FROM php:7.3-apache

#Install git and MySQL extensions for PHP

RUN apt-get update && apt-get install -y git wget
RUN docker-php-ext-install pdo pdo_mysql mysqli
RUN a2enmod rewrite
RUN wget https://dl.google.com/cloudsql/cloud_sql_proxy.linux.amd64 -O cloud_sql_proxy
RUN chmod +x cloud_sql_proxy

COPY . . /var/www/html/
EXPOSE 80/tcp
EXPOSE 443/tcp
CMD ["sh", "-c", "./cloud_sql_proxy -instances=bss-sandbox-env-1:asia-southeast2:bss-dev-mysql-server=tcp:34.101.142.207:3306 & yarn start"]
