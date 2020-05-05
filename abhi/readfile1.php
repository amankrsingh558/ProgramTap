<?php
//chmod("code1.c",0777);
$handle = fopen("input3.txt",'r');
//$write=fopen("code90.c",'a');

$my_file="code3.c";
system("gcc {$my_file} 2> error6.txt ");
if ($handle) {
    while (($line = fgets($handle)) !== false) {
      $x=shell_exec("a 3 5");
echo $x." ";
	  
	  }
}


?>