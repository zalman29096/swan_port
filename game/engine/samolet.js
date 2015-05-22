function fly(){
	this.x=this.x+this.stepX;
	this.y=this.y+this.stepY;
	this.checkWall();
	this.draw();
}

function relaunch(This) {
	if (Math.random()>0.5 || This.isOblako){
		This.goingLeft = true;
		This.launch(document.body.clientWidth, 
					-This.speed,
					This.srcL

				   );
	}
	else{		
		This.goingLeft = false;		       
		This.launch(-This.length, 
					This.speed,
					This.srcP

				   );
	}
}

function kill(){
	this.x=-this.length;
	this.y = 0;
	this.alive = false;
	this.hitTimes = 0;
	this.lastAvalibleDym = 0;
	this.timeToSmoke = false;
	this.stepX=0;
	this.stepY=0;
	this.rotAngle=0;
	this.rotCounter=0;
	var delay=0;
	if(this.wasRotatedLeft || this.wasRotatedRight) document.all[this.divName].style.transform = 'rotate(0deg)';
	this.wasRotatedLeft = false;
	this.wasRotatedRight = false;
	if (this.isOblako) delay=1000;
	else delay=game.recoveryDelay;
	this.relaunchTimer.start(delay * Math.random());
}

function launch(position, speed, picture){ 	
	this.y=Math.random()*350;
	this.x=position;
	this.stepX=speed;
	this.alive = true;
	document.all[this.imgName].src=picture;
	this.bombNumber=0;

	this.dropTimer.start(game.dropDelay * Math.random() + 15);
	//if(this.hitTimes == 1)  this.dymTimer.start(4);
}

function checkWallPlane(){
	if (this.x>document.body.clientWidth || this.x < -this.length){ 
		this.kill();
	}
	this.checkpoint = this.y + this.height;
	if (this.checkpoint >= document.body.clientHeight){
		if(this.alive) game.changeScore(this.price);  
		this.alive = false;
		vzriv.bah(this);                               	
		this.kill();
	}
}

function drawPlane(){
	document.all[this.divName].style.left=this.x;
	document.all[this.divName].style.top=this.y; 
	//console.log(this.rotCounter);
	if(this.rotCounter < 60 && this.hitTimes == 1){
		this.getDown();
	}
	
} 

function dropBomb(This){
	if (This.bombNumber < This.kol_voBomb) {
		var bomb=This.massivBomb[This.bombNumber];
		bomb.x=This.x+This.length/2;
		bomb.y=This.y+This.height;
		bomb.stepX=This.stepX/2;
		bomb.stepY=0;
		bomb.polet=true;
		This.bombNumber++;
		This.dropTimer.start(game.dropDelay * Math.random() + 25);
	}
}

/*function makeSmoke(This){
	if (This.alive && This.isTimeToSmoke) {
		var smoke = This.massivDymov[This.lastAvalibleDym];
		if(This.goingLeft){			
			smoke.x=This.x + This.length;
		}else{
			smoke.x=This.x;		
		}
		smoke.y=This.y;
		This.lastAvalibleDym++;
		if (This.lastAvalibleDym == This.maxDymAmmount) {
			This.lastAvalibleDym = 0;		
		}
		smoke.startDym();
		This.dymTimer.start(4);
	}
}*/

function fall(){
	
		this.rotAngle += 1;
		this.stepY+=this.speed/15;
		if(!this.goingLeft){
			this.wasRotatedRight = true;
			document.all[this.divName].style.transform = 'rotate('+ this.rotAngle +'deg)'; 
		}else{
			this.wasRotatedLeft = true;
			document.all[this.divName].style.transform = 'rotate(-'+ this.rotAngle +'deg)'; 
		}
		this.rotCounter++;

	
}

function isPartlyHited(){
	//this.isTimeToSmoke = true;
	this.hitTimes++;
	//this.makeSmoke(this);

}


function explode(){
	for(var i=0; i<oskolki.massiv.length; i++){
		var oskolok = oskolki.massiv[i];
		oskolok.x=this.x+this.length/2;
		oskolok.y=this.y+this.height/2;
		oskolok.stepX=Math.random() * 6 - 3;
		oskolok.stepY=Math.random() * 6 - 3;
		oskolok.polet=true;
	}
}               

function samolet(divName,imgName,srcL,srcP,lenght,height,speed,price,kol_voBomb,isOblako, number){
	this.x=-1000;
	this.y=-1000;
	this.stepX=3;
	this.stepY=0;
	this.planeNumber = number;
	this.hitTimes = 0;
	this.rotAngle = 0;
	this.goingLeft = false;
	this.massivBomb=new Array();
	this.kol_voBomb=kol_voBomb;
	for (var j=0; j<this.kol_voBomb; j++) {
		this.massivBomb[j] = new patron (8, 20, "bomb" + bombNameCounter++, true, true);
	}
	this.sdvigPlankiY=0;
	this.relaunchTimer=new timer(relaunch, this);
	this.bombNumber=0;
	this.rotCounter=0;
	this.maxDymAmmount = 5;
	this.dropTimer=new timer(dropBomb, this);
	this.imgName=imgName;
	this.isOblako=isOblako;
	this.speed=speed;
	this.price=price; 
	this.isPlane=true;
	this.wasRotatedLeft = false;
	this.wasRotatedRight = false;
	//this.dymTimer = new timer(makeSmoke, this);
	this.alive = true;
	this.isTimeToSmoke = false;
	this.lastAvalibleDym = 0;
	this.srcL=srcL;
	this.srcP=srcP;
	this.length=lenght;
	this.height=height;
	this.checkpoint;
	this.divName=divName;
	this.isPartlyHited = isPartlyHited;
	this.explode=explode;
	this.kill=kill;
	this.getDown = fall;
	//this.makeSmoke = makeSmoke;
	this.onTimer=fly;
	this.checkWall=checkWallPlane; 
	this.draw=drawPlane;
	this.launch=launch;
	this.massivDymov = new Array();
	if (isOblako) this.launch(Math.random()*document.body.clientWidth, -speed, srcL);
	else 		  this.kill();
	for(var i = 0; i < this.maxDymAmmount; i++){
		this.massivDymov[i] = new dym();
	}
} 
