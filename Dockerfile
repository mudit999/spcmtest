FROM centos

RUN yum update -y

RUN yum install nginx -y

COPY form.html /home/vagrant/DockerFiles/form.html

RUN systemctl enable nginx
