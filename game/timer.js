function count () {
	if (this.time > 0){
		this.time--;
	} else {
		if (this.notYetRung) this.ring();
	}
}

function timerStart(delay) {
	this.time=delay;
	this.notYetRung=true;
}

function ring(){
	this.notYetRung=false;
	this.onRing(this.owner);
}

function timer(onRingFunction, owner){
	this.owner=owner;
	this.onRing=onRingFunction;
	this.notYetRung=false;
	this.time=0;
	this.ring=ring;
	this.onTimer=count;
	this.start=timerStart;
	timers.add(this);
}