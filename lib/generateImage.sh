#!/bin/bash

title="$(cat item.md | grep -o 'title.*' | cut -f2- -d:)"
author="$(cat item.md | grep -o 'author.*' | cut -f2- -d:)"


convert ../../../../assets/img/fb-headline-new.png -size 1200x600! \
-background none -fill black  -font Montserrat-Bold -pointsize 22 caption:"$author" \
-pointsize 60 -gravity northwest -size 1000x500! -geometry +120+200 -compose over -composite caption:"$title" \
-gravity southwest -geometry +120-120 -compose over -composite \
banner-fb.jpg


echo $title
echo $author
echo "image done" 