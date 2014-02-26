all : check css

check :
	recess sitebar-doc.less
	recess sitebar-dev.less

css :
	recess --compile --compress sitebar-doc.less > sitebar-doc.css
	recess --compile --compress sitebar-dev.less > sitebar-dev.css
