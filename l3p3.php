<?php  
	$browsers = array ("Firefox", "Internet Explorer", "Opera");  
	echo "<select>";  
		foreach($browsers as $browser)   
		{   
			echo "<option name='$browser'>$browser</option>"; 
	 	}  
	echo "</select>"; 
?> 