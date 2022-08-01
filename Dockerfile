FROM php:5.3.29-apache
RUN apt-get update && apt-get install -y --force-yes php5-mysql
RUN apt-get -y --force-yes -o Dpkg::Options::="--force-confnew" install libapache2-mod-php5
RUN service apache2 start
#WORKDIR /var/www/html
#RUN apt-get update
#RUN apt-get --yes --force-yes install wget
#RUN wget -O wp51.tar.gz https://wordpress.org/wordpress-5.1.13.tar.gz
#RUN tar xzvf wp51.tar.gz
#EXPOSE 80
RUN service apache2 start
#ENTRYPOINT ["/bin/bash"]