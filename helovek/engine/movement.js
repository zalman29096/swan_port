
var y = 0;
var stepY = 0;
var x = 0;
var stepX = 4;	
var pictureNumber = 0;			//number of current picture in seria
var mousex = 10;
var mousey = 10;
/*
	Each direction has a set of images.
	move down right - downRight
	move down left - downLeft
	move up left - upLeft
	move up right - upRight
	move straight left - leftStraight
	move straight right - rightStraight
	move straight up - upStraight
	move straight down - downStraight
*/
var imagesArray = downRight;		//current set to be animated
var animationCounter = 0;		//amount of pictures in one seria

function animate(){
	x=x+stepX; 
	y=y+stepY;
	sectorCount();
	if(y+57>document.body.clientHeight){
		stepY=-4;
		imagesArray=downRight;
	}
	if(y+11<0){                                    
		stepY=4;
		imagesArray=upLeft;
	}
	if(x+43>document.body.clientWidth){
		stepX=-4;
		imagesArray=downLeft;
	}
	if(x+30<0){
		stepX=4; 
		imagesArray=upRight;
	}
	helovek.style.top=y;	
	helovek.style.left=x;	
	pictureNumber++;
	if(pictureNumber>animationCounter){		
		pictureNumber=0;
	}
	slide.src=imagesArray[pictureNumber].src;
}
                                                            
function moveMouse(){
	mousex=window.event.x;    
	mousey=window.event.y;	
}

function sectorCount(){
	var ex=Math.abs(mousex-x);
	var ey=Math.abs(mousey-y);
	if(ex<16 && mousey<y){
		imagesArray=upStraight; 
		stepX=0; stepY=-4;
		animationCounter=7;
	}
	if(mousex+16<x && mousey+16<y){
		imagesArray=upLeft;
		stepX=-2; stepY=-2;
		animationCounter=4;
	}
	if(ey<16 && mousex<x){
		imagesArray=leftStraight;
		stepX=-4; stepY=0;
		animationCounter=4;
	}
	if(mousex+16<x && mousey-16>y){
		imagesArray=downLeft;
		stepX=-2; stepY=2;
		animationCounter=4;
	}
	if(ex<16 && mousey>y){
		imagesArray=downStraight;
		stepX=0; stepY=4;
		animationCounter=7;
	}
	if(mousex-16>x && mousey-16>y){
		imagesArray=downRight; 
		stepX=2; stepY=2;
		animationCounter=4;
	}
	if(ey<16 && mousex>x){
		imagesArray=rightStraight; 
		stepX=4; stepY=0;
		animationCounter=4;
	}
	if(mousex-16>x && mousey+16<y){
		imagesArray=upRight; 
		stepX=2; stepY=-2;
		animationCounter=4;
	}
	if(ex<16 && ey<16){
		imagesArray=stand; 
		stepX=0; stepY=0;
		animationCounter=0;
	}
}

setInterval("animate()",100);
