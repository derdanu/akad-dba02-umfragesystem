#!/bin/bash
doxygen-1.8.5 doxygen.conf
cd latex
file=Makefile
filedist=Makefile.dist
cp $file $filedist
head -$(expr $(cat $filedist | wc -l) - 1) $filedist > $file
echo -e -n "\t" >> $file
echo "rm -f *.ps *.dvi *.aux *.toc *.idx *.ind *.ilg *.log *.out *.brf *.blg *.bbl " >> $file
make 	
make clean
cd ../latex_source
make 
make clean
cd ..
