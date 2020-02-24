from Crypto.PublicKey import ECC
from Crypto.Protocol.KDF import PBKDF2
from base64 import b64encode
from secret import secure_passphrase
import hashlib
import random

password = str(random.randint(0,100))
salt = 'suPer_s3cur3_s@1t'.encode()

def s3cure_rand0m(i):
    s3cure_rand0m.count +=1
    rand = PBKDF2((password+hex(s3cure_rand0m.count)).encode(),salt,dkLen=i,count=1)
    print("dKLen : {} , Count : {} , Rand : {} ".format(i,s3cure_rand0m.count,b64encode(rand).decode()))
    return rand

s3cure_rand0m.count = 0

ecc = ECC.generate(curve='P-521',randfunc=s3cure_rand0m)
private_key = ecc.export_key(format='PEM',passphrase=secure_passphrase,protection="PBKDF2WithHMAC-SHA1AndAES128-CBC")
print(private_key)
open('Crypto/SecureShell/private.pem','w').write(private_key)