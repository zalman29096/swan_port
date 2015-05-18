
function create(){
	this.element = document.createElement('div');
	this.element.innerHTML = "<img src='dym.png'>";
	this.element.style.width = 20;
	this.element.style.height = 20;
	this.element.style.position = 'absolute';
	document.body.appendChild(this.element);
}


function startDym(){
	this.createHtmlElement();
	this.element.style.top = this.y;
	this.element.style.left = this.x;
	this.alive = true;
} 

function killDym(){
	document.body.removeChild(this.element);
	this.alive = false;
}

function expand(){
	if(this.alive){
		this.lifeTime++;
		//this.element.style.opacity += this.opacityStep;
		console.log(this.element.style.opacity);
		if(this.lifeTime > this.maxLifeTime){
			this.killDym();
			this.lifeTime = 0;	
		}
	}
}

function dym(){
	this.x=500;
	this.y=500;
	this.isTimeToSmoke = false;
	this.alreadyExpanded = true;
	this.lifeTime = 0;
	this.maxLifeTime = 20;
	this.element;
	this.opacityStep = 0.3;
	this.killDym = killDym;
	this.createHtmlElement = create;
	this.startDym = startDym;
	this.alive = false;
	this.onTimer = expand;
	dymy.add(this);
}

