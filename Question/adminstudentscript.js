function rowColIndex(ind){
	var x=ind.cells[1].innerHTML;
	document.getElementById("regToSend").value=x;
	document.getElementById("submitForm").submit();
	//alert(x);
}
var stA=0;
var p;
var q;
var tt=0;
var index=1;
function inc(){
	stA=stA+20;
	if(tt==1)
	again();
else if(tt==2)
	hide(p,q);
}
function dec(){
	stA=stA-20;
	if(stA<0){
		stA=0;
		alert("No Previous Record");
	}
	if(tt==1)
	again();
else if(tt==2)
	hide(p,q);
}
function again(){
	if(tt!=1){
		stA=0;
	}
	tt=1;
	 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("t").innerHTML = this.responseText;
            }
        };
		
             xmlhttp.open("GET", "AdminStudentAll.php?start="+stA, true);
		xmlhttp.send();
}
function hide(n,k){
	document.getElementById("tble").style="display:none";
	 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("t").innerHTML = this.responseText;
            }
        };
		if(n==1){
             xmlhttp.open("GET", "AdminStudentBranch.php?val="+k+"&start="+stA, true);
		}
		else{
			xmlhttp.open("GET", "AdminStudentYear.php?val="+k+"&start="+stA, true);
		}
        xmlhttp.send();
}
function got(h,r, vb){ 
stA=0;
tt=2;
	var k=r.cells[vb.target.cellIndex].innerHTML;
	if(k=='CSE')
		k='CS';
	else if(k=='IT')
		k='IT';
	else if(k=='Civil')
		k='CE';
	else if(k=='Electrical')
		k='EE';
	else if(k=='ETC')
		k='ET';
	else if(k=='Chemical')
		k='CH';
	else if(k=='Applied')
		k='AE';
	else if(k=='Mechanical')
		k='ME';
	
	p=h;
	q=k;
	hide(h,k);
}
function show(t){
	if(t==1){
		document.getElementById("t1").style="display:block";
		document.getElementById("t2").style="display:none";
	}
	else{
		document.getElementById("t2").style="display:block";
		document.getElementById("t1").style="display:none";
	}
}

function myFunction() {
	document.getElementById("myDropdown").style="display:block";
    document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
var b=0;
var jjj=0;
function blink(){
	if(jjj%2==0)
	document.getElementById("bf").style="color:#ff9900";
else 
		document.getElementById("bf").style="color:white";
jjj++;
setTimeout(blink, 1000);
}
function hd(k){
	var dm=document.getElementById("myInput");
	//document.getElementById("myDropdown").style="display:none";
	var isFocused = (document.activeElement === dm);
	if(!isFocused)
		document.getElementById("myDropdown").style="display:none";
}

function disp(k,y){
    
	if(k==1){
	document.getElementById("cd").innerHTML=y.innerHTML;
//	document.getElementById("dropbtn").style="color:red";
	document.getElementById("bf").style="display:block";
	}
		setTimeout(function (){hd(k) }, 220);
}

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
function prof(){
	var a=document.getElementById('cd').innerHTML;
	document.getElementById("regToSend").value=a;
	document.getElementById("submitForm").submit();
	
}