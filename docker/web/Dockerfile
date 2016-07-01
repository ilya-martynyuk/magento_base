FROM ubuntu:15.10

MAINTAINER Ilya Martynyuk <i.martynyuk@insign.ch>

ENV APACHE_SERVERNAME docker-android-schweiz.ch
ENV APACHE_SERVERADMIN admin@localhost
ENV APACHE_DOCUMENTROOT /var/www
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_PID_FILE /var/run/apache2.pid
ENV APACHE_RUN_DIR /var/run/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2

RUN apt-get update && apt-get install -y \
    php5 \
    libapache2-mod-php5 \
    php5-intl \
    php-pear \
    php5-mcrypt \
    php5-sqlite \
    php5-xsl \
    php5-cli \
    php5-tidy \
    php5-gd \
    php5-json \
    php5-curl \
    php5-mysql \
    mysql-client \
    vim

RUN sed -i "s/;always_populate_raw_post_data = -1/always_populate_raw_post_data = -1/" /etc/php5/apache2/php.ini

RUN a2enmod rewrite
RUN php5enmod mcrypt

RUN echo "ServerName localhost" | tee /etc/apache2/conf-available/fqdn.conf \
	&& a2enconf fqdn

EXPOSE 22
EXPOSE 80
EXPOSE 443

CMD ["/usr/sbin/apache2", "-D", "FOREGROUND"]