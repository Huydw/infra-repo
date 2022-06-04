#!/bin/bash

dst=/var/www/html/$USER/infra/

cp -r www/* $dst

currentdate=$(date)

echo "$currentdate" > $dst/happy.txt

happy=$(curl -s  https://informatik.hs-bremerhaven.de/$USER/infra/happy.txt)
if test  "$happy" = "$currentdate";then
  echo happy
fi

curl -s https://informatik.hs-bremerhaven.de/$USER/infra/ | html2text -utf8
