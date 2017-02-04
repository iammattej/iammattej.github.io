function myFunction1 (){
    var modal = document.getElementById('Modal_profile1');
    modal.style.display = "none";
    document.body.style.overflow = "";
}

function myFunction2 (){
    var modal = document.getElementById('Modal_profile2');
    modal.style.display = "none";
    document.body.style.overflow = "";
}

function openImg1() {
    var modal = document.getElementById('Modal_profile1');
    modal.style.display = "block";
    document.body.style.overflow = "hidden";
}

function openImg2() {
    var modal = document.getElementById('Modal_profile2');
    modal.style.display = "block";
    document.body.style.overflow = "hidden";
}

function openNav() {
    document.getElementById("Sidenav").style.width = "15vw";
    document.getElementById("Sidenav").style.marginTop = "9%";
    document.getElementById("openbtn").style.marginTop = "9%";
    document.getElementById("header").addEventListener("click", closeNav);
    document.getElementById("atclimg").addEventListener("click", closeNav);
}
function closeNav() {
    document.getElementById("Sidenav").style.width = "0";
    document.getElementById("main-article").style.marginLeft= "5%";
    document.getElementById("main-article").style.marginTop = "3vw";
    document.getElementById("openbtn").style.marginTop = "10%";
}
function clock(){
	var datum = new Date("Feb 02, 2017 10:00")
	var nu = new Date();
	räkna=Math.floor((nu.getTime()-datum.getTime())/1000);
	document.clock.secs.value = räkna%60;
	räkna = Math.floor(räkna/60);
	document.clock.mins.value = räkna%60;
	räkna = Math.floor(räkna/60);
	document.clock.hours.value = räkna%24;
	räkna = Math.floor(räkna/24);
	if (räkna >= 365){
		document.clock.days.value = räkna - 365*Math.floor(räkna/365);
	}
	else{
		document.clock.days.value = räkna
	}
	räkna=Math.floor(räkna/365);
	document.clock.years.value=räkna
	timme = new Number(document.clock.hours.value)
	min = new Number(document.clock.mins.value)
	sek = new Number(document.clock.secs.value)
	dag = new Number(document.clock.days.value)
	år = new Number(document.clock.years.value)
	timer()
}

function timer(){
	if ((min < 10) && (min != "00")){
	        dismin = "0" + min
	}
	else{
	        dismin = min
	}
	if ((timme < 10) && (timme != "00")){
	        distimme = "0" + timme
	}
	else{
	        distimme = timme
	}
	dissek = (sek < 10) ? sek = "0" + sek : sek
	document.clock.secs.value = dissek
	document.clock.mins.value = dismin
	document.clock.hours.value = distimme
	document.clock.days.value = dag
	document.clock.years.value = år
	if (sek < 59){
		sek++
	}
	else{
		sek = "0"
		min++
		if (min > 59){
			min = "00"
			timme++
	    if (timme > 23){
			timme = "0"
			dag++
		if (dag >364){
			dag = "0"
			år++
	    }
		}
		}

	}
     window.setTimeout("timer()",1000)
}