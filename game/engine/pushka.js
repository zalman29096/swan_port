function fire(This){
	if (kucha.verhKuchi!=0 && !This.broken && spacePressed) {
		var patron=kucha.take();
		var stvol=This.getStvolPos();
		patron.x=This.x+stvol.sdvigTochkiVihodaX;
		patron.y=This.y+stvol.sdvigTochkiVihodaY;
		patron.stepX=stvol.stepX;
		patron.stepY=stvol.stepY;
		patron.polet=true;
	}
	This.fireTimer.start(This.shootDelay);
}

function getStvolPos(){
	if (this.isPravo) return this.rightStvolPos[this.ugol];
	else              return this.leftStvolPos[this.ugol];
}

function upStvol(){
	if (this.ugol < 2) this.ugol++;
	stand.src=this.getStvolPos().kartinka;
}

function downStvol(){
	if (this.ugol > 0) this.ugol--;
	stand.src=this.getStvolPos().kartinka;
}

function stopPushka() {
	this.stepX=0;
}

function drawPushka(){
	canon.style.top=this.y;
	canon.style.left=this.x;
}

function destroy() {
	this.broken=true;
	this.x=-1000;
	this.draw();
	this.recoveryTimer.start(this.bahTimerDelay);
}

function recover(This) {	
	This.x=110;
	This.broken=false;
}

function vPravo(){
	this.stepX=5;	
	this.isPravo=true;
	stand.src=this.getStvolPos().kartinka;
}

function vLevo(){
	this.stepX=-5;	
	this.isPravo=false;
	stand.src=this.getStvolPos().kartinka;
}

function movePushka(){
	if (!this.broken) {
		if (( this.isPravo && (this.x < document.body.clientWidth - 100)) || 
			(!this.isPravo && (this.x > kucha.x + 25))) {
			this.x+=this.stepX;
			this.draw();
		}
	}
}
  
function empty(){}
  
function pushka(x,y){
	this.x=x;
	this.y=y;
	this.length=94;
	this.height=70;
	this.stepX=0;
	this.sdvigPlankiY=10;
	this.price=-50;
	this.isPravo=true;
	this.broken=false;
	this.shootDelay=10;
	this.bahTimerDelay=100;
	this.ugol=0;
	this.rightStvolPos=new Array(
		new stvolPos(61, 7, 9, -11, "../img/pushka1p.gif"),
		new stvolPos(52, 1, 5.5, -11, "../img/pushka2p.gif"),
		new stvolPos(42, -5, 2.2, -11, "../img/pushka3p.gif")
	);
	this.leftStvolPos=new Array(
		new stvolPos(24, 7, -9, -11, "../img/pushka1l.gif"),
		new stvolPos(34, 1, -5.5, -11, "../img/pushka2l.gif"),
		new stvolPos(45, -5, -2.2, -11, "../img/pushka3l.gif") 
	);
	this.recoveryTimer=new timer(recover, this);
	this.fireTimer=new timer(fire, this)
	this.kill=destroy;
	this.downStvol=downStvol;
	this.upStvol=upStvol;
	this.draw=drawPushka;
	this.isPlane=false;
	this.vPravo=vPravo;
	this.vLevo=vLevo; 
	this.explode=empty;
	this.move=movePushka;
	this.stop=stopPushka;
	this.getStvolPos=getStvolPos;
	this.initPlace = document.body.clientHeight - this.height;
	fire(this);
}
