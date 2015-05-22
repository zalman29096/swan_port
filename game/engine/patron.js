function movePatron(){
	if (this.polet) this.fly();
}

function flyPatron(){
	if(!this.isBomb){		
		this.stepY=this.stepY+this.YCoeff;
	}else{
		this.stepY=this.stepY+0.095;
	}
	this.x=this.x+this.stepX;
	this.y=this.y+this.stepY;
	if (!this.isBomb) this.checkPlanesHit();
	if(this.isHarmful) this.isHited(pushka);
	this.checkWall();
	this.draw();
}

function isHited(object){
    if (this.isHitRectangle(object)){
		if(this.isHitBack(object) && object.hitTimes < 1 && object.isPlane){
			this.stop(); 
			object.isPartlyHited();
		}else{
			game.changeScore(object.price);                                 
			this.stop();
			vzriv.bah(object);
			object.explode();
			object.kill();
			object.hitTimes = 0;
			return true;
		}
	} else { return false; }
}



function stop(){
	if (this.isBomb) this.x=-20;
	else			 kucha.put(this);	
	this.polet=false;
	this.draw();
}

function checkWall(){
	if(this.isBomb && this.isHarmful && this.y>document.body.clientHeight-this.height){
			vzriv.bah(this);

	}
	if(this.x>document.body.clientWidth || 
	   this.y>document.body.clientHeight-this.height || 
	   this.x<=0){
		
		this.stop();	
	}
}

function isHitRectangle(rectangle){
	return (
		this.x + this.length > rectangle.x  				  && 
		this.x               < rectangle.x + rectangle.length && 
		this.y + this.height > rectangle.y + rectangle.sdvigPlankiY	  && 
		this.y               < rectangle.y + rectangle.height
	);
}
function isHitBack(plane){
	if(plane.goingLeft){	
		return (
			this.x + this.length > plane.x + plane.length/2			  && 
			this.x               < plane.x + plane.length			  && 
			this.y + this.height > plane.y + plane.sdvigPlankiY		  && 
			this.y               < plane.y + plane.height
		);
	}else{
		return (
			this.x + this.length > plane.x  				  && 
			this.x               < plane.x + plane.length/2			  && 
			this.y + this.height > plane.y + plane.sdvigPlankiY		  && 
			this.y               < plane.y + plane.height
		);	
	}
}

function checkPlanesHit(){
	for(var i=0; i<samolety.massiv.length; i++) {
		if (this.isHited(samolety.massiv[i])) break;
	}
}

function draw(){
	document.all[this.divName].style.top=this.y;
	document.all[this.divName].style.left=this.x;
} 


function patron(l,h,divName,isBomb, isHarmful){
	this.x=-20;
	this.y=-20;
	this.divName=divName;
	this.isBomb=isBomb;
	this.isHarmful=isHarmful;
	this.polet=false;
	this.length=l;
	this.height=h;
	this.stepX=0;
	this.stepY=0;

	this.onTimer=movePatron;
	this.checkWall=checkWall;
	this.checkPlanesHit=checkPlanesHit;

	this.draw=draw;
	this.stop=stop;
	this.isHitBack = isHitBack;
	this.isHited=isHited;
	this.fly=flyPatron;

	this.YCoeff = 65/document.body.clientHeight;
	this.isHitRectangle=isHitRectangle;
	if (isBomb)	bombs.add(this);
	else 		patrony.add(this);
}
