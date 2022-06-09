#!/bin/bash
dst=/var/www/html/$USER/php/
cp -r www/* $dst
curl -s https://informatik.hs-bremerhaven.de/$USER/php/
url=https://informatik.hs-bremerhaven.de/$USER/php/
curl -s "$url/index.php?name=Hanspeter"
