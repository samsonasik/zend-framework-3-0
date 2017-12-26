#!/usr/bin/env bash

function init() {
    composer install --no-dev --classmap-authoritative
    [ "$?" != "0" ] && exit 1

    sudo /bin/rm -rf data/cache/*.php
    [ "$?" != "0" ] && exit 1

    return 0
}
