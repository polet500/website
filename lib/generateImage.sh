#!/bin/bash

headline="$(cat item.md)"




convert ../assets/img/model-headline.png -size 600x300! \
-background none -gravity center -font Amatic-SC-Bold \
-fill white caption:"$headline" \
-composite fb-banner.jpg

echo $headline 
echo "image done" 
