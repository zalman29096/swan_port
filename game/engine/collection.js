function animateObjects(){
	for(var i=0; i<this.massiv.length; i++){
		this.massiv[i].onTimer();
	}
}

function add(object){
	this.massiv[this.massiv.length]=object;
}

function collection(){
	this.massiv=new Array();
	this.animate=animateObjects;
	this.add=add;

}
