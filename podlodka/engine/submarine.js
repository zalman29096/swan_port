var submarineCoordinate=15;
var x=0;
var y=500;
var stepX=4;
var stepY=0;
var imagesArray=new Array();
var mousex=10;
var mousey=10;
var accelerationX=0;
var accelerationY=0;
var ex=0;
var ey=0;
var stepShift=0;
function animateSubmarine(){
	stepX=stepX+accelerationX-0.035*stepX;
	stepY=stepY+accelerationY-0.035*stepY;
	x=x+stepX;
	y=y+stepY;
	sectorCount();
	submarine_div.style.top=y;	
	submarine_div.style.left=x;	 
}

function moveMouse(event){
	mousex=event.pageX;
	mousey=event.pageY;
	return true;
}

function moveMouseIE(){
	mousex=window.event.x + document.body.scrollLeft;    
	mousey=window.event.y + document.body.scrollTop;	
}

if (navigator.userAgent.indexOf("MSIE") == -1){
	document.captureEvents(Event.MOUSEMOVE);
	document.onMouseMove=moveMouse;
	document.onmousemove=moveMouse;
}else{
	document.onmousemove=moveMouseIE;
}

function submarineMoveLeft(rMouseX){
	accelerationX=-0.001*rMouseX;
	stepShift=-0.1;
	slide.src="img/podlodka_left.gif";
	submarineCoordinate=150;
}
function submarineMoveRight(rMouseX){
	accelerationX=0.001*rMouseX;
	stepShift=0.1;
	slide.src="img/podlodka_right.gif";
	submarineCoordinate=15;
}
function sectorCount(){
	var ex=Math.abs(mousex-x);
	var ey=Math.abs(mousey-y);
	if(ex<=16 && mousey<=y){
		accelerationY=-0.001*ey;	
	}
	if(mousex+16<=x && mousey+16<=y){
		submarineMoveLeft(ex);
		accelerationY=-0.001*ey;	
	}
	if(ey<=16 && mousex<=x){
		submarineMoveLeft(ex);
	}
	if(mousex+16<=x && mousey-16>y){
		submarineMoveLeft(ex);
		accelerationY=0.001*ey;
	}
	if(ex<=16 && mousey>y){
		accelerationY=0.001*ey;
	}
	if(mousex-16>x && mousey-16>y){
		submarineMoveRight(ex);
		accelerationY=0.001*ey;	
	} 
	if(ey<=16 && mousex>x){
		submarineMoveRight(ex);
	}
	if(mousex-16>x && mousey+16<=y){
		submarineMoveRight(ex);
		accelerationY=-0.001*ey;
	}
	if(Math.abs(stepX)<1 && ex<16){
		stepX=0;          	
	}
	if(Math.abs(stepY)<1 && ey<16){
		stepY=0;          	
	}
}
setInterval("animateSubmarine()",10);


	
