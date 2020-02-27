import socket
import hashlib
import threading
import time

lock=threading.Lock()

#m=hashlib.md5()
socket = socket.socket(socket.AF_INET,socket.SOCK_STREAM)
#socket.setsockopt(socket.SOL_SOCKET,socket.SO_REUSEADDR,1)
socket.bind(('0.0.0.0',4444))
socket.listen(10)

def Server():
    if socket:
        conn,add=socket.accept()
        conn.send("Are you ready for the trip deep inside!Return MD5 of strings[Y/n]")
        user=conn.recv(1024).strip('\n')
        if user == "n":
            conn.close()
        fd=open("file.txt",'r')
        for lines in fd.readlines():
            try:
                payload=lines.strip('\n')
                conn.send("String: "+payload+"\n")
                m=hashlib.md5()
                m.update(payload)
                ans=m.hexdigest()
                user=conn.recv(1024)
                if ans == user.strip('\n'):
                    continue
                else:
                    conn.send("Send correct value!")
                    conn.close()
                    fd.close()
            except:
                conn.close()
        try:
            conn.send("Here is the flag: shellctf{y0u_c@Ught_m3}")
            fd.close()
            conn.close()
        except:
            pass

threads= []
for i in range(0,4):
    t=threading.Thread(target=Server)
    threads.append(t)
    t.start()

for thread in threads:
    thread.join()

time.sleep(200)
