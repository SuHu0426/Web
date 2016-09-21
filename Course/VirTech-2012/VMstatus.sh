#! /bin/bash
while [ 1 ]; do
    for i in {129..150}; do
	ping -c 1 192.168.0.$i
	echo $? >> VMstatus.tmp
    done
    mv VMstatus.tmp VMstatus
    sleep 60
done
