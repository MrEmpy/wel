#!/bin/bash

if [[ $EUID -ne 0 ]]; then
   printf "\033[0;33m[-] \033[0;37mThis script must be run as root" 
   exit 1
fi

main () {
    printf "\033[0;34m[*] \033[0;37mInstalling...\n"
    chmod 775 .
    chmod 775 css
    chmod 775 dashboard
    chmod 775 js
    chmod 775 secret
    chmod 775 dashboard/openredirect
    chmod 757 dashboard/uploads
    chmod 775 dashboard/xss
    echo "CREATE DATABASE wel;" | mysql
    printf "\033[0;34m[*] \033[0;37mDatabase password\n"
    mysql -p wel < db.sql
}

main
