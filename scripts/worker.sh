#!/bin/bash
read commandline
read content
echo "$content" > data
name=$commandline
pdflatex -interaction=nonstopmode -halt-on-error $name.tex >> log 2 >> &1
pdfto
