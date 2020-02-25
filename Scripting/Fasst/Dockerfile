FROM secureshell

RUN rm -rf /etc/supervisor/conf.d/supervisord.conf
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

USER shell
WORKDIR /home/shell
COPY fast.py /home/shell/fast.py
COPY file.txt /home/shell/file.txt

USER root
EXPOSE 4444
CMD ["/usr/bin/supervisord"]