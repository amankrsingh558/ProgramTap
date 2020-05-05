<script>
var Timer;
var TotalSeconds;
function CreateTimer(TimerID, Time) {
Timer = document.getElementById(TimerID);
TotalSeconds = Time;

UpdateTimer()
window.setTimeout("Tick()", 1000);
}

function Tick() {

	
	
	
	
	 
 <!--var eid="<?php echo $eid; 

       /* $.ajax({
          url: "insertexamstatus.php",
          method: "POST",
          data: {
            resp: 1,eid:eid
          }


        });
		
		
		
		
		
		  $.ajax({
            url: "destroyexam.php"

          });*/
		  
		 // window.location.href = "home.php";

      alert("submit");

       
TotalSeconds = TotalSeconds-1;
UpdateTimer()
window.setTimeout("Tick()", 1000);
}



function UpdateTimer() {
var Seconds = TotalSeconds;
var Days = Math.floor(Seconds / 86400);
Seconds -= Days * 86400;
var Hours = Math.floor(Seconds / 3600);
Seconds -= Hours * (3600);

var Minutes = Math.floor(Seconds / 60);
Seconds -= Minutes * (60);
var TimeStr = ((Days > 0) ? Days + " days " : "") + LeadingZero(Hours) + ":" + LeadingZero(Minutes) + ":" + LeadingZero(Seconds)
Timer.innerHTML = TimeStr;

<!--var eid="<?php echo $eid; ?>";
		/*	$.ajax({  
                url:"time.php",  
                method:"POST",  
                data:{time:TimeStr,eid:eid}
                
                  
           }); */
		   -->
		   
		      // if (TimeStr == "00:01:00") {
         // document.getElementById("save_answer_signal1").style.backgroundColor = "red";

        //}
        //if (TimeStr == "00:00:30") {
        //  document.getElementById("save_answer_signal2").style.backgroundColor = "red";

       // }
		
		
		/////////////////////////////////////////////////////
		
		
		if(TimeStr=="00:00:10")
{

 $(document).ready(function() {

  var intval;
  
    intval = setInterval(function(){
       blinkFont(); 
    },500);
 
    setTimeout(function() {

        clearInterval(intval);
}, 10000);
    
    
    
  });
 
}}
function blinkFont() {
    var curColor = document.getElementById("blink").style.color;
    var curBgC = document.getElementById("blink").style.background;
    var x=document.getElementById("blink").style.color = curColor === "red" ? "#ffffff" : "red";

}


function LeadingZero(Time) {

return (Time < 10) ? "0" + Time : + Time;
}




</script>

 <div id="blink" style="font-size:16px;">Time Left: <span id="timer" ></span></div>
	<script type="text/javascript">window.onload = CreateTimer("timer","<?php echo 50; ?>");</script>
</div>

	