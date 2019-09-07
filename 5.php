
<?php

   function handshake($a)  
{ 

    if ($a == 0)  
		//ketika nilai 0 maka nilainya direturn 0. 
	//tandanya semua orang telah bersalaman 
        return 0; 
    else
        return ($a - 1) + handshake($a - 1); 
//ketika nilai tidak 0 maka nilai a akan dikurang 1
//tandanya orang tersebut telah berjabat tangan
//dan proses -1 akan berulang hingga semua telah berjabat
//dan nilai a menjadi 0	
} 
  
$orang = 3; 
echo(handshake($orang)); 
?>

