<?php
$line = file("code2.c");
		//if(strpos($line,'malloc')!==false){
		foreach($line as $line){	
			if(strpos($line,'malloc')!==false){
		$start=strpos($line,"malloc")+6;
		for($l=$start;$l<strlen($line);$l++)
		{if($line[$l]=="("){
			$start1=$l+1;
		}
		if($line[$l]==")"){
			$end=$l;
		}
		}
		$k=$end-$start1;
		$f=substr($line,$start1,$k);
		if($f==4)
			echo 'true';
		else
			echo 'false';
		break;}}
	
	



?>