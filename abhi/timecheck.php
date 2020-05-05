<?php 
$x=microtime(true);
//sleep(2);
$y=microtime(true);
$k=gettimeofday();

$l=gettimeofday();
//echo $l." ".$k." ";
//echo $l-$k;
foreach($l as $u){
	echo $u." ";
}
echo "<br>";
foreach($k as $r){
	echo $r." ";
	
}
echo ($l['usec']-$k['usec'])/1000000;

?>