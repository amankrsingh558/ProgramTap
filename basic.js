
var noq=0;
var qn=0;
var lqn=0;

function fide_all_question(){

	for(var i=1; i <= noq; i++){
		
		var did="#q"+i;
	$(did).css('display','none');
	}
}


function show_question(vqn){
	
	change_color(vqn);
	fide_all_question();
	var did="#q"+vqn;
	$(did).css('display','block');
	// hide show next back btn
	//alert(noq+" "+vqn);
	if(vqn >= 2){
	$('#backbtn').css('visibility','visible');
	}
	if(((parseInt(vqn))+1) == noq){
	  
	$('#nextbtn').css('visibility','hidden');
	}
	
 if(vqn < noq-1){
	$('#nextbtn').css('visibility','visible');
	}
	
	if(vqn == 1){
	$('#backbtn').css('visibility','hidden');
	}
	
	// last qn
	qn=vqn;
lqn=vqn;
//setIndividual_time(lqn);
//save_answer(lqn);
	
}

function show_next_question(){


//   alert('clicked');
	if((parseInt(qn)+1) < noq){
	fide_all_question();
	qn=(parseInt(qn)+1);
	var did="#q"+qn;
	$(did).css('display','block');
	}
	// hide show next back btn
	if(qn >= 2){
	$('#backbtn').css('visibility','visible');
	}
	if((parseInt(qn)+1) == noq){
	$('#nextbtn').css('visibility','hidden');
	}
	
	
	change_color(qn);
	//setIndividual_time(lqn);
	//save_answer(lqn);
	
	// last qn
	lqn=qn;	
		
}
function show_back_question(){
	
	if((parseInt(qn)-1) >= 0 ){
	fide_all_question();
	qn=(parseInt(qn)-1);
	var did="#q"+qn;
	$(did).css('display','block');
	}
	// hide show next back btn
	if(qn < noq){
	$('#nextbtn').css('visibility','visible');
	}
	if(qn == 1){
	$('#backbtn').css('visibility','hidden');
	}
	change_color(qn);
	//setIndividual_time(lqn);
	//save_answer(lqn);
	
	// last qn
	lqn=qn;	
		
}


function change_color(qn){
	var did='#qbtn'+qn;
	//var did1='#qbtn'+lqn;
	//alert("butondid1="+did1);
	var q_type='#qname'+lqn;
	
	// if not answered then make red
	// alert($(did).css('backgroundColor'));
	if($(did).css('backgroundColor') != 'rgb(68, 157, 68)' && $(did).css('backgroundColor') != 'rgb(236, 151, 31)'){
	$(did).css('backgroundColor','#c9302c');
	$(did).css('color','#ffffff');
	}
	
	/***********//////////////////
	

	/***************************/
	// answered make green	
}



var review_later;
function review_later(){
	
 
	/*if(review_later[qn] ){
	
		review_later[qn]=0;
		var did='#qbtn'+qn;
	$(did).css('backgroundColor','#c9302c');
			$(did).css('color','#ffffff');	
	}else{
		
		review_later[qn]=1;
	var did='#qbtn'+qn;
	$(did).css('backgroundColor','#ec971f');
	$(did).css('color','#ffffff');
	}*/
	var did='#qbtn'+qn;
	if($(did).css('backgroundColor') == 'rgb(68, 157, 68)' )
	{
		$(did).css('backgroundColor','#ec971f');
	$(did).css('color','#ffffff');
	}
	
	
	
	
}




function cancelmove(position_t,quid,qid,opos){
//save_answer(qn);
position_type=position_t;
global_quid=quid;
global_qid=qid;
global_opos=opos;

if((document.getElementById('warning_div').style.display)=="block"){
document.getElementById('warning_div').style.display="none";
}else{
document.getElementById('warning_div').style.display="block";
if(position_type=="Up"){
var upos=parseInt(global_opos)-parseInt(1);
}else{
var upos=parseInt(global_opos)+parseInt(1);
}
//document.getElementById('qposition').value=upos;

}
}