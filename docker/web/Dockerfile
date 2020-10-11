FROM centos:7
RUN yum -y update
RUN yum -y install httpd epel-release
RUN rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN yum -y install --enablerepo=remi-php73 php php-mbstring php-xml php-xmlrpc php-gd php-pdo php-pecl-mcrypt php-mysqlnd php-pecl-mysql
CMD ["/usr/sbin/httpd", "-D", "FOREGROUND"]
EXPOSE 80