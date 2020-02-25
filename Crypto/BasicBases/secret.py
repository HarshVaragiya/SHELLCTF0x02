from base64 import b64encode

flag = "shellpwn{enc0ding_i$_n0t_encrYpt1ng}"

output = flag.encode()
for i in range(0x0F):
    output = b64encode(output)

print(output.decode())