<?php  
	$shop = array ( "rose" => "5.00","daisy" => "4.00","orchid" => "2.00",);
	asort($shop); 
	foreach($shop as $key => $value)   
		echo $key." costs ".$value." dollars<br />";  
?>