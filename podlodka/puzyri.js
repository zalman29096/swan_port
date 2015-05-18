var massivPuzirey=new Array();
for(j=0;j<60;j=j+3){
	massivPuzirey[j]=new Puzir("puz"+j);
	massivPuzirey[j+1]=new Puzir("puza"+j);
	massivPuzirey[j+2]=new Puzir("puzb"+j);
	massivPuzirey[j].nachStepY=Math.random()*2+3;
	massivPuzirey[j+1].nachStepY=Math.random()*3+4;
	massivPuzirey[j+2].nachStepY=Math.random()*4+5;
	massivPuzirey[j].stepX=Math.random()*2+3;
	massivPuzirey[j+1].stepX=Math.random()*3+4;
	massivPuzirey[j+2].stepX=Math.random()*4+5;
}


function animate1(){
	var zapuskRazreshen=true;	
	for(j=0;j<60;j++){
		massivPuzirey[j].stepX=massivPuzirey[j].stepX-0.1*massivPuzirey[j].stepX;
		
		if (massivPuzirey[j].stepY<massivPuzirey[j].nachStepY){
			massivPuzirey[j].stepY++;
		}

		massivPuzirey[j].y=massivPuzirey[j].y-massivPuzirey[j].stepY;
		massivPuzirey[j].x=massivPuzirey[j].x+massivPuzirey[j].stepX;
		if(massivPuzirey[j].y<=-80 && zapuskRazreshen){
			massivPuzirey[j].y=y;
			massivPuzirey[j].x=x-Math.random()*20+koordinata;
			massivPuzirey[j].stepX=(40+Math.random()*20)*(-(uskorenieX+stepShift));
			massivPuzirey[j].stepY=0;
			zapuskRazreshen=false;
		}
		
		document.all[massivPuzirey[j].divName].style.top=massivPuzirey[j].y+65;
		document.all[massivPuzirey[j].divName].style.left=massivPuzirey[j].x; 
	}	
}
	
setInterval("animate1()",10); 
