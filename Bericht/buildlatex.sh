#!/bin/bash

latexmk -pdf --pdflatex="pdflatex -interaction=nonstopmode" -f -outdir=log hauptdatei.tex
mv log/hauptdatei.pdf ./ 
cp hauptdatei.pdf /var/www/html/$USER/
