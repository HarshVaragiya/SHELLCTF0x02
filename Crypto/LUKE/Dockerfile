FROM ubuntu:16.04


RUN apt update 
RUN apt-get install libgcrypt11-dev libdevmapper-dev libpopt-dev uuid-dev libtool automake autopoint debhelper xsltproc docbook-xsl dpkg-dev -y
RUN apt install libgcrypt11-dev libdevmapper-dev libpopt-dev uuid-dev libselinux1-dev libsepol1-dev libtool autoconf automake autopoint debhelper xsltproc docbook-xml docbook-xsl po-debconf git -y

RUN cp /etc/apt/sources.list /etc/apt/sources.list~
RUN sed -Ei 's/^# deb-src /deb-src /' /etc/apt/sources.list
RUN apt-get update

WORKDIR /root/
RUN apt-get source cryptsetup
RUN git clone https://gitlab.com/kalilinux/packages/cryptsetup-nuke-keys
WORKDIR /root/cryptsetup-1.6.6
RUN cd /root/cryptsetup-1.6.6 && patch -p1 < /root/cryptsetup-nuke-keys/cryptsetup_1.6.1+nuke_keys.diff
RUN dpkg-buildpackage -b -uc
WORKDIR /root/
RUN dpkg -i libcryptsetup*.deb
RUN dpkg -i cryptsetup*.deb

