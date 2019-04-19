#!/bin/bash

ulimit -n 10240
ulimit -u 10240

echo "Starting ${1}..."
while [ -e /var/stratum/config/${1}.conf ]; do
	echo "Running ${1}..."
	gzip -f /var/stratum/config/${1}.log
        /var/stratum/stratum config/$1
	sleep 1
done
exec bash

