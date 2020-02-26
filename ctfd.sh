#!/bin/bash


while test "1" = "1"
do
ret=0
for i in {1..5}
do

curl http://shellpwn.ml -I | grep -i "200"
sleep 1
if [[ $? -ne 1 ]]
then
ret=$(($ret+1))
fi

done

if [[ $ret -eq 5 ]]
then
fuser -k -n tcp 80
sleep 2
tmux new -s ctfd -d '/usr/bin/python3 /home/ubuntu/ctf/0x02/serve.py --port 80'
fi


done

