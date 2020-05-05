<?php
$handle = fopen("code3.c", "r");
$x=1;
if ($handle) {
    while (($line = fgets($handle)) !== false) {
        // process the line read.
		
		if($x>=3){
			
		echo $line."/n";
		}
		$x++;
    }

    fclose($handle);
} else {
    // error opening the file.
} 
?>