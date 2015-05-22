var bubblesArray=new Array();
for(j=0;j<60;j=j+3){
	bubblesArray[j]=new Bubble("puz"+j);
	bubblesArray[j+1]=new Bubble("puza"+j);
	bubblesArray[j+2]=new Bubble("puzb"+j);
	bubblesArray[j].initialStepY=Math.random()*2+3;
	bubblesArray[j+1].initialStepY=Math.random()*3+4;
	bubblesArray[j+2].initialStepY=Math.random()*4+5;
	bubblesArray[j].stepX=Math.random()*2+3;
	bubblesArray[j+1].stepX=Math.random()*3+4;
	bubblesArray[j+2].stepX=Math.random()*4+5;
}


function animateBubble(){
	var launchAllowed=true;	
	for(j=0;j<60;j++){
		bubblesArray[j].stepX=bubblesArray[j].stepX-0.1*bubblesArray[j].stepX;
		
		if (bubblesArray[j].stepY<bubblesArray[j].initialStepY){
			bubblesArray[j].stepY++;
		}

		bubblesArray[j].y=bubblesArray[j].y-bubblesArray[j].stepY;
		bubblesArray[j].x=bubblesArray[j].x+bubblesArray[j].stepX;
		if(bubblesArray[j].y<=-80 && launchAllowed){
			bubblesArray[j].y=y;
			bubblesArray[j].x=x-Math.random()*20+submarineCoordinate;
			bubblesArray[j].stepX=(40+Math.random()*20)*(-(accelerationX+stepShift));
			bubblesArray[j].stepY=0;
			launchAllowed=false;
		}
		
		document.all[bubblesArray[j].divName].style.top=bubblesArray[j].y+65;
		document.all[bubblesArray[j].divName].style.left=bubblesArray[j].x; 
	}	
}
	
setInterval("animateBubble()",10); 
