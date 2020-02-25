FROM updated-ubuntu

RUN apt-get update && apt-get install python supervisor -y && adduser shell && mkdir -p /var/log/supervisor
USER shell

COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf
WORKDIR /home/shell
COPY fast.py /home/shell/fast.py
COPY file.txt /home/shell/file.txt

EXPOSE 5555
ENTRYPOINT ["/usr/bin/supervisord"]
