#!/bin/sh

apt-get update
apt-get install libgcrypt11-dev libdevmapper-dev libpopt-dev uuid-dev libtool automake autopoint debhelper xsltproc docbook-xsl dpkg-dev

apt-get source cryptsetup
wget http://deriv.debian.net/patches/c/cryptsetup/Debian_cryptsetup_2:1.6.6-5_Kali_cryptsetup_2:1.6.6-5kali1.debian.patch

cd cryptsetup-1.6.6
patch -p1 < ../Debian_cryptsetup_2:1.6.6-5_Kali_cryptsetup_2:1.6.6-5kali1.debian.patch

dpkg-buildpackage -b -uc
