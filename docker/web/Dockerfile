FROM centos:7
RUN yum -y update
RUN yum -y install httpd php
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
EXPOSE 80