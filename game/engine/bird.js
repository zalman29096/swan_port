function flyBird(){
	this.x+=this.stepX;
	this.y+=this.stepY;
	this.draw();
	this.checkWall();
}

function drawBird(){
	document.all[this.divName].style.top=this.y;
	document.all[this.divName].style.left=this.x;
}

function changeSrc(This){
	if (This.isUp) document.all[This.imgName].src="../img/birdDown.gif";
	else  		   document.all[This.imgName].src="../img/birdUp.gif";
	This.isUp=!This.isUp;
	This.imgChangeTimer.start(20);
}

function changeFlyDirection(This){
	This.stepY=Math.random() * 0.5 - 0.25;
	This.stepX=Math.random() - 0.5;
	if (This.stepX>0) This.stepX+=0.25;
	else			  This.stepX-=0.25;
	This.directionChangeTimer.start(500);
}

function checkWallBird(){
	if (this.x > document.body.clientWidth || this.x + this.length < 0) this.stepX*=-1; 
	if (this.y + this.height < 0 || this.y > document.body.clientHeight - 300) this.stepY*=-1;
}

function launchBird(){
	this.x=Math.random()*document.body.clientWidth;
	this.y=Math.random()*(document.body.clientHeight-300);
}

function bird(divName, imgName){
	this.x=0;
	this.y=0;
	this.stepX=0;
	this.stepY=0;
	this.divName=divName;
	this.imgName=imgName;
	this.length=11;
	this.height=8;
	this.isUp=true;
	this.imgChangeTimer=new timer(changeSrc, this);
	this.directionChangeTimer=new timer(changeFlyDirection, this);
	this.onTimer=flyBird;
	this.draw=drawBird;
	this.checkWall=checkWallBird;
	this.launch=launchBird;
	changeSrc(this);
	changeFlyDirection(this);
	this.launch();
}
