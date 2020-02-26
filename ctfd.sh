#!/bin/bash

while test "1" = "1"
do
	ret=0
	for i in {1..5}
	do
		curl http://shellpwn.ml -I | grep -i "internal"
		code=$?
		echo "Exit Code : $code"
		sleep 1
		echo $ret
		if [[ $code -ne 1 ]]
		then
			ret=$(($ret+1))
		fi
		echo $ret
	done

	if [[ $ret -eq 5 ]]
	then
		echo "Fucking Servers"
		fuser -k -n tcp 80
		sleep 2	
		echo "Restarting Session!"
		#tmux new-session -d -s ctfd '/usr/bin/python3 /home/ubuntu/ctf/0x02/serve.py --port 80'
		echo "fuxserver"	
fi
done
