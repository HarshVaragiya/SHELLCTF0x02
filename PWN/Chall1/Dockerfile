FROM updated-ubuntu
RUN apt-get update && apt-get install ucspi-tcp && adduser tmp

USER tmp
COPY exploit /home/tmp/exploit
COPY flag.txt /home/tmp/flag.txt

USER root
RUN chown -R tmp:tmp /home/tmp/*
RUN chmod +x /home/tmp/exploit
WORKDIR /home/tmp/
EXPOSE 9999
USER tmp
CMD tcpserver -vPRH1 0.0.0.0 9999 ./exploit
