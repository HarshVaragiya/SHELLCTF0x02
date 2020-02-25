FROM ubuntu:18.04

RUN apt update && apt install python2 supervisor -y && adduser shell
RUN mkdir /var/log/supervisor

COPY supervisor.conf /etc/supervisor/conf.d/supervisor.conf

USER shell

WORKDIR /home/shell
COPY fast.py /home/shell/fast.py

RUN python fast.py
EXPOSE 5555
CMD ["/usr/bin/supervisord"]
