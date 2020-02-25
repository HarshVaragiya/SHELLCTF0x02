FROM patched_cryptsetup:latest

RUN rm -rf /root/*.deb

RUN echo "Remember Luke, You can't trust anyone at this point.." >> /root/notes.txt 
RUN echo "Be sure to make all the changes inside the secure encrypted container" >> /root/notes.txt
RUN echo "luke" > /root/.passwd
RUN echo "99a38e23d51d01ff120c360f9e0c698941cccebb60f8b3b0d8e13160892a298d  disk.img" > /root/sha256sum

COPY disk.img /root/disk.img