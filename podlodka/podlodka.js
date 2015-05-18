var koordinata=15;
var x=0;
var y=500;
var stepX=4;
var stepY=0;
var massivKartinok=new Array();
var a=new Array();
var s=new Array();
var p=0;
var mousex=10;
var mousey=10;
var uskorenieX=0;
var uskorenieY=0;
var ex=0;
var ey=0;
var stepShift=0;
function animate(){
	stepX=stepX+uskorenieX-0.035*stepX;
	stepY=stepY+uskorenieY-0.035*stepY;
	x=x+stepX;
	y=y+stepY;
	sectorCount();
	podvlodka.style.top=y;	
	podvlodka.style.left=x;	 
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

function podlodkaVlevo(rMouseX){
	uskorenieX=-0.001*rMouseX;
	stepShift=-0.1;
	slide.src="podlodka_left.gif";
	koordinata=150;
}
function podlodkaVpravo(rMouseX){
	uskorenieX=0.001*rMouseX;
	stepShift=0.1;
	slide.src="podlodka_right.gif";
	koordinata=15;
}
function sectorCount(){
	var ex=Math.abs(mousex-x);
	var ey=Math.abs(mousey-y);
	if(ex<=16 && mousey<=y){
		uskorenieY=-0.001*ey;	
	}
	if(mousex+16<=x && mousey+16<=y){
		podlodkaVlevo(ex);
		uskorenieY=-0.001*ey;	
	}
	if(ey<=16 && mousex<=x){
		podlodkaVlevo(ex);
	}
	if(mousex+16<=x && mousey-16>y){
		podlodkaVlevo(ex);
		uskorenieY=0.001*ey;
	}
	if(ex<=16 && mousey>y){
		uskorenieY=0.001*ey;
	}
	if(mousex-16>x && mousey-16>y){
		podlodkaVpravo(ex);
		uskorenieY=0.001*ey;	
	} 
	if(ey<=16 && mousex>x){
		podlodkaVpravo(ex);
	}
	if(mousex-16>x && mousey+16<=y){
		podlodkaVpravo(ex);
		uskorenieY=-0.001*ey;
	}
	if(Math.abs(stepX)<1 && ex<16){
		stepX=0;          	
	}
	if(Math.abs(stepY)<1 && ey<16){
		stepY=0;          	
	}
}
setInterval("animate()",10);


	
