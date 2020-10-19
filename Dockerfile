FROM phpmyadmin:latest

COPY form.html /var/www/html/form.html
COPY apache2.conf /etc/apache2/apache2.conf
#ENTRYPOINT bash
