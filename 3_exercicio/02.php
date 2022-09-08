<?php

	function nome($nome1 ,$nome2){ 

	if (strlen($nome1) > strlen($nome2)) {
		
	return $nome1 . ' é maior';
	
	}
	
	else {
	
	return $nome2 . ' é maior';
	
	}
		
	}
	
	echo nome('Jão', 'Tião');
	echo '<br>';
	echo nome('Bingola', 'Minura');
	echo '<br>';
	echo nome('Éder','Gaybriel')
?>