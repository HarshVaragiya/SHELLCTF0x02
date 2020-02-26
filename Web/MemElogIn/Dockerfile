FROM ubuntu:trusty
  
# update source  
RUN echo "deb http://archive.ubuntu.com/ubuntu trusty main universe"> /etc/apt/sources.list \
	&& apt-get update \
	&& apt-get install -y mysql-server apache2 php5 php5-mysql

COPY shell.sql /root/
RUN /etc/init.d/mysql start &&\
    mysql -uroot -e  "create database shell;" && mysql shell < /root/shell.sql
	
RUN sed -Ei 's/^(bind-address|log)/#&/' /etc/mysql/my.cnf \
	&& echo 'skip-host-cache\nskip-name-resolve' | awk '{ print } $1 == "[mysqld]" && c == 0 { c = 1; system("cat") }' /etc/mysql/my.cnf > /tmp/my.cnf \
	&& mv /tmp/my.cnf /etc/mysql/my.cnf

COPY . /var/www/html/
RUN mkdir -p /var/www/html/finger-print/
COPY logs/.git /var/www/html/finger-print/.git
COPY logs/.htaccess /var/www/html/finger-print/.htaccess
COPY logs/index.php /var/www/html/finger-print/index.php
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
COPY dica_citeca /var/www/html/dica_citeca/

RUN rm /var/www/html/index.html \
	&& rm /var/www/html/Dockerfile \
	&& rm /var/www/html/shell.sql \
	&& rm /var/www/html/httpd-foreground \
	&& chown www-data:www-data /var/www/html -R \
	&& apt-get clean && rm -rf /var/lib/apt/lists/* 
COPY httpd-foreground /usr/bin
EXPOSE 80
CMD ["httpd-foreground"]
