FROM patched_cryptsetup:latest

RUN rm -rf /root/*.deb

RUN echo "Remember Luke, You can't trust anyone at this point.." >> /root/notes.txt 
RUN echo "Be sure to make all the changes inside the secure encrypted container" >> /root/notes.txt
RUN echo "luke" > /root/.passwd
RUN echo "13be01f3fe01f2540985194e900c599a1fbcff405a3c6c0ddbd19b1c33899537  disk.img" > /root/sha256sum

COPY disk.img /root/disk.img