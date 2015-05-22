function bah(hitedObject){
	animateVzriv(this);
	vzryv.style.top  = hitedObject.y + hitedObject.height/2 - this.height/2;
	vzryv.style.left = hitedObject.x + hitedObject.length/2 - this.width/2;
}

function animateVzriv(This){
	if (This.nomerKartinki < 3){
		bahalka.src=This.massivKartinok[This.nomerKartinki];
		This.nomerKartinki++;
		This.animateTimer.start(This.delay);
	} else {
		This.nomerKartinki=0;
		vzryv.style.top=-150;
		vzryv.style.left=-150;
	}
}
	
function vzriv(){
	this.delay=3;
	this.height=113;
	this.width=113;
	this.nomerKartinki=0;
	this.massivKartinok=new Array();
	for (var j=0; j<3; j++){
		this.massivKartinok[j]="img/vzryv" + j + ".gif";
	}
	this.bah=bah;
	this.animateTimer=new timer(animateVzriv, this);
}
