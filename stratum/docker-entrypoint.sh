#!/bin/sh

set -e
set -o pipefail

echo "Configuring stratum...";

FILES=/var/stratum/config.sample/*.conf.tmpl
for file in $FILES; do
    NEW_CONFIG_FILE=$(basename ${file/conf.tmpl/conf};);
    filename="${file##*/}"
    ALGORITHM_NAME=${filename%%.*}
    ALGORITHM=$(eval echo \$ALGORITHM_NAME | tr [a-z] [A-Z])
    ALGO_ENABLED=$(eval echo \$ENABLE_ALGO_$ALGORITHM)
    # If app is in debug mode, show more information
    if [ "$ALGO_ENABLED" = true ]; then
        echo "Enabling $ALGORITHM algorithm..."
        if [ "$APP_DEBUG" = true ]; then
            echo "Dockerizing config file $(basename $file) to $NEW_CONFIG_FILE";
        fi
        dockerize -template $file:/var/stratum/config/$NEW_CONFIG_FILE
        echo "Starting $ALGORITHM"
        /var/stratum/stratum /var/stratum/config/$ALGORITHM_NAME & 
    fi
done

touch /var/stratum/stdout.log
touch /var/stratum/stratum.log

echo "Stratum started."

# Setup access and error log
dockerize \
  -stdout /var/stratum/stdout.log \
  -stderr /var/stratum/stratum.log

exec bash

