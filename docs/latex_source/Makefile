all: inputs latex

inputs:
	ls ../latex/*source*.tex | awk '{printf "\\input{%s}\n", $$1}' > inputs.tex

latex:
	pdflatex source_code
	pdflatex source_code
clean:
	rm -f *.ps *.dvi *.aux *.toc *.idx *.ind *.ilg *.log *.out *.brf *.blg *.bbl 
