import hashlib

iterations = 0xFFFFF
init_password = "awesome_secure_password"

passwd = init_password.encode()
for i in range(iterations):
    passwd = hashlib.sha256(passwd).digest()
    if i % 0xFF :
        print(100*i/iterations,end='\r')

print(passwd.hex())
