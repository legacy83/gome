#!/bin/sh

# -- Composer Asset Plugin
# =========================================
composer --no-interaction global require "fxp/composer-asset-plugin:1.0.0"

# -- Composer Install/Update
# =========================================
cd /vagrant/ && composer --no-interaction install
cd /vagrant/ && composer --no-interaction update

# -- Console Migrate
# =========================================
/vagrant/console/yii migrate --interactive=0