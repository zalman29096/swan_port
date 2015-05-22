var bombNameCounter=0;
var pushkaInitPlace = document.body.clientHeight - 83;
var kuchaInitPlace = document.body.clientHeight - 8;
var timers=new collection();
var game=new game();
var patrony=new collection();
var bombs=new collection();
var kucha=new kucha(40, kuchaInitPlace);
var pushka=new pushka(110, pushkaInitPlace);
var samolety=new collection();
var oblaka=new collection();
var birds=new collection();
var oskolki=new collection();
var dymy = new collection();
var vzriv=new vzriv();
var leftPressed=false;
var rightPressed=false;
var spacePressed=false;
var upPressed=false;
var downPressed=false;
var upRepeated=false;
var downRepeated=false;
var spaceRepeated=false;




samolety.add(new samolet("samolet0", "sambik0", "img/messer.gif", "img/messer_right.gif", 113, 26, 5, 10, 5, false,0));
samolety.add(new samolet("samolet1", "sambik1", "img/kukuruznik.gif", "img/kukuruznik(right).gif", 120, 45, 3, 5, 0, false,1));
samolety.add(new samolet("samolet2", "sambik2", "img/reactiv.gif", "img/reactiv(right).gif", 174, 35, 6, 15, 0, false,2));
samolety.add(new samolet("samolet3", "sambik3", "img/messer.gif", "img/messer_right.gif", 113, 26, 4, 10, 5, false,3));
samolety.add(new samolet("samolet5", "sambik5", "img/reactiv.gif", "img/reactiv(right).gif", 174, 35, 7, 15, 0, false,4));
samolety.add(new samolet("samolet6", "sambik6", "img/passPlane1.gif", "img/passPlane(right).gif", 174, 35, 4, -100, 0, false,5));


	
for (var j=0; j<4; j++){	
	oskolki.add(new patron (15, 15, "oskolok" + j, true, false));
}
	
for (var i=0; i<4; i++){	
	birds.add(new bird("ptica" + i, "polet" + i));
}

oblaka.add(new samolet("cloud0", "fly0", "img/oblako1.gif", "img/oblako1.gif", 200, 118, 0.3+0.1*j, 0, 0, true));
oblaka.add(new samolet("cloud1", "fly1", "img/oblako2.gif", "img/oblako2.gif", 200, 118, 0.3+0.1*j, 0, 0, true));
oblaka.add(new samolet("cloud2", "fly2", "img/oblako1.gif", "img/oblako1.gif", 200, 118, 0.3+0.1*j, 0, 0, true));
oblaka.add(new samolet("cloud3", "fly3", "img/oblako2.gif", "img/oblako2.gif", 170, 53, 0.3+0.1*j, 0, 0, true));



function handleArrows(){
	if (!(rightPressed ^ leftPressed)) 
		pushka.stop();
	if (rightPressed && !leftPressed) 
		pushka.vPravo();
	if (leftPressed && !rightPressed)
		pushka.vLevo();
	if (upPressed && !downPressed && !upRepeated)
		pushka.upStvol();
	if (!upPressed && downPressed && !downRepeated)
		pushka.downStvol();
	upRepeated=upPressed;
	downRepeated=downPressed;
}

function handleSpace(){
	if (spacePressed && !spaceRepeated) fire(pushka);
	spaceRepeated=spacePressed;
}

function handleKeyUp(evnt){
	handleKeyEvent(evnt, false);
	return false;
}
 
function handleKeyDown(evnt){
	handleKeyEvent(evnt, true);
	return false;
}

window.onkeydown = handleKeyDown;
window.onkeyup = handleKeyUp;

function handleKeyEvent(evnt, keyDown){ 
	var e = window.event || evnt;
	if (e.keyCode==39) rightPressed=keyDown;
	if (e.keyCode==37) leftPressed=keyDown;
	if (e.keyCode==32) spacePressed=keyDown;
	if (e.keyCode==38) upPressed=keyDown;
	if (e.keyCode==40) downPressed=keyDown;
	handleArrows();
	handleSpace();
}

function animate(){	
	pushka.move();
	timers.animate();
	patrony.animate();
	bombs.animate();
	oblaka.animate();
	samolety.animate();
	birds.animate();
	oskolki.animate();
	dymy.animate();
}

setInterval("animate()",15);
