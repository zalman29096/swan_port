function lop(){
	this.x=-100;
	this.y=-100;
    this.stepY=0;

}
function pustit(x,y){
	this.x=x;
	this.y=y;
	this.stepY=-4;

}
function Puzir(divName){
	this.divName=divName;
	this.x=-50;
	this.y=-50;
	this.stepX=30;
	this.stepY=0;
	this.nachStepY=0;
	this.lop=lop;
    this.pustit=pustit;
}

	