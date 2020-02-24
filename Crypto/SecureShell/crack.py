from base64 import b64decode,b64encode
from Crypto.Protocol.KDF import PBKDF2
from Crypto.PublicKey import ECC

target = b64decode("vg==".encode())
salt = 'suPer_s3cur3_s@1t'.encode()

def s3cure_rand0m(i):
    s3cure_rand0m.count +=1
    rand = PBKDF2((s3cure_rand0m.password+hex(s3cure_rand0m.count)).encode(),salt,dkLen=i,count=1)
    print("dKLen = {} , Count = {} , Rand = {} ".format(i,s3cure_rand0m.count,b64encode(rand).decode()))
    return rand

def gen_key(password):
    s3cure_rand0m.count = 0
    s3cure_rand0m.password = str(password)
    return ECC.generate(curve='P-521',randfunc=s3cure_rand0m)


for password in range(1,100):
    rand = PBKDF2((str(password)+hex(1)).encode(),salt,dkLen=1,count=1)
    if rand == target:
        print(password)
        print(gen_key(password).export_key(format='PEM'))