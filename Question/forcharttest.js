

  

	var d=[];
	var dex=[];
    var roll='<?php echo "$qq"; ?>';
	
	function ConceptFromExam(yy){
	 var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("t").innerHTML = this.responseText;
            }
        };
		
             xmlhttp.open("GET", "ConceptFromExam.php?eid="+yy+"&uid="+roll, true);
		xmlhttp.send();
}

	function fetchExam(yy){
		var vv=yy.textContent.toString();
		ConceptFromExam(vv);
			$.ajax({
		url:"ress.php",
		method:"POST",
		data: {
        'roll': roll,
        'eid': vv
    },
		dataType:"JSON",
		success:function(da){
			for(i in da)
			dex[i]=da[i];
			//drawChart();
			
			for(i in d)
				console.log(i+"  da - "+dex[i]);
			drawChart1(-1);
		}
	})
	}
	
	function drawChart1(choice) {
		  if(choice==-1){                                                       // *****************
        var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
       [dex[2],parseInt(100*dex[1]/(dex[0]+dex[1]))],
       [dex[5],parseInt(100*dex[4]/(dex[3]+dex[4]))],
       [dex[8],parseInt(100*dex[7]/(dex[6]+dex[7]))],
       [dex[11],parseInt(100*dex[10]/(dex[9]+dex[10]))],
       [dex[14],parseInt(100*dex[13]/(dex[12]+dex[13]))],
       [dex[17],parseInt(100*dex[16]/(dex[15]+dex[16]))],
       [dex[20],parseInt(100*dex[19]/(dex[18]+dex[19]))],               // OverAll Exam result   
       [dex[23],parseInt(100*dex[22]/(dex[21]+dex[22]))],
       [dex[26],parseInt(100*dex[25]/(dex[24]+dex[25]))],
       [dex[29],parseInt(100*dex[28]/(dex[27]+dex[28]))],
       [dex[32],parseInt(100*dex[31]/(dex[30]+dex[31]))],
       [dex[35],parseInt(100*dex[34]/(dex[33]+dex[34]))],
       [dex[38],parseInt(100*dex[37]/(dex[36]+dex[37]))]
    ]);
        var options = {
          title: 'Exam Wise' ,
		  is3D:true,
        };
	   }
	                                                                            // ************************
																				
	   else {
		     var data = google.visualization.arrayToDataTable([
      ['Language', 'Rating'],
		   ["Right",parseInt(dex[choice+1])],
           ["Wrong",parseInt(dex[choice])]
	   
	      ]);
        var options = {
          title: dex[choice+2] ,
		  is3D:true,
        };
	   }
         var chart = new google.visualization.PieChart(document.getElementById('piechart'));

    function selectHandler() {
      var selectedItem = chart.getSelection()[0];
      if (selectedItem) {
        var topping = data.getValue(selectedItem.row, 0);
		gotit(topping);
      }
    }
    google.visualization.events.addListener(chart, 'select', selectHandler);
    chart.draw(data, options);   
      }                 
	
	function first(){
	$.ajax({
		url:"whole.php",
		method:"POST",
		data:{roll:roll},
		dataType:"JSON",
		success:function(da){
			for(i in da)
			d[i]=da[i];
			drawChart(d);
		}
	})
	}
	
      function drawChart(p) {
		  
		                                                         // *****************
        var data = google.visualization.arrayToDataTable
            ([['X', 'Marks'],
              [p[0], parseInt(p[1])],
              [p[3], parseInt(p[4])],
              [p[6], parseInt(p[7])],
              [p[9], parseInt(p[10])],
              [p[12], parseInt(p[13])]
        ]);

        var options = {
          legend: 'none',
          colors: ['#000099'],
          pointSize: 30,
          pointShape: { type: 'triangle', rotation: 0 }
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options); 
      }
	  
	  
	  
	  
	  var dc=[];
	       function fetchh(conid){
			   
			   $.ajax({
	    url:"wholeConcept.php",
		method:"POST",
		data: {
        'roll': roll,
        'conid': conid
    },
		dataType:"JSON",
		success:function(da){
			
			for(i in da)
			dc[i]=da[i];
			drawChart(dc);
			
			for(i in dc)
				console.log(i+"  dc - "+dc[i]);
			
		}
		})
		   }