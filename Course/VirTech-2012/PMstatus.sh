#! /bin/bash
while [ 1 ]; do
    for i in {29..50}; do
	ping -c 1 192.168.0.$i
	echo $? >> PMstatus.tmp
    done
    mv PMstatus.tmp PMstatus
    sleep 60
done
