FROM ubuntu:18.04

RUN apt update && apt install openssh-server supervisor -y && adduser shell
RUN mkdir -p /var/run/sshd /var/log/supervisor

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
RUN ssh-keygen -A

USER shell

WORKDIR /home/shell
RUN mkdir .ssh/ 
COPY authorized_keys /home/shell/.ssh/authorized_keys
COPY flag.txt /home/shell/flag.txt

USER root

EXPOSE 22
CMD ["/usr/bin/supervisord"]