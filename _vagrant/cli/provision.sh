#!/bin/sh

###########################################################
# Cli Provision
###########################################################

domain='192.168.27.14.xip.io'

apache2AddVhost="$(curl -sS https://raw.githubusercontent.com/trsenna/gozma14/0.5.0/cli/stuff/apache2/addVhost.sh)"
apache2Add301Redirect="$(curl -sS https://raw.githubusercontent.com/trsenna/gozma14/0.5.0/cli/stuff/apache2/add301Redirect.sh)"
mySQLCreateDB="$(curl -sS https://raw.githubusercontent.com/trsenna/gozma14/0.5.0/cli/stuff/mySQL/createDB.sh)"

##########################################
# Apache2 Setup
##########################################

echo "$apache2AddVhost" | bash -s "$domain"
echo "$apache2AddVhost" | bash -s "www.$domain"
echo "$apache2Add301Redirect" | bash -s "$domain" "www.$domain"

echo "$apache2AddVhost" | bash -s "api.$domain"
echo "$apache2AddVhost" | bash -s "admin.$domain"

##########################################
# MySQL Setup
##########################################

echo "$mySQLCreateDB" | bash -s "gome"

##########################################
# Front Setup
##########################################

rm -rf "/var/www/www.$domain/public_html"
ln -s /vagrant/www/web "/var/www/www.$domain/public_html"

##########################################
# Back Setup
##########################################

rm -rf "/var/www/admin.$domain/public_html"
ln -s /vagrant/admin/web "/var/www/admin.$domain/public_html"

##########################################
# API Setup
##########################################

rm -rf "/var/www/api.$domain/public_html"
ln -s /vagrant/api/web "/var/www/api.$domain/public_html"

##########################################
# Apache2 Reload
##########################################

service apache2 reload