function take(){
	if (this.verhKuchi > 0) {
		this.verhKuchi--;
		return this.snaryady[this.verhKuchi];
	} else return 0;
}

function put(snaryad){
	if (this.verhKuchi < this.kol_voPatronov) {
		snaryad.x=this.mesta[this.verhKuchi].x;
		snaryad.y=this.mesta[this.verhKuchi].y;
		this.snaryady[this.verhKuchi]=snaryad;
		this.verhKuchi++;	
	}
}

function makePatrony(){
	for(var j=0; j<this.kol_voPatronov; j++){
		var patr=new patron(8, 8, "patron"+j, false, true);
		this.put(patr);
		patr.draw();
	}
}

function kucha(x,y){
	this.x=x;
	this.y=y;
	this.verhKuchi=0;
	this.snaryady=new Array();
	this.put=put;
	this.take=take;
	this.mesta=new Array(
		new mesto(x,y),
		new mesto(x+8,y),
		new mesto(x+16,y),
		new mesto(x+4,y-8),
		new mesto(x+12,y-8),
		new mesto(x+8,y-16)
	);
	this.kol_voPatronov=this.mesta.length;
	this.makePatrony=makePatrony;
	this.makePatrony();
}

function mesto(x,y){
	this.x=x;
	this.y=y;
}
