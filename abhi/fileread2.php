<?php
$a = 'How_ar\e_you?';

$data=file_get_contents("code3.c");
if (strpos($a, 'are') !== false) {
    echo 'true';
}
else 
	//echo 'false';
/*$m=array("scanf","return","main","b","printf");
for($r=0;$r<5;$r++){
	//echo $m[$r];
$data=str_replace($m[$r],"hello",$data);
}
file_put_contents("code2.c",$data);*/
$r=array("hiii","hello");
foreach($r as $a){
	echo $a;
}
?>