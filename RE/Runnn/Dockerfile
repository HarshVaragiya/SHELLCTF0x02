FROM updated-ubuntu

RUN apt update && apt install net-tools openssh-server supervisor -y
RUN set -e -x; \
	groupadd -g 1337 run; \
	useradd -g 1337 -u 1337 -s /bin/bash -m run	

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY chall2 /home/run/Run/chall2
COPY flag.txt /root/admin/flag.txt

RUN chown root /home/run/Run/chall2
RUN chmod -u=s /home/run/Run/chall2
RUN chmod +x /home/run/Run/chall2 

RUN echo run:run | chpasswd

RUN service ssh start
CMD ["/usr/bin/supervisord"]
