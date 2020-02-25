#!/bin/bash
check() {

	if [[ $1 == *[bdksctr'?''*''/''<''>''&''$']* ]]
	then
		return 0
	else
		return 1
	fi
}

while :
do
	echo -ne "Your Input:"
	read input
	if check "$input"
	then
		echo "Restriced Access!"
	else
		output=`$input < /dev/null` &>/dev/null
		echo "Command Executed"
	fi
done
