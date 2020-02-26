echo "Started on $(date)" >> /root/killer.log

# Crypto
echo "Restarting secureshell container" >> /root/killer.log
docker kill secureshell
docker run -d --rm -p 4000:22 --name secureshell secureshell

# Scripting
echo "Restarting Escape container" >> /root/killer.log
docker kill escape
docker run -d --rm -p 4101:22 --name escape escape

echo "Restarting Fasst container" >> /root/killer.log
docker kill fasst
docker run -d --rm -p 4100:4444 --name fasst fasst

#  RE
echo "Restarting Run container" >> /root/killer.log
docker kill run
docker run -d --rm -p 4200:22 --name run run

#Web
echo "Restarting meme container" >> /root/killer.log
docker kill meme
docker run -d --rm -p 4300:80 --name meme meme



