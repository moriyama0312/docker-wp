FROM centos:7
RUN yum -y update
RUN yum -y install httpd php mysql-server
ADD ./webroot/index.php /var/www/html
EXPOSE 80