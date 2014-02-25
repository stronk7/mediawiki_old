all : check compress

check :
	recess sitebar.less

compress : compile
	recess --compress sitebar-debug.css > sitebar.css

compile :
	recess --compile sitebar.less > sitebar-debug.css
