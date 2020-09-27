FROM centos:7
RUN yum -y update
RUN yum -y install httpd php mysql-server
ADD ./webroot/index.php /var/www/html
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
EXPOSE 80