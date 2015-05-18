var y=0;
var stepY=0;
var x=0;
var stepX=4;	
var pictureNumber=0;
var mousex=10;
var mousey=10;
var massivKartinok=spuskP;
var dlinaSerii=0
function animate(){
	x=x+stepX; 
	y=y+stepY;
	sectorCount();
	if(y+57>document.body.clientHeight){
		stepY=-4;
		massivKartinok=spuskP;
	}
	if(y+11<0){                                    
		stepY=4;
		massivKartinok=podemL;
	}
	if(x+43>document.body.clientWidth){
		stepX=-4;
		massivKartinok=spuskL;
	}
	if(x+30<0){
		stepX=4; 
		massivKartinok=podemP;
	}
	helovek.style.top=y;	
	helovek.style.left=x;	
	pictureNumber++;
	if(pictureNumber>dlinaSerii){		
		pictureNumber=0;
	}
	slide.src=massivKartinok[pictureNumber].src;
}
                                                            
function moveMouse(){
	mousex=window.event.x;    
	mousey=window.event.y;	
}

function sectorCount(){
	var ex=Math.abs(mousex-x);
	var ey=Math.abs(mousey-y);
	if(ex<16 && mousey<y){
		massivKartinok=podemV; 
		stepX=0; stepY=-4;
		dlinaSerii=7;
	}
	if(mousex+16<x && mousey+16<y){
		massivKartinok=podemL;
		stepX=-2; stepY=-2;
		dlinaSerii=4;
	}
	if(ey<16 && mousex<x){
		massivKartinok=lev;
		stepX=-4; stepY=0;
		dlinaSerii=4;
	}
	if(mousex+16<x && mousey-16>y){
		massivKartinok=spuskL;
		stepX=-2; stepY=2;
		dlinaSerii=4;
	}
	if(ex<16 && mousey>y){
		massivKartinok=spuskV;
		stepX=0; stepY=4;
		dlinaSerii=7;
	}
	if(mousex-16>x && mousey-16>y){
		massivKartinok=spuskP; 
		stepX=2; stepY=2;
		dlinaSerii=4;
	}
	if(ey<16 && mousex>x){
		massivKartinok=prav; 
		stepX=4; stepY=0;
		dlinaSerii=4;
	}
	if(mousex-16>x && mousey+16<y){
		massivKartinok=podemP; 
		stepX=2; stepY=-2;
		dlinaSerii=4;
	}
	if(ex<16 && ey<16){
		massivKartinok=stand; 
		stepX=0; stepY=0;
		dlinaSerii=0;
	}
}

setInterval("animate()",100);
