FROM updated-ubuntu

RUN apt update && apt install openssh-server python supervisor -y && adduser jail

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY ssh_config /etc/ssh/ssh_config
RUN mkdir -p /home/jail/Run/

USER jail
WORKDIR /home/jail/Run/

COPY flag.txt /home/jail/Run/flag.txt
COPY jail.sh /home/jail/Run/jail.sh

USER root
EXPOSE 22
RUN echo jail:admin | chpasswd

USER root

COPY sshd_config /etc/ssh/sshd_config
RUN service ssh start
CMD ["/usr/bin/supervisord"]
