function speedUp(This){
	This.recoveryDelay/=This.speedUpFactor;
	This.dropDelay/=This.speedUpFactor;
	This.gameTimer.start(This.speedUpDelay);
}

function changeScore(score){
	this.schet+=score;
	document.all["score"].innerHTML="Game score: " + this.schet;
}

function game(){
	this.schet=0;
	this.speedUpFactor=1.2;
	this.speedUpDelay=5000;
	this.recoveryDelay=1500;
	this.dropDelay=300;
	this.gameTimer=new timer(speedUp, this);
	this.gameTimer.start(this.speedUpDelay);
	this.changeScore=changeScore;
	this.speedUp=speedUp;
}
